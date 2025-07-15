function loadCart() {
    let cart = JSON.parse(localStorage.getItem('cart')) || [];
    let tbody = document.querySelector('#cart-table tbody');
    tbody.innerHTML = '';

    if (cart.length === 0) {
        tbody.innerHTML = '<tr><td colspan="7" style="text-align:center;">Your cart is empty.</td></tr>';
        document.getElementById('checkout-btn').style.display = 'none';
        document.getElementById('total-price').innerText = '';
        return;
    }

    let totalPrice = 0;