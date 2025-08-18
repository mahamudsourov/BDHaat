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
