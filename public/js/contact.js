document.addEventListener("DOMContentLoaded", function () {
    const form = document.getElementById("contactForm");
    const status = document.getElementById("form-status");

    form.addEventListener("submit", function (e) {
        e.preventDefault();

        const name = form.elements["name"].value.trim();
        const email = form.elements["email"].value.trim();
        const subject = form.elements["subject"].value.trim();
        const message = form.elements["message"].value.trim();

        // Validate required fields
        if (!name || !email || !message) {
            showStatus("❌ Please fill in all required fields.", "red");
            return;
        }

        // Email format check using regex
        const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        if (!emailPattern.test(email)) {
            showStatus("❌ Please enter a valid email address.", "red");
            return;
        }

        showStatus("⏳ Sending...", "#024ecf");

        // Create FormData object
        const formData = new FormData(form);
        
        // Send AJAX request
        fetch('/submit-contact', {
            method: 'POST',
            body: formData,
            headers: {
                'X-Requested-With': 'XMLHttpRequest'
            }
        })
        .then(response => response.json())
        .then(data => {
            if (data.success) {
                showStatus("✅ " + data.success + " We'll contact you shortly.", "green");
                form.reset();
                
                // Hide status after 5 seconds
                setTimeout(() => {
                    status.style.display = "none";
                }, 5000);
            } else {
                showStatus("❌ Something went wrong. Please try again.", "red");
            }
        })
        .catch(error => {
            console.error('Error:', error);
            showStatus("❌ An error occurred. Please try again later.", "red");
        });
    });

    function showStatus(message, color) {
        status.textContent = message;
        status.style.color = color;
        status.style.display = "block";
    }
});
