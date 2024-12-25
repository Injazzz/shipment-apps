document.addEventListener("DOMContentLoaded", function () {
    const themeSwitch = document.getElementById("theme-switch");
    const themeImage = document.getElementById("themeImage");
    const rootElement = document.documentElement;

    if (!themeSwitch || !themeImage) {
        console.error("Element theme-switch or themeImage is missing!");
        return;
    }

    // Fungsi untuk mengubah tema
    const toggleTheme = () => {
        if (themeSwitch.checked) {
            rootElement.classList.add("dark");
            localStorage.setItem("theme", "dark");
        } else {
            rootElement.classList.remove("dark");
            localStorage.setItem("theme", "light");
        }
        updateImage();
    };

    // Fungsi untuk mengubah gambar berdasarkan tema
    const updateImage = () => {
        if (rootElement.classList.contains("dark")) {
            themeImage.src = "/moon.png"; // Gambar untuk mode gelap
            themeImage.alt = "day";
        } else {
            themeImage.src = "/sun.png"; // Gambar untuk mode terang
            themeImage.alt = "night";
        }
    };

    // Load saved theme from localStorage
    const savedTheme = localStorage.getItem("theme");
    if (savedTheme === "dark") {
        rootElement.classList.add("dark");
        themeSwitch.checked = true;
    } else {
        rootElement.classList.remove("dark");
        themeSwitch.checked = false;
    }

    // Set gambar awal
    updateImage();

    // Event listener untuk toggle switch
    themeSwitch.addEventListener("change", toggleTheme);
});
