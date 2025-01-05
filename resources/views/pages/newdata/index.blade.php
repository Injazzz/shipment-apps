@extends('layouts.dashboard')

@section('content')
<div class="w-full h-screen overflow-y-scroll scroll-smooth">
    <div id="nav-page" class="pr-2 w-full rounded-2xl sticky top-1 backdrop-blur-sm z-50">
        <x-navbar.navbar-newdata :user="$user" />
    </div>
    <div class="flex flex-col">
        <div class="w-ful flex flex-col justify-center items-center mt-12">
            <h1 class="text-[1.5rem] font-bold">TAMBAH DATA BONGKAR/MUAT KAPAL</h1>
            <span>PRODUKSI IKKP MERAK</span>
        </div>
        <div class="flex flex-col lg:flex-row p-2 mt-20 gap-5">
            <form action="{{ route('newdata.store') }}" method="POST"
                class="grid grid-cols-2 p-3 md:p-5 lg:p-7 rounded-2xl shadow-iconSm dark:border-zinc-800">
                @csrf

                @if (session('success'))
                <div class="toast toast-top toast-center z-50">
                    <div class="alert alert-success mt-10">
                        <span>{{ session('success') }}</span>
                    </div>
                </div>
                @endif

                <div class="col-span-1 p-4">
                    <input type="text" name="user_id" value="{{$user->id}}" class="hidden">

                    <label for="ship_name">Nama Kapal</label>
                    <input type="text" name="ship_name" class="p-2 w-full border rounded-xl mb-7 mt-2">

                    <label for="ship_line" class="">Line</label>
                    <input type="text" name="ship_line" class="p-2 w-full border rounded-xl mb-7 mt-2">

                    <label for="ship_flag">Flag</label>
                    <select name="ship_flag" class="w-full p-3 border rounded-2xl mt-2">
                        <option value="">Pilih Negara</option>
                        @php
                        $groupedCountries = [];
                        foreach ($countries as $code => $name) {
                        $firstLetter = strtoupper(substr($name, 0, 1));
                        $groupedCountries[$firstLetter][] = ['code' => $code, 'name' => $name];
                        }
                        @endphp
                        @foreach ($groupedCountries as $letter => $countriesGroup)
                        <optgroup label="{{ $letter }}">
                            @foreach ($countriesGroup as $country)
                            <option value="{{ $country['name'] }}">
                                {{ $country['name'] }}
                            </option>
                            @endforeach
                        </optgroup>
                        @endforeach
                    </select>
                </div>

                <div class="col-span-1 p-4">
                    <label for="ship_cargo">Cargo</label>
                    <input type="text" name="ship_cargo" class="p-2 w-full border rounded-xl mb-7 mt-2">

                    <div class="label" for="ship_t_bongkar">
                        <span class="label-text">T/Bongkar</span>
                        <span class="label-text-alt">Pisahkan /kg dengan tanda koma <div class="tooltip tooltip-warning"
                                data-tip="contoh: 87349,345 dibaca (Delapan puluh tujuh ribu tiga ratus empat puluh sembilan ton dan tiga ratus empat puluh lima kilogram)">
                                <kbd class="kbd">,</kbd>
                            </div>
                        </span>
                    </div>
                    <input type="text" name="ship_t_bongkar" class="p-2 w-full border rounded-xl mb-7 mt-2">

                    <div class="label" for="ship_t_muat">
                        <span class="label-text">T/Muat</span>
                        <span class="label-text-alt">Pisahkan /kg dengan tanda koma <div class="tooltip tooltip-warning"
                                data-tip="contoh: 87349,345 dibaca (Delapan puluh tujuh ribu tiga ratus empat puluh sembilan ton dan tiga ratus empat puluh lima kilogram)">
                                <kbd class="kbd">,</kbd>
                            </div>
                        </span>
                    </div>
                    <input type="text" name="ship_t_muat" class="p-2 w-full border rounded-xl mb-7 mt-2">

                    <div class="w-full flex justify-end items-center">
                        <button type="submit" class="btn btn-outline">Create</button>
                    </div>
                </div>
            </form>

            <div class="w-full min-w-[350px] h-fit rounded-2xl overflow-hidden relative">
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
                @foreach ($ships as $ship)
                <li>
                    <div class="timeline-middle">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="h-5 w-5">
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
                                {{$ship->ship_line}}
                            </li>
                            <li
                                class="@if ($loop->iteration % 2 == 1)  md:flex-row-reverse xl:flex-row @else  @endif flex p-2 gap-2 items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="lucide lucide-flag text-primary">
                                    <path d="M4 15s1-1 4-1 5 2 8 2 4-1 4-1V3s-1 1-4 1-5-2-8-2-4 1-4 1z" />
                                    <line x1="4" x2="4" y1="22" y2="15" />
                                </svg>
                                {{ $ship->ship_flag }}
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
                                {{$ship->ship_cargo}}
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
                                {{ $formattedTonnage }} ton
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
                                {{ $formattedTonnage }} ton
                            </li>
                        </ul>
                    </div>
                    <hr />
                </li>
                @endforeach
            </ul>
        </div>
    </div>
</div>
@endsection