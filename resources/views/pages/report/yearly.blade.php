@extends('layouts.report')

@section('navbar-report')
<x-navbar.navbar-report :user="$user" />
@endsection

@section('report-content')
<div class="p-3">
    <div class="flex gap-5 w-full items-center">
        <h1 class="text-xl font-semibold">Reports for {{ $year }}</h1>
        <div class="drawer drawer-end">
            <input id="my-drawer-4" type="checkbox" class="drawer-toggle" />
            <div class="drawer-content">
                <!-- Page content here -->
                <label for="my-drawer-4" class="drawer-button btn btn-primary z-50">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                        stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                        class="lucide lucide-table-properties">
                        <path d="M15 3v18" />
                        <rect width="18" height="18" x="3" y="3" rx="2" />
                        <path d="M21 9H3" />
                        <path d="M21 15H3" />
                    </svg>
                </label>
            </div>
            <div class="drawer-side z-50">
                <label for="my-drawer-4" aria-label="close sidebar" class="drawer-overlay"></label>
                <ul class="menu bg-base-200 text-base-content min-h-full w-9/12 p-4">
                    <!-- Sidebar content here -->
                    <div class="flex justify-between items-center px-5 mb-3">
                        <h1 class="text-2xl font-semibold">Reports for {{ $year }}</h1>
                        <a href="{{ route('report.export.year', ['year' => $year]) }}" class=" flex gap-3 items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="lucide lucide-file-down text-green-500">
                                <path d="M15 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V7Z" />
                                <path d="M14 2v4a2 2 0 0 0 2 2h4" />
                                <path d="M12 18v-6" />
                                <path d="m9 15 3 3 3-3" />
                            </svg>
                            <span class="font-semibold">Export to XLSX</span>
                        </a>
                    </div>

                    <div class="flex my-5 px-5 text-lg ">
                        <ul class="space-y-2">
                            <li>Total Data</li>
                            <li>Total T/Bongkar </li>
                            <li>Total T/Muat</li>
                            <li>Total T/Bongkar + T/Muat</li>
                        </ul>
                        <ul class="ml-5 space-y-2">
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
                            @foreach($yearlyData as $data)
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

                    <!-- Tambahkan pagination links -->
                    <div class="pagination-container mt-5 px-5">
                        {{ $yearlyData->links() }}
                    </div>
                </ul>
            </div>
        </div>
    </div>
    <ul class="space-y-5 mt-5">
        @foreach($monthlyReports as $report)
        <li class="p-5 rounded-xl border">
            @php
            $months = [
            1 => 'Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni',
            'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember'
            ];
            $monthName = $months[$report->month];
            @endphp

            <a href="{{ route('report.month', ['year' => $year, 'month' => $report->month]) }}">
                Bulan {{ $monthName }} - ({{ $report->total }} data)
            </a>
        </li>
        @endforeach
    </ul>
</div>




@endsection