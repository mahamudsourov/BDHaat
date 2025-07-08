
document.addEventListener("DOMContentLoaded", function () {
    const form = document.getElementById("contactForm");
    const status = document.getElementById("form-status");

    form.addEventListener("submit", function (e) {
        e.preventDefault();
