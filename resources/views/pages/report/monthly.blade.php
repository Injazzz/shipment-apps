@extends('layouts.report')

@section('navbar-report')
<x-navbar.navbar-report :user="$user" />
@endsection

@section('report-content')
<div class="mt-16">
    <div class="flex justify-between items-center px-5 mb-3">
        <h1 class="text-2xl font-semibold">Reports for {{ $year }} - Month {{ $month }}</h1>
        <a href="{{ route('report.export.month', ['year' => $year, 'month' => $month]) }}"
            class="flex gap-3 items-center">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                class="lucide lucide-file-down text-green-500">
                <path d="M15 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V7Z" />
                <path d="M14 2v4a2 2 0 0 0 2 2h4" />
                <path d="M12 18v-6" />
                <path d="m9 15 3 3 3-3" />
            </svg>
            <span class="font-semibold">Export to XLSX</span>
        </a>
    </div>

    <div class="flex my-5 px-5">
        <ul>
            <li>Total Data</li>
            <li>Total T/Bongkar </li>
            <li>Total T/Muat</li>
            <li>Total T/Bongkar + T/Muat</li>
        </ul>
        <ul class="ml-5">
            <li>: {{ $totalData }}</li>
            <li>: @php
                $tonnage = $totalTonnageBongkar / 1000;
                $formattedTonnage = strpos(number_format($tonnage, 3, '.', ''), '.') === false
                ? number_format($tonnage, 2, ',', '.')
                : rtrim(rtrim(number_format($tonnage, 3, ',', '.'), '0'), ',');
                @endphp
                {{ $formattedTonnage }} ton</li>

            <li>: @php
                $tonnage = $totalTonnageMuat / 1000;
                $formattedTonnage = strpos(number_format($tonnage, 3, '.', ''), '.') === false
                ? number_format($tonnage, 2, ',', '.')
                : rtrim(rtrim(number_format($tonnage, 3, ',', '.'), '0'), ',');
                @endphp
                {{ $formattedTonnage }} ton
            </li>

            <li>: @php
                $tonnage = $totalCombinedTonnage / 1000;
                $formattedTonnage = strpos(number_format($tonnage, 3, '.', ''), '.') === false
                ? number_format($tonnage, 2, ',', '.')
                : rtrim(rtrim(number_format($tonnage, 3, ',', '.'), '0'), ',');
                @endphp
                {{ $formattedTonnage }} ton
            </li>
        </ul>
    </div>

    <table class="table border-t-2">
        <thead>
            <tr class="text-xl">
                <th>No</th>
                <th>Nama Kapal</th>
                <th>Line</th>
                <th>Flag</th>
                <th>Cargo</th>
                <th>T/Bongkar</th>
                <th>T/Muat</th>
                <th>Created At</th>
            </tr>
        </thead>
        <tbody>
            @foreach($monthlyData as $data)
            <tr class="hover:bg-zinc-400 dark:hover:text-black">
                <td>{{ $loop->iteration }}</td>
                <td>{{ $data->ship_name }}</td>
                <td>{{ $data->ship_line }}</td>
                <td>{{ $data->ship_flag }}</td>
                <td>{{ $data->ship_cargo }}</td>
                <td>@php
                    $tonnage = $data->ship_t_bongkar / 1000;
                    $formattedTonnage = strpos(number_format($tonnage, 3, '.', ''), '.') === false
                    ? number_format($tonnage, 2, ',', '.')
                    : rtrim(rtrim(number_format($tonnage, 3, ',', '.'), '0'), ',');
                    @endphp
                    {{ $formattedTonnage }} ton</td>
                <td>@php
                    $tonnage = $data->ship_t_muat / 1000;
                    $formattedTonnage = strpos(number_format($tonnage, 3, '.', ''), '.') === false
                    ? number_format($tonnage, 2, ',', '.')
                    : rtrim(rtrim(number_format($tonnage, 3, ',', '.'), '0'), ',');
                    @endphp
                    {{ $formattedTonnage }} ton</td>
                <td>{{ $data->created_at->format('Y-m-d') }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection