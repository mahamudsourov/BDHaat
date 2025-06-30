document.addEventListener("DOMContentLoaded", function () {
    const loginModal = document.getElementById("loginModal");
    const registerModal = document.getElementById("registerModal");
    
    // Buttons
    const openLoginBtn = document.getElementById("openLoginBtn");
    const closeLoginBtn = document.getElementById("closeLoginBtn");
    const closeRegisterBtn = document.getElementById("closeRegisterBtn");

    // Forms and error messages
    const loginForm = document.getElementById("loginForm");
    const errorMsg = document.getElementById("errorMsg");
    const registerMsg = document.getElementById("registerMsg");

    const registerForm = document.getElementById("registerForm");
    const registerErrorMsg = document.getElementById("registerErrorMsg");

    // Links
    const switchToRegister = document.querySelector("#loginForm .register-link a");
    const switchToLogin = document.getElementById("switchToLogin");

    // Show login modal
    if (openLoginBtn) {
        openLoginBtn.addEventListener("click", () => {
            loginModal.classList.add("show");
        });
    }

    // Close login modal
    if (closeLoginBtn) {
        closeLoginBtn.addEventListener("click", () => {
            loginModal.classList.remove("show");
            errorMsg.style.display = "none";
            registerMsg.style.display = "none";
        });
    }

    // Close register modal
    if (closeRegisterBtn) {
        closeRegisterBtn.addEventListener("click", () => {
            registerModal.classList.remove("show");
            registerErrorMsg.style.display = "none";
        });
    }

    // Switch to register modal
    if (switchToRegister) {
        switchToRegister.addEventListener("click", (e) => {
            e.preventDefault();
            loginModal.classList.remove("show");
            registerModal.classList.add("show");
        });
    }

    // Switch to login modal
    if (switchToLogin) {
        switchToLogin.addEventListener("click", (e) => {
            e.preventDefault();
            registerModal.classList.remove("show");
            loginModal.classList.add("show");
        });
    }

    // Login form logic
    if (loginForm) {
        loginForm.addEventListener("submit", function (e) {
            e.preventDefault();
            const email = document.getElementById("email").value.trim();
            const password = document.getElementById("password").value.trim();

            errorMsg.style.display = "none";
            registerMsg.style.display = "none";

            if (email === "" || password === "") {
                errorMsg.style.display = "block";
                return;
            }

            const registeredEmail = "test@example.com";
            const registeredPassword = "123456";

            if (email === registeredEmail && password === registeredPassword) {
                alert("Login successful.");
                loginModal.classList.remove("show");
            } else {
                registerMsg.style.display = "block";
            }
        });
    }

    // Register form logic
    if (registerForm) {
        registerForm.addEventListener("submit", function (e) {
            e.preventDefault();
            const name = document.getElementById("regName").value.trim();
            const email = document.getElementById("regEmail").value.trim();
            const phone = document.getElementById("regPhone").value.trim();
            const address = document.getElementById("regAddress").value.trim();

            registerErrorMsg.style.display = "none";

            if (!name || !email || !phone || !address) {
                registerErrorMsg.style.display = "block";
                return;
            }

            alert("Registered successfully!");
            registerModal.classList.remove("show");
        });
    }
});
