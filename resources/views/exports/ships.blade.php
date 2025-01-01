<table class="table">
    <thead>
        <tr>
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
        @foreach($data as $d)
        <tr class="hover">
            <td>{{ $loop->iteration }}</td>
            <td>{{ $d->ship_name }}</td>
            <td>{{ $d->ship_line }}</td>
            <td>{{ $d->ship_flag }}</td>
            <td>{{ $d->ship_cargo }}</td>
            <td>@php
                $tonnage = $d->ship_t_bongkar / 1000;
                $formattedTonnage = strpos(number_format($tonnage, 3, '.', ''), '.') === false
                ? number_format($tonnage, 2, ',', '.')
                : rtrim(rtrim(number_format($tonnage, 3, ',', '.'), '0'), ',');
                @endphp
                {{ $formattedTonnage }} ton</td>
            <td>@php
                $tonnage = $d->ship_t_muat / 1000;
                $formattedTonnage = strpos(number_format($tonnage, 3, '.', ''), '.') === false
                ? number_format($tonnage, 2, ',', '.')
                : rtrim(rtrim(number_format($tonnage, 3, ',', '.'), '0'), ',');
                @endphp
                {{ $formattedTonnage }} ton</td>
            <td>{{ $d->created_at->format('Y-m-d') }}</td>
        </tr>
        @endforeach
    </tbody>
</table>