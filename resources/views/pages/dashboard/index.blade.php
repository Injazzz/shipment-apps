@extends('layouts.dashboard')

@section('content')

<div class="w-full p-5">
    {{-- navtop --}}
    <nav class="flex justify-between items-center">
        <div class="text-xl flex flex-col">Wellcome <span class="font-semibold text-xl">{{$user->name}}</span></div>
    </nav>

    {{-- cards --}}
    <div class="flex mt-12">
        <div class="w-8/12 flex flex-col gap-10">
            <div class="flex flex-col gap-3">
                <div class="flex items-center gap-3">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none"
                        stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                        class="lucide lucide-book-text">
                        <path
                            d="M4 19.5v-15A2.5 2.5 0 0 1 6.5 2H19a1 1 0 0 1 1 1v18a1 1 0 0 1-1 1H6.5a1 1 0 0 1 0-5H20" />
                        <path d="M8 11h8" />
                        <path d="M8 7h6" />
                    </svg>
                    <span class="text-md">Total data</span>
                </div>

                <div class="flex flex-wrap gap-10">
                    <div class="w-80 h-28 shadow-pils rounded-2xl bg-success/35">
                        <div class="flex h-full">
                            <div class="w-28 flex items-center justify-center">
                                <svg xmlns="http://www.w3.org/2000/svg" width="74" height="74" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="lucide lucide-ship text-success">
                                    <path d="M12 10.189V14" />
                                    <path d="M12 2v3" />
                                    <path d="M19 13V7a2 2 0 0 0-2-2H7a2 2 0 0 0-2 2v6" />
                                    <path
                                        d="M19.38 20A11.6 11.6 0 0 0 21 14l-8.188-3.639a2 2 0 0 0-1.624 0L3 14a11.6 11.6 0 0 0 2.81 7.76" />
                                    <path
                                        d="M2 21c.6.5 1.2 1 2.5 1 2.5 0 2.5-2 5-2 1.3 0 1.9.5 2.5 1s1.2 1 2.5 1c2.5 0 2.5-2 5-2 1.3 0 1.9.5 2.5 1" />
                                </svg>
                            </div>

                            <div class="flex flex-col gap-1 py-3">
                                <p>Total Data Kapal</p>
                                <span class="texl-xl font-bold">
                                    @php
                                    $totalShips = array_sum($chartData['total_ships']);
                                    @endphp
                                    {{$totalShips}}
                                </span>
                            </div>
                        </div>
                    </div>

                    <div class="w-80 h-28 shadow-pils rounded-2xl bg-info/35">
                        <div class="flex h-full">
                            <div class="w-28 flex items-center justify-center">
                                <svg xmlns="http://www.w3.org/2000/svg" width="74" height="74" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="lucide lucide-package-open text-info">
                                    <path d="M12 22v-9" />
                                    <path
                                        d="M15.17 2.21a1.67 1.67 0 0 1 1.63 0L21 4.57a1.93 1.93 0 0 1 0 3.36L8.82 14.79a1.655 1.655 0 0 1-1.64 0L3 12.43a1.93 1.93 0 0 1 0-3.36z" />
                                    <path
                                        d="M20 13v3.87a2.06 2.06 0 0 1-1.11 1.83l-6 3.08a1.93 1.93 0 0 1-1.78 0l-6-3.08A2.06 2.06 0 0 1 4 16.87V13" />
                                    <path
                                        d="M21 12.43a1.93 1.93 0 0 0 0-3.36L8.83 2.2a1.64 1.64 0 0 0-1.63 0L3 4.57a1.93 1.93 0 0 0 0 3.36l12.18 6.86a1.636 1.636 0 0 0 1.63 0z" />
                                </svg>
                            </div>

                            <div class="flex flex-col gap-1 py-3 overflow-x-hidden">
                                <p>Total Data T/Bongkar</p>
                                <span class="texl-xl font-bold w-48">
                                    @php
                                    // Menghitung total T/Muat dari chartData
                                    $totalTbongkar = array_sum($chartData['total_tbongkar']);
                                    $tonnage = $totalTbongkar / 1000;
                                    $formattedTonnage = strpos(number_format($tonnage, 3, '.', ''), '.') === false
                                    ? number_format($tonnage, 2, ',', '.')
                                    : rtrim(rtrim(number_format($tonnage, 3, ',', '.'), '0'), ',');
                                    @endphp
                                    {{ $formattedTonnage }} ton
                                </span>
                            </div>
                        </div>
                    </div>

                    <div class="w-80 h-28 shadow-pils rounded-2xl bg-error/35">
                        <div class="flex h-full">
                            <div class="w-28 flex items-center justify-center">
                                <svg xmlns="http://www.w3.org/2000/svg" width="74" height="74" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="lucide lucide-package-2 text-error">
                                    <path d="M3 9h18v10a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V9Z" />
                                    <path d="m3 9 2.45-4.9A2 2 0 0 1 7.24 3h9.52a2 2 0 0 1 1.8 1.1L21 9" />
                                    <path d="M12 3v6" />
                                </svg>
                            </div>

                            <div class="flex flex-col gap-1 py-3 overflow-x-hidden">
                                <p>Total Data T/Muat</p>
                                <span class="texl-xl font-bold w-48">
                                    @php
                                    // Menghitung total T/Muat dari chartData
                                    $totalTmuat = array_sum($chartData['total_tmuat']);
                                    $tonnage = $totalTmuat / 1000;
                                    $formattedTonnage = strpos(number_format($tonnage, 3, '.', ''), '.') === false
                                    ? number_format($tonnage, 2, ',', '.')
                                    : rtrim(rtrim(number_format($tonnage, 3, ',', '.'), '0'), ',');
                                    @endphp
                                    {{ $formattedTonnage }} ton
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="flex flex-col gap-3">
                <div class="flex gap-3 items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none"
                        stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                        class="lucide lucide-chart-no-axes-combined">
                        <path d="M12 16v5" />
                        <path d="M16 14v7" />
                        <path d="M20 10v11" />
                        <path d="m22 3-8.646 8.646a.5.5 0 0 1-.708 0L9.354 8.354a.5.5 0 0 0-.707 0L2 15" />
                        <path d="M4 18v3" />
                        <path d="M8 14v7" />
                    </svg>
                    <span class="text-md">Progress</span>
                </div>

                <div class="w-full h-fit shadow-pils rounded-2xl bg-white/35">
                    <canvas id="shipsChart" width="400" height="200"></canvas>
                </div>
            </div>

            <div class="flex flex-col gap-3">
                <div class="flex gap-3 items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none"
                        stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                        class="lucide lucide-history">
                        <path d="M3 12a9 9 0 1 0 9-9 9.75 9.75 0 0 0-6.74 2.74L3 8" />
                        <path d="M3 3v5h5" />
                        <path d="M12 7v5l4 2" />
                    </svg>
                    <span class="text-md">Recently added data</span>
                </div>

                <ul class="timeline timeline-snap-icon max-md:timeline-compact timeline-vertical">
                    @foreach ($ships as $ship)
                    <li>
                        <div class="timeline-middle">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                                class="h-5 w-5">
                                <path fill-rule="evenodd"
                                    d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.857-9.809a.75.75 0 00-1.214-.882l-3.483 4.79-1.88-1.88a.75.75 0 10-1.06 1.061l2.5 2.5a.75.75 0 001.137-.089l4-5.5z"
                                    clip-rule="evenodd" />
                            </svg>
                        </div>
                        <div
                            class="@if ($loop->iteration % 2 == 1) timeline-start mb-10 md:text-end @else timeline-end md:mb-10 @endif w-full">
                            <time class="font-mono text-sm">{{
                                \Carbon\Carbon::parse($ship->created_at)->translatedFormat('d
                                F Y') }}</time>
                            <div class="text-lg font-black">{{$ship->ship_name}}</div>
                            <ul
                                class="@if ($loop->iteration % 2 == 1)  xl:flex-row-reverse  @else xl:flex-row  @endif flex flex-col gap-2 xl:justify-between mt-2 overflow-x-auto border rounded-lg shadow-iconSm">
                                <li
                                    class="@if ($loop->iteration % 2 == 1)  md:flex-row-reverse xl:flex-row @else  @endif flex p-2 gap-2 items-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" class="lucide lucide-rail-symbol text-error">
                                        <path d="M5 15h14" />
                                        <path d="M5 9h14" />
                                        <path d="m14 20-5-5 6-6-5-5" />
                                    </svg>
                                    <span class="text-sm">{{$ship->ship_line}}</span>
                                </li>
                                <li
                                    class="@if ($loop->iteration % 2 == 1)  md:flex-row-reverse xl:flex-row @else  @endif flex p-2 gap-2 items-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" class="lucide lucide-flag text-primary">
                                        <path d="M4 15s1-1 4-1 5 2 8 2 4-1 4-1V3s-1 1-4 1-5-2-8-2-4 1-4 1z" />
                                        <line x1="4" x2="4" y1="22" y2="15" />
                                    </svg>
                                    <span class="text-sm">{{ $ship->ship_flag }}</span>
                                </li>
                                <li
                                    class="@if ($loop->iteration % 2 == 1)  md:flex-row-reverse xl:flex-row @else  @endif flex p-2 gap-2 items-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" class="lucide lucide-package text-success">
                                        <path
                                            d="M11 21.73a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73z" />
                                        <path d="M12 22V12" />
                                        <path d="m3.3 7 7.703 4.734a2 2 0 0 0 1.994 0L20.7 7" />
                                        <path d="m7.5 4.27 9 5.15" />
                                    </svg>
                                    <span class="text-sm">{{$ship->ship_cargo}}</span>
                                </li>
                                <li
                                    class="@if ($loop->iteration % 2 == 1)  md:flex-row-reverse xl:flex-row @else  @endif flex p-2 gap-2 items-center">
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
                                    @php
                                    $tonnage = $ship->ship_t_bongkar / 1000;
                                    $formattedTonnage = strpos(number_format($tonnage, 3, '.', ''), '.') === false
                                    ? number_format($tonnage, 2, ',', '.')
                                    : rtrim(rtrim(number_format($tonnage, 3, ',', '.'), '0'), ',');
                                    @endphp
                                    <span class="text-sm">{{ $formattedTonnage }}</span>
                                </li>
                                <li
                                    class="@if ($loop->iteration % 2 == 1)  md:flex-row-reverse xl:flex-row @else  @endif flex p-2 gap-2 items-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" class="lucide lucide-package-2 text-secondary">
                                        <path d="M3 9h18v10a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V9Z" />
                                        <path d="m3 9 2.45-4.9A2 2 0 0 1 7.24 3h9.52a2 2 0 0 1 1.8 1.1L21 9" />
                                        <path d="M12 3v6" />
                                    </svg>
                                    @php
                                    $tonnage = $ship->ship_t_muat / 1000;
                                    $formattedTonnage = strpos(number_format($tonnage, 3, '.', ''), '.') === false
                                    ? number_format($tonnage, 2, ',', '.')
                                    : rtrim(rtrim(number_format($tonnage, 3, ',', '.'), '0'), ',');
                                    @endphp
                                    <span class="text-sm">{{ $formattedTonnage }}</span>
                                </li>
                            </ul>
                        </div>
                        <hr />
                    </li>
                    @endforeach
                </ul>
            </div>
        </div>
        <div class="w-4/12 pl-10 flex flex-col gap-10">
            <div class="w-full h-96 shadow-pils rounded-3xl bg-hero-pattern bg-no-repeat bg-cover">
                <div class="flex flex-col justify-center items-center">
                    <div class="avatar mt-12 shadow-pilsDark rounded-full">
                        <div class="w-52 rounded-full">
                            <img src="{{ asset('storage/profile_photos/' . $user->profile_photo) }}" />
                        </div>
                    </div>

                    <span class="mt-12 dark:text-black">{{$user->email}}</span>
                </div>
            </div>

            <div class="flex flex-col">
                <div class="flex gap-2 items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none"
                        stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                        class="lucide lucide-trending-up-down">
                        <path d="M14.828 14.828 21 21" />
                        <path d="M21 16v5h-5" />
                        <path d="m21 3-9 9-4-4-6 6" />
                        <path d="M21 8V3h-5" />
                    </svg>
                    <p>Perbandingan total data /bulan</p>
                </div>

                <div
                    class="mt-3 w-full h-fit flex flex-col justify-between shadow-pils rounded-3xl bg-white/35 dark:text-black">
                    <div class="p-10">
                        <div class="flex flex-col">
                            <div class="flex gap-2">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="lucide lucide-circle-equal text-info">
                                    <path d="M7 10h10" />
                                    <path d="M7 14h10" />
                                    <circle cx="12" cy="12" r="10" />
                                </svg>
                                @if(!is_null($comparison['previous_month']) && $comparison['previous_month']['month']
                                !== 'N/A' &&
                                $comparison['previous_month']['year'] !== 'N/A')
                                <span>Bulan {{ $comparison['previous_month']['month'] }} - {{
                                    $comparison['previous_month']['year'] }}</span>
                                @endif
                            </div>
                            <div class="h-14 border-l-2 border-info ml-3 pl-3">
                                @if(!is_null($comparison['previous_month']) && $comparison['previous_month']['month']
                                !== 'N/A' &&
                                $comparison['previous_month']['year'] !== 'N/A')
                                <span>{{ $comparison['previous_month']['total_ships'] }} data</span>
                                @endif
                            </div>
                        </div>
                        <div class="flex flex-col">
                            <div class="flex gap-2">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="lucide lucide-circle-equal text-info">
                                    <path d="M7 10h10" />
                                    <path d="M7 14h10" />
                                    <circle cx="12" cy="12" r="10" />
                                </svg>
                                @if(!is_null($comparison['current_month']) && $comparison['current_month']['month']
                                !== 'N/A' &&
                                $comparison['current_month']['year'] !== 'N/A')
                                <span>Bulan {{ $comparison['current_month']['month'] }} - {{
                                    $comparison['current_month']['year'] }}</span>
                                @endif
                            </div>
                            <div class="h-14 border-l-2 border-info ml-3 pl-3">
                                @if(!is_null($comparison['current_month']) && $comparison['current_month']['month']
                                !== 'N/A' &&
                                $comparison['current_month']['year'] !== 'N/A')
                                <span>{{ $comparison['current_month']['total_ships'] }} data</span>
                                @endif
                            </div>
                        </div>
                    </div>

                    <div class="w-full h-28 flex items-center justify-center shadow-pils bg-info/35 rounded-3xl">
                        <div class="flex gap-1">
                            Pada bulan ini total data kapal anda
                            @if($comparison['percentage_change'] > 0)
                            <p class="flex">
                                naik
                                <span class="ml-1">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" class="lucide lucide-trending-up text-success">
                                        <polyline points="22 7 13.5 15.5 8.5 10.5 2 17" />
                                        <polyline points="16 7 22 7 22 13" />
                                    </svg>
                                </span>
                            </p>
                            @else
                            <p class="flex">
                                turun
                                <span class="ml-1">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" class="lucide lucide-trending-down text-error">
                                        <polyline points="22 17 13.5 8.5 8.5 13.5 2 7" />
                                        <polyline points="16 17 22 17 22 11" />
                                    </svg>
                                </span>
                            </p>
                            @endif
                            <p>{{ abs($comparison['percentage_change']) }}%</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<x-footer.footer />
@endsection

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<script>
    document.addEventListener('DOMContentLoaded', () => {
    const ctx = document.getElementById('shipsChart').getContext('2d');
    const chartData = @json($chartData);

        new Chart(ctx, {
            type: 'line', // Gunakan tipe chart yang diinginkan
            data: {
                labels: chartData.months, // Bulan-tahun
                datasets: [
                            {
                                label: 'Total Ships',
                                data: chartData.total_ships,
                                backgroundColor: 'rgba(144, 238, 144, 0.5)', // Warna hijau muda
                                borderColor: 'rgba(144, 238, 144, 1)',
                                borderWidth: 1,
                            },
                            {
                                label: 'Total T/Bongkar',
                                data: chartData.total_tbongkar,
                                backgroundColor: 'rgba(173, 216, 230, 0.5)', // Warna biru muda
                                borderColor: 'rgba(173, 216, 230, 1)',
                                borderWidth: 1,
                            },
                            {
                                label: 'Total T/Muat',
                                data: chartData.total_tmuat,
                                backgroundColor: 'rgba(255, 182, 193, 0.5)', // Warna merah muda
                                borderColor: 'rgba(255, 182, 193, 1)',
                                borderWidth: 1,
                            },
                        ],
            },
            options: {
                responsive: true,
                layout: {
                    padding: {
                        top: 20, // Padding atas
                        bottom: 20, // Padding bawah
                        left: 15, // Padding kiri
                        right: 15, // Padding kanan
                    },
                },
                plugins: {
                    legend: {
                        position: 'top',
                        labels: {
                            color: '#000', // Warna teks legend
                        },
                    },
                    title: {
                        display: true,
                        text: 'Data Ships, T/Bongkar, dan T/Muat per Bulan',
                        font: {
                            size: 18,
                            family: 'Helvetica',
                            weight: 'bold',
                        },
                        color: '#000', // Warna teks judul
                    },
                },
                scales: {
                    x: {
                        grid: {
                            display: true,
                            color: 'rgba(200, 200, 200, 0.3)', // Warna garis horizontal
                        },
                        ticks: {
                            color: '#000', // Warna teks sumbu x
                        },
                    },
                    y: {
                        grid: {
                            display: true,
                            color: 'rgba(200, 200, 200, 0.3)', // Warna garis vertikal
                        },
                        ticks: {
                            color: '#000', // Warna teks sumbu y
                        },
                    },
                },
                animation: {
                    duration: 1500, // Durasi animasi (ms)
                    easing: 'easeOutBounce', // Jenis animasi
                },
            },
        });
    });
</script>