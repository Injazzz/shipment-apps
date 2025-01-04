@extends('layouts.docking')

@section('navbar-docking')
<x-navbar.navbar-editDockdata :user="$user" />
@endsection

@section('docking-content')
<div class="px-20 pb-5">
    <form action="{{ route('dockingdata.update', $ship->id) }}" method="POST"
        class="flex flex-col lg:grid lg:grid-cols-4 gap-1 pt-20">
        @csrf
        @method('PUT')

        <div class="flex flex-col gap-1 lg:col-span-2">
            <label for="ship_name" class="flex items-center gap-3 text-lg">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                    class="lucide lucide-ship">
                    <path d="M12 10.189V14" />
                    <path d="M12 2v3" />
                    <path d="M19 13V7a2 2 0 0 0-2-2H7a2 2 0 0 0-2 2v6" />
                    <path
                        d="M19.38 20A11.6 11.6 0 0 0 21 14l-8.188-3.639a2 2 0 0 0-1.624 0L3 14a11.6 11.6 0 0 0 2.81 7.76" />
                    <path
                        d="M2 21c.6.5 1.2 1 2.5 1 2.5 0 2.5-2 5-2 1.3 0 1.9.5 2.5 1s1.2 1 2.5 1c2.5 0 2.5-2 5-2 1.3 0 1.9.5 2.5 1" />
                </svg>
                Nama Kapal</label>
            <div class="h-24 border-l-4 border-black ml-2.5">
                <input type="text" name="ship_name" class="p-3 rounded-xl border mt-3 ml-3  w-full"
                    value="{{$ship->ship_name}}">
            </div>

            <label for="ship_flag" class="flex items-center gap-3 text-lg">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                    class="lucide lucide-flag">
                    <path d="M4 15s1-1 4-1 5 2 8 2 4-1 4-1V3s-1 1-4 1-5-2-8-2-4 1-4 1z" />
                    <line x1="4" x2="4" y1="22" y2="15" />
                </svg>
                Flag</label>
            <div class="h-24 border-l-4 border-black ml-2.5">
                <select id="country" name="ship_flag" class="w-full p-3 border rounded-2xl ml-3">
                    <option value="{{$ship->ship_flag}}">{{$ship->ship_flag}}</option>

                    @php
                    $groupedCountries = [];
                    foreach ($countries as $code => $name) {
                    // Ambil huruf pertama dari nama negara
                    $firstLetter = strtoupper(substr($name, 0, 1));
                    // Kelompokkan negara berdasarkan huruf pertama
                    $groupedCountries[$firstLetter][] = ['code' => $code, 'name'
                    => $name];
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

            <label for="ship_line" class="flex items-center gap-3 text-lg">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                    class="lucide lucide-rail-symbol">
                    <path d="M5 15h14" />
                    <path d="M5 9h14" />
                    <path d="m14 20-5-5 6-6-5-5" />
                </svg>
                Line</label>
            <div class="h-24 border-l-4 border-black ml-2.5">
                <input type="text" name="ship_line" class="p-3 rounded-xl border mt-3 ml-3  w-full"
                    value="{{$ship->ship_line}}">
            </div>

            <label for="ship_cargo" class="flex items-center gap-3 text-lg">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                    class="lucide lucide-package">
                    <path
                        d="M11 21.73a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73z" />
                    <path d="M12 22V12" />
                    <path d="m3.3 7 7.703 4.734a2 2 0 0 0 1.994 0L20.7 7" />
                    <path d="m7.5 4.27 9 5.15" />
                </svg>
                Cargo</label>
            <div class="h-24 border-l-4 border-black ml-2.5">
                <input type="text" name="ship_cargo" class="p-3 rounded-xl border mt-3 ml-3  w-full"
                    value="{{$ship->ship_cargo}}">
            </div>

            <label for="ship_t_bongkar" class="flex items-center gap-3 text-lg">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                    class="lucide lucide-package-open">
                    <path d="M12 22v-9" />
                    <path
                        d="M15.17 2.21a1.67 1.67 0 0 1 1.63 0L21 4.57a1.93 1.93 0 0 1 0 3.36L8.82 14.79a1.655 1.655 0 0 1-1.64 0L3 12.43a1.93 1.93 0 0 1 0-3.36z" />
                    <path
                        d="M20 13v3.87a2.06 2.06 0 0 1-1.11 1.83l-6 3.08a1.93 1.93 0 0 1-1.78 0l-6-3.08A2.06 2.06 0 0 1 4 16.87V13" />
                    <path
                        d="M21 12.43a1.93 1.93 0 0 0 0-3.36L8.83 2.2a1.64 1.64 0 0 0-1.63 0L3 4.57a1.93 1.93 0 0 0 0 3.36l12.18 6.86a1.636 1.636 0 0 0 1.63 0z" />
                </svg>
                T/Bongkar</label>
            <div class="h-24 border-l-4 border-black ml-2.5">
                <input type="text" name="ship_t_bongkar" class="p-3 rounded-xl border mt-3 ml-3  w-full"
                    value="{{$ship->ship_t_bongkar / 1000}}">
            </div>

            <label for="ship_t_muat" class="flex items-center gap-3 text-lg">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                    class="lucide lucide-arrow-down-to-line">
                    <path d="M12 17V3" />
                    <path d="m6 11 6 6 6-6" />
                    <path d="M19 21H5" />
                </svg>
                T/Muat</label>
            <div class="h-24 border-l-4 border-black ml-2.5">
                <input type="text" name="ship_t_muat" class="p-3 rounded-xl border mt-3 ml-3 w-full"
                    value="{{$ship->ship_t_muat / 1000}}">
            </div>
        </div>

        <div class="col-span-2 flex flex-col pl-5 pt-5 lg:pt-1">
            <p>*Pastikan data anda akurat sebelum menyimpan perubahan</p>
            <div class="flex justify-end">
                <button type="submit" class="btn btn-primary mt-5 w-28">Save
                    change</button>
            </div>
        </div>
    </form>
</div>

@endsection