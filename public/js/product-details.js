// Function to update cart count in navbar
function updateCartCount() {
    let cart = JSON.parse(localStorage.getItem('cart')) || [];
    let totalItems = cart.reduce((sum, item) => sum + item.quantity, 0);
    document.getElementById('cart-count').innerText = totalItems;
}


// ✅ Dynamic Message Function
function showMessage(msg, type = 'success') {
    let box = document.getElementById('message-box');

    // যদি না থাকে, create করে body তে append করব
    if (!box) {
        box = document.createElement('div');
        box.id = 'message-box';
        box.style.position = 'fixed';
        box.style.top = '20px';
        box.style.right = '20px';
        box.style.padding = '10px 20px';
        box.style.borderRadius = '5px';
        box.style.color = '#fff';
        box.style.zIndex = '9999';
        box.style.display = 'none';
        document.body.appendChild(box);
    }

    box.innerText = msg;

    // type অনুযায়ী color
    if (type === 'success') {
        box.style.background = '#28a745'; // green
    } else if (type === 'error') {
        box.style.background = '#dc3545'; // red
    } else {
        box.style.background = '#007bff'; // blue/info
    }

    box.style.display = 'block';

    // 3 সেকেন্ড পর hide হয়ে যাবে
    setTimeout(() => {
        box.style.display = 'none';
    }, 3000);
}

document.addEventListener('DOMContentLoaded', function() {
    const product = JSON.parse(localStorage.getItem('selectedProduct'));

    if (product) {
        document.getElementById('mainImg').src = "/storage/" + product.image; // Laravel storage path
        document.getElementById('brand').innerText = product.brand;
        document.getElementById('title').innerText = product.title;
        document.getElementById('price').innerText = "BDT " + product.price;
    } else {
        showMessage('No product selected', 'error');
        window.location.href = "/clothes";
    }

    // Update count on page load
    updateCartCount();
});

function addToCart() {
    const quantity = parseInt(document.getElementById('quantity').value);
    if (quantity < 1) {
        showMessage('Quantity cannot be less than 1', 'error');
        return;
    }

    let cart = JSON.parse(localStorage.getItem('cart')) || [];
    const product = JSON.parse(localStorage.getItem('selectedProduct'));

    if (!product) {
        showMessage('No product selected', 'error');
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
    updateCartCount(); // ✅ Update navbar count immediately
    showMessage('✅ Added to cart!', 'success');
}

function buyNow() {
    const product = JSON.parse(localStorage.getItem('selectedProduct'));
    const quantity = parseInt(document.getElementById('quantity').value) || 1;

    localStorage.setItem('buynow', JSON.stringify({
        id: product.id,
        image: product.image,
        brand: product.brand,
        title: product.title,
        price: product.price,
        quantity: quantity
    }));

    setTimeout(() => {
        window.location.href = "/checkout";
    }, 1000);
}