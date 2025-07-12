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
        if (!name || !email || !subject || !message) {
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

        // Simulate successful submission
        setTimeout(() => {
            showStatus("✅ Message sent successfully!", "green");
            form.reset();

            // Hide status after 5 seconds
            setTimeout(() => {
                status.style.display = "none";
            }, 5000);
        }, 1500);
    });

    function showStatus(message, color) {
        status.textContent = message;
        status.style.color = color;
        status.style.display = "block";
    }
});
