<x-dashboard-layout title="New Data">
    <div class="w-full h-screen overflow-y-scroll scroll-smooth">
        <div id="nav-page" class="px-2 w-full rounded-2xl sticky top-2 backdrop-blur-sm">
            <x-navbar.navbar-newdata />
        </div>
        <div class="flex flex-col">
            <div class="w-ful flex flex-col justify-center items-center mt-7">
                <h1 class="text-[1.5rem] font-bold">TAMBAH DATA BONGKAR/MUAT KAPAL</h1>
                <span>PRODUKSI IKKP MERAK</span>
            </div>
            <div class="flex flex-col lg:flex-row p-2 mt-10 gap-5">
                <form action="" class="grid grid-cols-2 border p-7 rounded-2xl shadow-iconSm">
                    <div class="col-span-1 p-4">
                        <label for="ship_name">Nama Kapal</label>
                        <input type="text" class="p-2 w-full border rounded-xl mb-7 mt-2">

                        <label for="ship_line" class="">Line</label>
                        <input type="text" class="p-2 w-full border rounded-xl mb-7 mt-2">

                        <label for="ship_flag">Flag</label>
                        <input type="text" class="p-2 w-full border rounded-xl mb-7 mt-2">
                    </div>

                    <div class="col-span-1 p-4">
                        <label for="ship_cargo">Cargo</label>
                        <input type="text" class="p-2 w-full border rounded-xl mb-7 mt-2">

                        <label for="ship_t_bongkar">T/Bongkar</label>
                        <input type="text" class="p-2 w-full border rounded-xl mb-7 mt-2">

                        <label for="ship_t_muat">T/Muat</label>
                        <input type="text" class="p-2 w-full border rounded-xl mb-7 mt-2">

                        <div class="w-full flex justify-end items-center">
                            <button class="btn btn-outline">Create</button>
                        </div>
                    </div>
                </form>

                <div class="w-full rounded-2xl overflow-hidden relative">
                    <div id="carousel_new_data" class="carousel w-full h-[250px] relative cursor-pointer">
                        <div id="item1" class="carousel-item absolute inset-0 transition-transform duration-500">
                            <div class="w-full h-full bg-gradient-to-r from-sky-500 to-indigo-500 rounded-2xl">
                                <div class="flex flex-col p-3">
                                    <div class="flex items-center gap-2">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round"
                                            class="lucide lucide-badge-plus">
                                            <path
                                                d="M3.85 8.62a4 4 0 0 1 4.78-4.77 4 4 0 0 1 6.74 0 4 4 0 0 1 4.78 4.78 4 4 0 0 1 0 6.74 4 4 0 0 1-4.77 4.78 4 4 0 0 1-6.75 0 4 4 0 0 1-4.78-4.77 4 4 0 0 1 0-6.76Z" />
                                            <line x1="12" x2="12" y1="8" y2="16" />
                                            <line x1="8" x2="16" y1="12" y2="12" />
                                        </svg>
                                        <span>total T/Muat + T/Bongkar hari ini</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="item2"
                            class="carousel-item absolute inset-0 transition-transform duration-500 translate-x-full">
                            <div class="w-full h-full bg-gradient-to-r from-violet-500 to-fuchsia-500 rounded-2xl">
                                <div class="flex flex-col ">
                                    <div class="flex items-center gap-2 p-3">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round"
                                            class="lucide lucide-badge-plus">
                                            <path
                                                d="M3.85 8.62a4 4 0 0 1 4.78-4.77 4 4 0 0 1 6.74 0 4 4 0 0 1 4.78 4.78 4 4 0 0 1 0 6.74 4 4 0 0 1-4.77 4.78 4 4 0 0 1-6.75 0 4 4 0 0 1-4.78-4.77 4 4 0 0 1 0-6.76Z" />
                                            <line x1="12" x2="12" y1="8" y2="16" />
                                            <line x1="8" x2="16" y1="12" y2="12" />
                                        </svg>
                                        <span>total T/Muat hari ini</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="item3"
                            class="carousel-item absolute inset-0 transition-transform duration-500 translate-x-full">
                            <div class="w-full h-full bg-gradient-to-r from-purple-500 to-pink-500 rounded-2xl">
                                <div class="flex flex-col p-3">
                                    <div class="flex items-center gap-2">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round"
                                            class="lucide lucide-badge-plus">
                                            <path
                                                d="M3.85 8.62a4 4 0 0 1 4.78-4.77 4 4 0 0 1 6.74 0 4 4 0 0 1 4.78 4.78 4 4 0 0 1 0 6.74 4 4 0 0 1-4.77 4.78 4 4 0 0 1-6.75 0 4 4 0 0 1-4.78-4.77 4 4 0 0 1 0-6.76Z" />
                                            <line x1="12" x2="12" y1="8" y2="16" />
                                            <line x1="8" x2="16" y1="12" y2="12" />
                                        </svg>
                                        <span>total T/Bongkar hari ini</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div
                        class="flex w-full justify-center gap-2 pt-5 absolute bottom-5 lg:bottom-52 left-1/2 transform -translate-x-1/2">
                        <a href="#item1" class="btn btn-xs btn-circle btn-ghost shadow-iconSm"
                            onclick="navigateTo(1)"></a>
                        <a href="#item2" class="btn btn-xs btn-circle btn-ghost shadow-iconSm"
                            onclick="navigateTo(2)"></a>
                        <a href="#item3" class="btn btn-xs btn-circle btn-ghost shadow-iconSm"
                            onclick="navigateTo(3)"></a>
                    </div>
                </div>
            </div>

        </div>
    </div>
</x-dashboard-layout>

<script>
    const carouselItems = document.querySelectorAll(".carousel-item");
    const buttons = document.querySelectorAll(".btn-ghost");
    const carousel = document.getElementById("carousel_new_data"); // Seleksi elemen carousel
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
    carousel.addEventListener("mouseover", stopAutoSlide);
    carousel.addEventListener("mouseout", startAutoSlide);

    // Menjalankan pertama kali
    document.addEventListener("DOMContentLoaded", () => {
        showItem(currentIndex); // Tampilkan item awal
        startAutoSlide(); // Mulai autoplay
    });
</script>