document.getElementById('checkout-form').addEventListener('submit', async function (e) {
    e.preventDefault();

    const name = document.getElementById('name').value.trim();
    const email = document.getElementById('email').value.trim();
    const phone = document.getElementById('phone').value.trim();
    const address = document.getElementById('address').value.trim();

    let cart = JSON.parse(localStorage.getItem('cart')) || [];
    let buyNow = JSON.parse(localStorage.getItem('buynow'));
    let products = [];
    let total = 0;

    if (buyNow) {
        products = [buyNow];
        total = buyNow.price * buyNow.quantity;
    } else if (cart.length > 0) {
        products = cart;
        total = cart.reduce((sum, item) => sum + item.price * item.quantity, 0);
    } else {
        alert("No items to checkout.");
        return;
    }

    const response = await fetch("/place-order", {
        method: "POST",
        headers: {
            "Content-Type": "application/json",
            "X-CSRF-TOKEN": document.querySelector('meta[name="csrf-token"]').getAttribute('content')
        },
        body: JSON.stringify({
            name, email, phone, address, products, total
        })
    });

    const result = await response.json();

    alert(result.message);

    // clear localStorage and redirect
    localStorage.removeItem('cart');
    localStorage.removeItem('buynow');
    window.location.href = "/clothes";
});
