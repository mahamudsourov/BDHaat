// ===== ORDERS PAGE MODAL =====
function openModal(orderId) {
    const modal = document.getElementById('cancelModal');
    const form = document.getElementById('cancelForm');
    form.action = `/user/orders/${orderId}`;
    modal.style.display = 'block';
}

function closeModal() {
    document.getElementById('cancelModal').style.display = 'none';
}

// Close modal on outside click
window.onclick = function(event) {
    const modal = document.getElementById('cancelModal');
    if (event.target == modal) {
        modal.style.display = "none";
    }
}

// ===== FLASH MESSAGE =====
window.onload = function() {
    const flash = document.getElementById('flashMessage');
    if (flash) {
        flash.style.display = 'block';
        setTimeout(() => {
            flash.style.display = 'none';
        }, 2000); // 2 seconds
    }
}