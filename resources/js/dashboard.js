const carouselItems = document.querySelectorAll(".carousel-item");
const buttons = document.querySelectorAll(".btn-ghost");
const carousel = document.getElementById("carousel_hint"); // Seleksi elemen tunggal
let currentIndex = 0;
let interval;

// Fungsi untuk menampilkan item dengan animasi slide
function showItem(index) {
    carouselItems.forEach((item, i) => {
        if (i === index) {
            item.style.transform = "translateX(0)";
        } else if (i < index) {
            item.style.transform = "translateX(-100%)";
        } else {
            item.style.transform = "translateX(100%)";
        }
    });

    buttons.forEach((btn, i) => {
        btn.classList.toggle("active", i === index);
    });
}

// Fungsi untuk berpindah ke item berikutnya
function nextItem() {
    const nextIndex = (currentIndex + 1) % carouselItems.length;
    showItem(nextIndex);
    currentIndex = nextIndex;
}

// Fungsi untuk menavigasi ke item tertentu (dari tombol)
function navigateTo(index) {
    clearInterval(interval);
    showItem(index - 1); // Konversi ke indeks 0-based
    currentIndex = index - 1;
    startAutoSlide(); // Restart otomatisasi
}

// Memulai autoplay
function startAutoSlide() {
    interval = setInterval(nextItem, 7000); // Setiap 7 detik
}

// Menghentikan autoplay
function stopAutoSlide() {
    clearInterval(interval);
}

// Event listeners untuk pause dan resume
if (carousel) {
    carousel.addEventListener("mouseover", stopAutoSlide);
    carousel.addEventListener("mouseout", startAutoSlide);
}

// Menjalankan pertama kali
document.addEventListener("DOMContentLoaded", () => {
    showItem(currentIndex); // Tampilkan item awal
    startAutoSlide(); // Mulai autoplay
});
