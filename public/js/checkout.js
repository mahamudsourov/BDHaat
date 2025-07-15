function submitOrder() {
    const name = document.getElementById('name').value.trim();
    const email = document.getElementById('email').value.trim();
    const phone = document.getElementById('phone').value.trim();
    const address = document.getElementById('address').value.trim();

    if (!name || !email || !phone || !address) {
        alert('Please fill all fields.');
        return false;
    }

    alert('Order placed successfully! Thank you, ' + name);

    // Clear cart and form
    localStorage.removeItem('cart');
    document.getElementById('checkout-form').reset();

    // Redirect to clothes page
    window.location.href = "/clothes"; 

    return false;
}