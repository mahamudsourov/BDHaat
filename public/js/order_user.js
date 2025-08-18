// ===== ORDERS PAGE MODAL =====
function openModal(orderId) {
    const modal = document.getElementById('cancelModal');
    const form = document.getElementById('cancelForm');
    form.action = `/user/orders/${orderId}`; // route('user.orders.cancel')
    modal.style.display = 'block';
}

function closeModal() {
    const modal = document.getElementById('cancelModal');
    modal.style.display = 'none';
}

// Close modal on outside click
window.addEventListener('click', function(e) {
    const modal = document.getElementById('cancelModal');
    if (e.target === modal) {
        modal.style.display = 'none';
    }
});

// ===== FLASH MESSAGE AUTO HIDE (4s) =====
window.addEventListener('load', function() {
    const flash = document.getElementById('flashMessage');
    if (flash) {
        setTimeout(() => {
            flash.style.display = 'none';
        }, 4000);
    }
});