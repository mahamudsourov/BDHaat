document.addEventListener("DOMContentLoaded", function () {
    const cartIcon = document.getElementById("cart-icon");
    const loginModal = document.getElementById("loginModal");
    const cartModal = document.getElementById("cartModal");
    const cartItemsContainer = document.getElementById("cartItems");
    const cartSubtotal = document.getElementById("cartSubtotal");
    const closeCartBtn = document.getElementById("closeCartBtn");

    if (cartIcon) {
        cartIcon.addEventListener("click", function (e) {
            e.preventDefault();
            const isLoggedIn = localStorage.getItem("isLoggedIn") === "true";
            if (!isLoggedIn) {
                loginModal.classList.add("show");
            } else {
                cartModal.classList.add("show");
                loadDemoCartItems();
            }
        });
    }

    if (closeCartBtn) {
        closeCartBtn.addEventListener("click", () => {
            cartModal.classList.remove("show");
        });
    }

    function loadDemoCartItems() {
        const demoItems = [
            { name: "Punjabi-1", price: 890, quantity: 1 },
            { name: "Sari-1", price: 790, quantity: 2 },
            { name: "Chomchom", price: 1050, quantity: 1 }
        ];

        cartItemsContainer.innerHTML = "";
        let subtotal = 0;

        demoItems.forEach(item => {
            const itemDiv = document.createElement("div");
            itemDiv.classList.add("cart-item");
            itemDiv.innerHTML = `
                <p><strong>${item.name}</strong> x${item.quantity}</p>
                <p>BDT ${item.price * item.quantity}</p>
            `;
            cartItemsContainer.appendChild(itemDiv);
            subtotal += item.price * item.quantity;
        });

        cartSubtotal.textContent = "Subtotal: BDT " + subtotal;
    }
});
