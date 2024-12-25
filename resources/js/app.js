import "./bootstrap";

document.addEventListener("DOMContentLoaded", () => {
    const toggleButton = document.getElementById("menu-toggle");
    const mobileMenu = document.getElementById("mobile-menu");
    const closedIcon = document.getElementById("menu-closed-icon");
    const openedIcon = document.getElementById("menu-opened-icon");

    toggleButton.addEventListener("click", () => {
        const isMenuOpen = mobileMenu.classList.contains("hidden");

        // Toggle menu visibility
        if (isMenuOpen) {
            mobileMenu.classList.remove("hidden");
            closedIcon.classList.add("hidden");
            openedIcon.classList.remove("hidden");
        } else {
            mobileMenu.classList.add("hidden");
            closedIcon.classList.remove("hidden");
            openedIcon.classList.add("hidden");
        }
    });
});
