<?php

if (!function_exists('formatTonnage')) {
    function formatTonnage($value)
    {
        $tonnage = $value / 1000;
        return strpos(number_format($tonnage, 3, '.', ''), '.') === false
            ? number_format($tonnage, 2, ',', '.')
            : rtrim(rtrim(number_format($tonnage, 3, ',', '.'), '0'), ',');
    }
}

if (!function_exists('generateBreadcrumbs')) {
    function generateBreadcrumbs()
    {
        $segments = request()->segments(); // Ambil segmen dari URL saat ini
        $breadcrumbs = [];
        $url = '';

        foreach ($segments as $segment) {
            $url .= '/' . $segment;
            $breadcrumbs[] = [
                'name' => ucfirst(str_replace('-', ' ', $segment)), // Format nama breadcrumb
                'url' => $url, // Bangun URL breadcrumb
            ];
        }

        return $breadcrumbs;
    }
}
