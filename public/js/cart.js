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

    cart.forEach((item, index) => {
        const itemTotal = item.price * item.quantity;
        totalPrice += itemTotal;

        const row = document.createElement('tr');
        row.innerHTML = `
            <td><img src="${IMAGE_PATH}/${item.image}" alt="${item.title}" class="product-img"></td>
            <td>${item.brand}</td>
            <td>${item.title}</td>
            <td>BDT ${item.price}</td>
            <td>
                <input type="number" min="1" value="${item.quantity}" onchange="updateQuantity(${index}, this.value)" />
            </td>
            <td>BDT ${itemTotal}</td>
            <td><button class="remove-btn" onclick="removeItem(${index})">Remove</button></td>
        `;
        tbody.appendChild(row);
    });

    document.getElementById('total-price').innerText = 'Total: BDT ' + totalPrice;
    document.getElementById('checkout-btn').style.display = 'inline-block';
}


function updateQuantity(index, newQuantity) {
    let cart = JSON.parse(localStorage.getItem('cart')) || [];
    newQuantity = parseInt(newQuantity);
    if (newQuantity < 1) {
        alert('Quantity cannot be less than 1');
        loadCart();
        return;
    }
    cart[index].quantity = newQuantity;
    localStorage.setItem('cart', JSON.stringify(cart));
    loadCart();
}

function removeItem(index) {
    let cart = JSON.parse(localStorage.getItem('cart')) || [];
    cart.splice(index, 1);
    localStorage.setItem('cart', JSON.stringify(cart));
    loadCart();
}

window.onload = loadCart;