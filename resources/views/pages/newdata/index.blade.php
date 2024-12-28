@extends('layouts.dashboard')

@section('content')
<div class="w-full h-screen overflow-y-scroll scroll-smooth">
    <div id="nav-page" class="px-2 w-full rounded-2xl sticky top-2 backdrop-blur-sm z-50">
        <x-navbar.navbar-newdata />
    </div>
    <div class="flex flex-col">
        <div class="w-ful flex flex-col justify-center items-center mt-10">
            <h1 class="text-[1.5rem] font-bold">TAMBAH DATA BONGKAR/MUAT KAPAL</h1>
            <span>PRODUKSI IKKP MERAK</span>
        </div>
        <div class="flex flex-col lg:flex-row p-2 mt-20 gap-5">
            <form action="" class="grid grid-cols-2 p-3 md:p-5 lg:p-7 rounded-2xl shadow-iconSm dark:border-zinc-800">
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

            <div class="w-full h-fit rounded-2xl overflow-hidden relative">
                <div id="carousel_hint"
                    class="carousel w-full h-[250px] relative cursor-pointer shadow-icon border dark:border-zinc-800 rounded-2xl">
                    <div id="item1" class="carousel-item absolute inset-0 transition-transform duration-500">
                        <div class="w-full h-full bg-gradient-to-r from-sky-500 to-indigo-500 rounded-2xl">
                            <div class="flex flex-col p-3">
                                <div class="flex items-center gap-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" class="lucide lucide-badge-plus">
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
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" class="lucide lucide-badge-plus">
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
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" class="lucide lucide-badge-plus">
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
                    class="flex w-full justify-center gap-2 pt-5 absolute bottom-7 left-1/2 transform -translate-x-1/2">
                    <a href="#item1" class="btn btn-xs btn-circle btn-ghost shadow-iconSm" onclick="navigateTo(1)"></a>
                    <a href="#item2" class="btn btn-xs btn-circle btn-ghost shadow-iconSm" onclick="navigateTo(2)"></a>
                    <a href="#item3" class="btn btn-xs btn-circle btn-ghost shadow-iconSm" onclick="navigateTo(3)"></a>
                </div>
            </div>
        </div>

    </div>

    <div class="pt-10 px-2">
        <div class="mb-3">
            <h1 class="text-2xl">Recently Added</h1>
        </div>
        <div class="w-full h-fit rounded-2xl mb-5">
            <ul class="timeline timeline-snap-icon max-md:timeline-compact timeline-vertical">
                <li>
                    <div class="timeline-middle">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="h-5 w-5">
                            <path fill-rule="evenodd"
                                d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.857-9.809a.75.75 0 00-1.214-.882l-3.483 4.79-1.88-1.88a.75.75 0 10-1.06 1.061l2.5 2.5a.75.75 0 001.137-.089l4-5.5z"
                                clip-rule="evenodd" />
                        </svg>
                    </div>
                    <div class="timeline-start mb-10 md:text-end w-full">
                        <time class="font-mono italic">1984</time>
                        <div class="text-lg font-black">BG RIMAU 3003</div>
                        <ul class="flex flex-col gap-2 xl:flex-row-reverse xl:justify-between mt-2 overflow-x-auto">
                            <li class="flex p-2 gap-2 items-center md:flex-row-reverse xl:flex-row">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="lucide lucide-rail-symbol text-error">
                                    <path d="M5 15h14" />
                                    <path d="M5 9h14" />
                                    <path d="m14 20-5-5 6-6-5-5" />
                                </svg>
                                Line
                            </li>
                            <li class="flex p-2 gap-2 items-center md:flex-row-reverse xl:flex-row">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="lucide lucide-flag text-primary">
                                    <path d="M4 15s1-1 4-1 5 2 8 2 4-1 4-1V3s-1 1-4 1-5-2-8-2-4 1-4 1z" />
                                    <line x1="4" x2="4" y1="22" y2="15" />
                                </svg>
                                Flag
                            </li>
                            <li class="flex p-2 gap-2 items-center md:flex-row-reverse xl:flex-row">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="lucide lucide-package text-success">
                                    <path
                                        d="M11 21.73a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73z" />
                                    <path d="M12 22V12" />
                                    <path d="m3.3 7 7.703 4.734a2 2 0 0 0 1.994 0L20.7 7" />
                                    <path d="m7.5 4.27 9 5.15" />
                                </svg>
                                Cargo
                            </li>
                            <li class="flex p-2 gap-2 items-center md:flex-row-reverse xl:flex-row">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="lucide lucide-package-open text-warning">
                                    <path d="M12 22v-9" />
                                    <path
                                        d="M15.17 2.21a1.67 1.67 0 0 1 1.63 0L21 4.57a1.93 1.93 0 0 1 0 3.36L8.82 14.79a1.655 1.655 0 0 1-1.64 0L3 12.43a1.93 1.93 0 0 1 0-3.36z" />
                                    <path
                                        d="M20 13v3.87a2.06 2.06 0 0 1-1.11 1.83l-6 3.08a1.93 1.93 0 0 1-1.78 0l-6-3.08A2.06 2.06 0 0 1 4 16.87V13" />
                                    <path
                                        d="M21 12.43a1.93 1.93 0 0 0 0-3.36L8.83 2.2a1.64 1.64 0 0 0-1.63 0L3 4.57a1.93 1.93 0 0 0 0 3.36l12.18 6.86a1.636 1.636 0 0 0 1.63 0z" />
                                </svg>
                                T/Bongkar
                            </li>
                            <li class="flex p-2 gap-2 items-center md:flex-row-reverse xl:flex-row">
                                <img src="{{asset('package.png')}}" alt="T/muat" class="w-7 h-7">
                                T/Muat
                            </li>
                        </ul>
                    </div>
                    <hr />
                </li>
                <li>
                    <hr />
                    <div class="timeline-middle">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="h-5 w-5">
                            <path fill-rule="evenodd"
                                d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.857-9.809a.75.75 0 00-1.214-.882l-3.483 4.79-1.88-1.88a.75.75 0 10-1.06 1.061l2.5 2.5a.75.75 0 001.137-.089l4-5.5z"
                                clip-rule="evenodd" />
                        </svg>
                    </div>
                    <div class="timeline-end md:mb-10 w-full">
                        <time class="font-mono italic">1984</time>
                        <div class="text-lg font-black">BG RIMAU 3004</div>
                        <ul class="flex flex-col gap-2 xl:flex-row xl:justify-between mt-2 overflow-x-auto">
                            <li class="flex p-2 gap-2 items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="lucide lucide-rail-symbol text-error">
                                    <path d="M5 15h14" />
                                    <path d="M5 9h14" />
                                    <path d="m14 20-5-5 6-6-5-5" />
                                </svg>
                                Line
                            </li>
                            <li class="flex p-2 gap-2 items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="lucide lucide-flag text-primary">
                                    <path d="M4 15s1-1 4-1 5 2 8 2 4-1 4-1V3s-1 1-4 1-5-2-8-2-4 1-4 1z" />
                                    <line x1="4" x2="4" y1="22" y2="15" />
                                </svg>
                                Flag
                            </li>
                            <li class="flex p-2 gap-2 items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="lucide lucide-package text-success">
                                    <path
                                        d="M11 21.73a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73z" />
                                    <path d="M12 22V12" />
                                    <path d="m3.3 7 7.703 4.734a2 2 0 0 0 1.994 0L20.7 7" />
                                    <path d="m7.5 4.27 9 5.15" />
                                </svg>
                                Cargo
                            </li>
                            <li class="flex p-2 gap-2 items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="lucide lucide-package-open text-warning">
                                    <path d="M12 22v-9" />
                                    <path
                                        d="M15.17 2.21a1.67 1.67 0 0 1 1.63 0L21 4.57a1.93 1.93 0 0 1 0 3.36L8.82 14.79a1.655 1.655 0 0 1-1.64 0L3 12.43a1.93 1.93 0 0 1 0-3.36z" />
                                    <path
                                        d="M20 13v3.87a2.06 2.06 0 0 1-1.11 1.83l-6 3.08a1.93 1.93 0 0 1-1.78 0l-6-3.08A2.06 2.06 0 0 1 4 16.87V13" />
                                    <path
                                        d="M21 12.43a1.93 1.93 0 0 0 0-3.36L8.83 2.2a1.64 1.64 0 0 0-1.63 0L3 4.57a1.93 1.93 0 0 0 0 3.36l12.18 6.86a1.636 1.636 0 0 0 1.63 0z" />
                                </svg>
                                T/Bongkar
                            </li>
                            <li class="flex p-1.5 gap-1.5 items-center">
                                <img src="{{asset('package.png')}}" alt="T/muat" class="w-7 h-7">
                                T/Muat
                            </li>
                        </ul>
                    </div>
                    <hr />
                </li>
                <li>
                    <hr />
                    <div class="timeline-middle">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="h-5 w-5">
                            <path fill-rule="evenodd"
                                d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.857-9.809a.75.75 0 00-1.214-.882l-3.483 4.79-1.88-1.88a.75.75 0 10-1.06 1.061l2.5 2.5a.75.75 0 001.137-.089l4-5.5z"
                                clip-rule="evenodd" />
                        </svg>
                    </div>
                    <div class="timeline-start mb-10 md:text-end w-full">
                        <time class="font-mono italic">1984</time>
                        <div class="text-lg font-black">BG RIMAU 3003</div>
                        <ul class="flex flex-col gap-2 xl:flex-row-reverse xl:justify-between mt-2 overflow-x-auto">
                            <li class="flex p-2 gap-2 items-center md:flex-row-reverse xl:flex-row">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="lucide lucide-rail-symbol text-error">
                                    <path d="M5 15h14" />
                                    <path d="M5 9h14" />
                                    <path d="m14 20-5-5 6-6-5-5" />
                                </svg>
                                Line
                            </li>
                            <li class="flex p-2 gap-2 items-center md:flex-row-reverse xl:flex-row">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="lucide lucide-flag text-primary">
                                    <path d="M4 15s1-1 4-1 5 2 8 2 4-1 4-1V3s-1 1-4 1-5-2-8-2-4 1-4 1z" />
                                    <line x1="4" x2="4" y1="22" y2="15" />
                                </svg>
                                Flag
                            </li>
                            <li class="flex p-2 gap-2 items-center md:flex-row-reverse xl:flex-row">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="lucide lucide-package text-success">
                                    <path
                                        d="M11 21.73a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73z" />
                                    <path d="M12 22V12" />
                                    <path d="m3.3 7 7.703 4.734a2 2 0 0 0 1.994 0L20.7 7" />
                                    <path d="m7.5 4.27 9 5.15" />
                                </svg>
                                Cargo
                            </li>
                            <li class="flex p-2 gap-2 items-center md:flex-row-reverse xl:flex-row">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="lucide lucide-package-open text-warning">
                                    <path d="M12 22v-9" />
                                    <path
                                        d="M15.17 2.21a1.67 1.67 0 0 1 1.63 0L21 4.57a1.93 1.93 0 0 1 0 3.36L8.82 14.79a1.655 1.655 0 0 1-1.64 0L3 12.43a1.93 1.93 0 0 1 0-3.36z" />
                                    <path
                                        d="M20 13v3.87a2.06 2.06 0 0 1-1.11 1.83l-6 3.08a1.93 1.93 0 0 1-1.78 0l-6-3.08A2.06 2.06 0 0 1 4 16.87V13" />
                                    <path
                                        d="M21 12.43a1.93 1.93 0 0 0 0-3.36L8.83 2.2a1.64 1.64 0 0 0-1.63 0L3 4.57a1.93 1.93 0 0 0 0 3.36l12.18 6.86a1.636 1.636 0 0 0 1.63 0z" />
                                </svg>
                                T/Bongkar
                            </li>
                            <li class="flex p-2 gap-2 items-center md:flex-row-reverse xl:flex-row">
                                <img src="{{asset('package.png')}}" alt="T/muat" class="w-7 h-7">
                                T/Muat
                            </li>
                        </ul>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</div>
@endsection



<script>
    const carouselItems = document.querySelectorAll(".carousel-item");
    const buttons = document.querySelectorAll(".btn-ghost");
    const carousel = document.getElementById("carousel_hint"); // Seleksi elemen carousel
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