document.addEventListener("DOMContentLoaded", function () {
    let cart = JSON.parse(localStorage.getItem("cart")) || [];
    let buyNow = JSON.parse(localStorage.getItem("buynow"));
    let products = [];
    let total = 0;

    if (buyNow) {
        products = [buyNow];
        total = buyNow.price * buyNow.quantity;
    } else if (cart.length > 0) {
        products = cart;
        total = cart.reduce((sum, item) => sum + item.price * item.quantity, 0);
    }

    // Show order summary in checkout page
    const orderSummaryEl = document.getElementById("order-summary");
    const totalAmountEl = document.getElementById("total-amount");

    products.forEach((p) => {
        const productName =
            p.name ?? p.title ?? p.product_name ?? "Unknown Product";
        const li = document.createElement("li");
        li.textContent = `${productName} (x${p.quantity}) - BDT ${
            p.price * p.quantity
        }`;
        orderSummaryEl.appendChild(li);
    });

    totalAmountEl.textContent = `Total: BDT ${total}`;

    // ✅ Message Box function
    function showMessage(msg, type = "success") {
        let box = document.getElementById("checkout-message-box");

        if (!box) {
            box = document.createElement("div");
            box.id = "checkout-message-box";
            box.style.position = "fixed";
            box.style.top = "20px";
            box.style.right = "20px";
            box.style.padding = "10px 20px";
            box.style.borderRadius = "5px";
            box.style.color = "#fff";
            box.style.zIndex = "9999";
            box.style.display = "none";
            document.body.appendChild(box);
        }

        box.innerText = msg;

        if (type === "success") {
            box.style.background = "#28a745"; // green
        } else if (type === "error") {
            box.style.background = "#dc3545"; // red
        } else {
            box.style.background = "#007bff"; // info/blue
        }

        box.style.display = "block";

        setTimeout(() => {
            box.style.display = "none";
        }, 3000);
    }

    // Submit order handler
    document
        .getElementById("checkout-form")
        .addEventListener("submit", async function (e) {
            e.preventDefault();

            const name = document.getElementById("name").value.trim();
            const email = document.getElementById("email").value.trim();
            const phone = document.getElementById("phone").value.trim();
            const address = document.getElementById("address").value.trim();
            const payment_method =
                document.getElementById("payment_method").value;

            const orderDetails = products
                .map((p) => {
                    const productName =
                        p.name ??
                        p.title ??
                        p.product_name ??
                        "Unknown Product";
                    return `${productName} (x${p.quantity}) - BDT ${
                        p.price * p.quantity
                    }`;
                })
                .join("\n");

            try {
                const response = await fetch("/place-order", {
                    method: "POST",
                    headers: {
                        "Content-Type": "application/json",
                        "X-CSRF-TOKEN": document
                            .querySelector('meta[name="csrf-token"]')
                            .getAttribute("content"),
                    },
                    body: JSON.stringify({
                        name,
                        email,
                        phone,
                        address,
                        order_details: orderDetails,
                        total,
                        payment_method,
                    }),
                });

                const result = await response.json();

                if (response.ok) {
                    showMessage(result.message, "success");

                    // Clear localStorage and redirect after short delay
                    localStorage.removeItem("cart");
                    localStorage.removeItem("buynow");
                    setTimeout(() => {
                        window.location.href = "/";
                    }, 1200);
                } else {
                    showMessage(result.message, "error");
                }
            } catch (err) {
                console.error(err);
                showMessage("Order failed!", "error");
            }
        });
});