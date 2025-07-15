function goToDetails(image, brand, title, price) {
    const product = {
        image,
        brand,
        title,
        price
    };
    localStorage.setItem('selectedProduct', JSON.stringify(product));
    window.location.href = "/product-details";
}

// Load cart count on page load
document.addEventListener("DOMContentLoaded", function() {
    updateCartCount();
});

// Function to update cart count
function updateCartCount() {
    let cart = JSON.parse(localStorage.getItem('cart')) || [];
    document.getElementById('cart-count').innerText = cart.length;
}