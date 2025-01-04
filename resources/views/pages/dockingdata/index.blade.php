@extends('layouts.docking')

@section('navbar-docking')
<x-navbar.navbar-docking :user="$user" />
@endsection

@section('docking-content')

<form action="{{ route('dockingdata.search') }}" method="GET" class="px-5 pt-5 flex items-center gap-2">
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
            <th>Created At</th>
            <th>Nama Kapal</th>
            <th>Line</th>
            <th>Flag</th>
            <th>Cargo</th>
            <th>T/Bongkar</th>
            <th>T/Muat</th>
            <th>Actions</th>
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
                <a href="{{route('dockingdata.edit', $ship->id)}}" class="btn btn-circle">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                        stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                        class="lucide lucide-pen-line">
                        <path d="M12 20h9" />
                        <path
                            d="M16.376 3.622a1 1 0 0 1 3.002 3.002L7.368 18.635a2 2 0 0 1-.855.506l-2.872.838a.5.5 0 0 1-.62-.62l.838-2.872a2 2 0 0 1 .506-.854z" />
                    </svg>
                </a>

                <!-- Open the modal using ID.showModal() method -->
                <button class="btn btn-circle" onclick="delete_dock_no_.showModal()">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                        stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                        class="lucide lucide-trash-2">
                        <path d="M3 6h18" />
                        <path d="M19 6v14c0 1-1 2-2 2H7c-1 0-2-1-2-2V6" />
                        <path d="M8 6V4c0-1 1-2 2-2h4c1 0 2 1 2 2v2" />
                        <line x1="10" x2="10" y1="11" y2="17" />
                        <line x1="14" x2="14" y1="11" y2="17" />
                    </svg>
                </button>
                <dialog id="delete_dock_no_" class="modal">
                    <div class="modal-box">
                        <h3 class="text-lg font-bold text-error">Are you sure to delete this data!?</h3>
                        <p class="py-4">or Press <kbd class="kbd kbd-md">ESC</kbd> key or click the button
                            below to close</p>
                        <div class="modal-action">
                            <form action="{{ route('dockingdata.destroy', $ship->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn">Hapus</button>
                            </form>
                            <form method="dialog">
                                <!-- if there is a button in form, it will close the modal -->
                                <button class="btn btn-outline btn-error">Close</button>
                            </form>
                        </div>
                    </div>
                </dialog>
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