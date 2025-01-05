@extends('layouts.aproval')

@section('navbar-aproval')
<x-navbar.navbar-aproval :user="$user" />
@endsection

@section('aproval-content')
<form action="{{ route('aproval.search') }}" method="GET" class="px-5 pt-5 flex items-center gap-2">
    <input type="text" name="query" placeholder="cari nama kapal/ line/ flag..."
        class="input input-bordered w-full max-w-xs rounded-xl" />
    <button type="submit" class="btn btn-neutral rounded-xl">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
            class="lucide lucide-search">
            <circle cx="11" cy="11" r="8" />
            <path d="m21 21-4.3-4.3" />
        </svg>
    </button>
</form>

@if(!empty($query))
<p class="text-sm mb-2 pl-5 pt-1">Hasil pencarian untuk: <strong>{{ $query }}</strong></p>
@endif

<table class="table overflow-y-scroll scroll-smooth mt-7">
    <!-- head -->
    <thead>
        <tr>
            <th>No</th>
            <th>Created by</th>
            <th>Created At</th>
            <th>Nama Kapal</th>
            <th>Line</th>
            <th>Flag</th>
            <th>Cargo</th>
            <th>T/Bongkar</th>
            <th>T/Muat</th>
            <th>Actions</th>
            <th>Status</th>
        </tr>
    </thead>
    <tbody>
        @if($ships->isEmpty())
        <tr>
            <td colspan="9" class="text-center">Data tidak ditemukan</td>
        </tr>
        @else
        @foreach ( $ships as $ship )
        <tr class="hover">
            <td>{{ $loop->iteration + $ships->firstItem() - 1}}</td>
            <td>{{ $ship->user->name}}</td>
            <td>{{ $ship->created_at->format('Y-m-d') }}</td>
            <td>{{ $ship->ship_name }}</td>
            <td>{{ $ship->ship_line }}</td>
            <td>{{ $ship->ship_flag }}</td>
            <td>{{ $ship->ship_cargo }}</td>
            <td>@php
                $tonnage = $ship->ship_t_bongkar / 1000;
                $formattedTonnage = strpos(number_format($tonnage, 3, '.', ''), '.') === false
                ? number_format($tonnage, 2, ',', '.')
                : rtrim(rtrim(number_format($tonnage, 3, ',', '.'), '0'), ',');
                @endphp
                {{ $formattedTonnage }}</td>
            <td>@php
                $tonnage = $ship->ship_t_muat / 1000;
                $formattedTonnage = strpos(number_format($tonnage, 3, '.', ''), '.') === false
                ? number_format($tonnage, 2, ',', '.')
                : rtrim(rtrim(number_format($tonnage, 3, ',', '.'), '0'), ',');
                @endphp
                {{ $formattedTonnage }}</td>
            <td class="inline-flex gap-2 w-fit">
                <a href="{{route('aproval.details', $ship->id)}}" class="btn btn-circle">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                        stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                        class="lucide lucide-file-search">
                        <path d="M14 2v4a2 2 0 0 0 2 2h4" />
                        <path d="M4.268 21a2 2 0 0 0 1.727 1H18a2 2 0 0 0 2-2V7l-5-5H6a2 2 0 0 0-2 2v3" />
                        <path d="m9 18-1.5-1.5" />
                        <circle cx="5" cy="14" r="3" />
                    </svg>
                </a>

                <!-- Open the modal using ID.showModal() method -->
                <button class="btn btn-circle {{ $ship->isAproved ? 'btn-success' : '' }}" {{ $ship->isAproved ?
                    'disabled' : '' }}
                    onclick="verify_dock_no_.showModal()"
                    >
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                        stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                        class="lucide lucide-bookmark-check">
                        <path d="m19 21-7-4-7 4V5a2 2 0 0 1 2-2h10a2 2 0 0 1 2 2Z" />
                        <path d="m9 10 2 2 4-4" />
                    </svg>
                </button>
                <dialog id="verify_dock_no_" class="modal">
                    <div class="modal-box">
                        <h3 class="text-lg font-bold text-success">Are you sure to verify this data?</h3>
                        <p class="py-4">or Press <kbd class="kbd kbd-md">ESC</kbd> key or click the button
                            below to close</p>
                        <div class="modal-action">
                            <form action="{{ route('aproval.verify', $ship->id) }}" method="POST">
                                @csrf
                                <button type="submit" class="btn btn-success">Verify</button>
                            </form>
                            <form method="dialog">
                                <!-- if there is a button in form, it will close the modal -->
                                <button class="btn btn-outline">Close</button>
                            </form>
                        </div>
                    </div>
                </dialog>
            </td>
            <td>
                @if ($ship->isAproved)
                <span class="badge badge-success">Disetujui</span>
                @else
                <span class="badge badge-info">Belum diverifikasi</span>
                @endif
            </td>
        </tr>
        @endforeach
        @endif
    </tbody>
</table>

<div class="pagination-container my-5 px-5">
    {{ $ships->links() }}
</div>
@endsection