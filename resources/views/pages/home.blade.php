@extends('layouts.landing')

@section('content')
<div class="w-full h-screen overflow-y-scroll scroll-smooth">
    <div class="flex flex-col px-72">
        <div class="flex flex-col justify-center items-center mt-28">
            <img src="{{asset('logo-app.png')}}" alt="">
            <h1 class="text-[4rem] text-center">Optimalkan Manajemen Pengiriman Anda dengan Solusi Cerdas Kami
            </h1>
            <p class="mt-5 text-xl text-center">Platform Admin yang Mudah Digunakan untuk Memantau dan Mengelola
                Ekspedisi
                Anda Secara Efisien</p>
        </div>

        <div class="mt-28">
            <div class="flex items-center">
                <div class="flex flex-col p-32">
                    <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 24 24" fill="none"
                        stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                        class="lucide lucide-blend">
                        <circle cx="9" cy="9" r="7" />
                        <circle cx="15" cy="15" r="7" />
                    </svg>
                    <h1 class="text-[3rem]">Team Collaboration</h1>
                    <p class="mt-2 text-[1.5rem]">Kelola banyak data dalam lingkup team yang memudahkan pekerjaan anda.
                    </p>
                </div>
                <img src="{{asset('team.jpeg')}}" alt="" class="w-1/2 rounded-xl">
            </div>
        </div>

        <div class="mt-28">
            <div class="flex items-center">
                <img src="{{asset('Tiramisu fraîcheur aux fruits.jpeg')}}" alt="" class="w-1/2 rounded-xl">
                <div class="flex flex-col p-32">
                    <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 24 24" fill="none"
                        stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                        class="lucide lucide-server-cog">
                        <circle cx="12" cy="12" r="3" />
                        <path d="M4.5 10H4a2 2 0 0 1-2-2V4a2 2 0 0 1 2-2h16a2 2 0 0 1 2 2v4a2 2 0 0 1-2 2h-.5" />
                        <path d="M4.5 14H4a2 2 0 0 0-2 2v4a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2v-4a2 2 0 0 0-2-2h-.5" />
                        <path d="M6 6h.01" />
                        <path d="M6 18h.01" />
                        <path d="m15.7 13.4-.9-.3" />
                        <path d="m9.2 10.9-.9-.3" />
                        <path d="m10.6 15.7.3-.9" />
                        <path d="m13.6 15.7-.4-1" />
                        <path d="m10.8 9.3-.4-1" />
                        <path d="m8.3 13.6 1-.4" />
                        <path d="m14.7 10.8 1-.4" />
                        <path d="m13.4 8.3-.3.9" />
                    </svg>
                    <h1 class="text-[3rem]">Management Cargo</h1>
                    <p class="mt-2 text-[1.5rem]">Kelola dan lacak kargo dengan mudah, mulai dari muatan hingga
                        pengiriman.</p>
                </div>
            </div>
        </div>

        <div class="mt-28">
            <div class="flex items-center">
                <div class="flex flex-col p-32">
                    <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 24 24" fill="none"
                        stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                        class="lucide lucide-mouse-pointer-click">
                        <path d="M14 4.1 12 6" />
                        <path d="m5.1 8-2.9-.8" />
                        <path d="m6 12-1.9 2" />
                        <path d="M7.2 2.2 8 5.1" />
                        <path
                            d="M9.037 9.69a.498.498 0 0 1 .653-.653l11 4.5a.5.5 0 0 1-.074.949l-4.349 1.041a1 1 0 0 0-.74.739l-1.04 4.35a.5.5 0 0 1-.95.074z" />
                    </svg>
                    <h1 class="text-[3rem]">Easy report</h1>
                    <p class="mt-2 text-[1.5rem]">Kelola Laporan periode dengan sekali klik.
                    </p>
                </div>
                <img src="{{asset('laporan2.jpeg')}}" alt="" class="w-1/2 rounded-xl">
            </div>
        </div>
        <div class="bg-gradient-to-r from-cyan-500 to-blue-500 flex justify-center items-center my-20 bg-clip-text">
            <h1 class="text-[2rem] text-transparent ">"Mulai Sekarang dan Tingkatkan Efisiensi Ekspedisi
                Anda!"</h1>
        </div>

    </div>

    <footer class="footer footer-center bg-base-200 text-base-content rounded p-10">
        <nav class="grid grid-flow-col gap-4">
            <a class="link link-hover">About us</a>
            <a class="link link-hover">Contact</a>
            <a class="link link-hover">Feedback</a>
        </nav>
        <nav>
            <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" viewBox="0 0 24 24" fill="none"
                stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                class="lucide lucide-brain-circuit text-info">
                <path d="M12 5a3 3 0 1 0-5.997.125 4 4 0 0 0-2.526 5.77 4 4 0 0 0 .556 6.588A4 4 0 1 0 12 18Z" />
                <path d="M9 13a4.5 4.5 0 0 0 3-4" />
                <path d="M6.003 5.125A3 3 0 0 0 6.401 6.5" />
                <path d="M3.477 10.896a4 4 0 0 1 .585-.396" />
                <path d="M6 18a4 4 0 0 1-1.967-.516" />
                <path d="M12 13h4" />
                <path d="M12 18h6a2 2 0 0 1 2 2v1" />
                <path d="M12 8h8" />
                <path d="M16 8V5a2 2 0 0 1 2-2" />
                <circle cx="16" cy="13" r=".5" />
                <circle cx="18" cy="3" r=".5" />
                <circle cx="20" cy="21" r=".5" />
                <circle cx="20" cy="8" r=".5" />
            </svg>
        </nav>
        <aside>
            <p>Copyright © 2025 - All right reserved by Thermal Developer</p>
        </aside>
    </footer>
</div>
@endsection