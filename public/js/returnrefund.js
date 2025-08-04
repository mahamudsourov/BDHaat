document.addEventListener("DOMContentLoaded", function () {
    const container = document.querySelector(".return-container");
    if (container) {
        container.style.opacity = "0";
        container.style.transform = "translateY(50px)";
        setTimeout(() => {
            container.style.transition = "all 0.8s ease";
            container.style.opacity = "1";
            container.style.transform = "translateY(0)";
        }, 100);
    }
});
