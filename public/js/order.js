document.addEventListener('DOMContentLoaded', function () {
    document.querySelectorAll('.reorder-btn').forEach(btn => {
        btn.addEventListener('click', () => {
            alert('Product reordered successfully!');
        });
    });

    // Track delivery button handler
    document.querySelectorAll('.track-btn').forEach(btn => {
        btn.addEventListener('click', () => {
            const orderCard = btn.closest('.order-card');
            const timeline = orderCard.querySelector('.delivery-timeline');

            const currentStatus = orderCard.getAttribute('data-current-status') || 'Delivered';

            if (!timeline) {
                alert('Tracking information is not available.');
                return;
            }

            if (timeline.style.display === 'none' || timeline.style.display === '') {
                timeline.style.display = 'block';

                let found = false;
                timeline.querySelectorAll('.step').forEach(step => {
                    const stepName = step.textContent.trim();

                    if (!found) {
                        step.classList.add('completed');
                    } else {
                        step.classList.remove('completed');
                    }

                    if (stepName === currentStatus) {
                        found = true; 
                    }
                });
            } else {
                timeline.style.display = 'none';
            }
        });
    });

    // Cancel pre-order button handler
    document.querySelectorAll('.cancel-preorder-btn').forEach(btn => {
        btn.addEventListener('click', () => {
            if (confirm('Are you sure you want to cancel this pre-order?')) {
                alert('Your pre-order has been cancelled.');
                
            }
        });
    });

    // More info pre-order button handler
    document.querySelectorAll('.info-preorder-btn').forEach(btn => {
        btn.addEventListener('click', () => {
            alert('This pre-order product will be shipped as soon as it becomes available.');
        });
    });
});
