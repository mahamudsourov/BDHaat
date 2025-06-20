document.addEventListener("DOMContentLoaded", function () {
    const loginModal = document.getElementById("loginModal");
    const openLoginBtn = document.getElementById("openLoginBtn");
    const closeLoginBtn = document.getElementById("closeLoginBtn");
    const form = document.getElementById("loginForm");
    const errorMsg = document.getElementById("errorMsg");
    const registerMsg = document.getElementById("registerMsg");

    if (openLoginBtn) {
        openLoginBtn.addEventListener("click", () => {
            loginModal.classList.add("show");
        });
    }

    if (closeLoginBtn) {
        closeLoginBtn.addEventListener("click", () => {
            loginModal.classList.remove("show");
        });
    }

    if (form) {
        form.addEventListener("submit", function (e) {
            e.preventDefault();
            const email = document.getElementById("email").value.trim();
            const password = document.getElementById("password").value.trim();

            if (email === "" || password === "") {
                errorMsg.style.display = "block";
                registerMsg.style.display = "none";
                return;
            }

            const registeredEmail = "test@example.com";
            const registeredPassword = "123456";

            if (email === registeredEmail && password === registeredPassword) {
                alert("Login successful.");
                errorMsg.style.display = "none";
                registerMsg.style.display = "none";
                if (loginModal) loginModal.classList.remove("show");
            } else {
                registerMsg.style.display = "block";
                errorMsg.style.display = "none";
            }
        });
    }
});
