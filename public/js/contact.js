
document.addEventListener("DOMContentLoaded", function () {
    const form = document.getElementById("contactForm");
    const status = document.getElementById("form-status");

    form.addEventListener("submit", function (e) {
        e.preventDefault();
        
        const name = form.elements["name"].value.trim();
        const email = form.elements["email"].value.trim();
        const subject = form.elements["subject"].value.trim();
        const message = form.elements["message"].value.trim();

        if (!name || !email || !message) {
            showStatus("Please fill in all required fields.", "red");
            return;
        }
