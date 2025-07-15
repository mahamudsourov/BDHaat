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