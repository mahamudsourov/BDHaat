function goToDetails(image, title, description, price) {
    const product = {
        image: image,
        title: title,
        description: description,
        price: price
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