@extends('layouts.dashboard')

@section('content')
<div class="w-full h-screen overflow-y-scroll scroll-smooth">
    <div id="nav-page" class="pr-2 w-full rounded-2xl sticky top-1 backdrop-blur-sm z-50">
        @yield('navbar-report', '<p>No Navbar Content</p>')
    </div>

    <div class="mt-12">
        @yield('report-header')
    </div>

    <div>
        @yield('report-content', '<p>No report Content</p>')
    </div>

</div>
@endsection
