document.addEventListener('DOMContentLoaded', function() {
    const product = JSON.parse(localStorage.getItem('selectedProduct'));

    if (product) {
        document.getElementById('mainImg').src = "/images/" + product.image;
        document.getElementById('brand').innerText = product.brand;
        document.getElementById('title').innerText = product.title;
        document.getElementById('price').innerText = "BDT " + product.price;
    } else {
        alert('No product selected');
        window.location.href = "/clothes"; // Laravel রাউট অনুযায়ী adjust করো
    }
});

function addToCart() {
    const quantity = parseInt(document.getElementById('quantity').value);
    if (quantity < 1) {
        alert('Quantity cannot be less than 1');
        return;
    }
    let cart = JSON.parse(localStorage.getItem('cart')) || [];
    const product = JSON.parse(localStorage.getItem('selectedProduct'));

    if (!product) {
        alert('No product selected');
        return;
    }

    let existingIndex = cart.findIndex(item => item.title === product.title);
    if (existingIndex > -1) {
        cart[existingIndex].quantity += quantity;
    } else {
        cart.push({
            ...product,
            quantity
        });
    }

    localStorage.setItem('cart', JSON.stringify(cart));
    alert('Added to cart!');
}

function buyNow() {
    const quantity = parseInt(document.getElementById('quantity').value);
    const product = JSON.parse(localStorage.getItem('selectedProduct'));

    if (!product) {
        alert('No product selected');
        return;
    }

    localStorage.setItem('buynow', JSON.stringify({
        ...product,
        quantity
    }));

    window.location.href = "/checkout";
}