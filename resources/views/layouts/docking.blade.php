@extends('layouts.dashboard')

@section('content')
<div class="w-full h-screen overflow-y-scroll scroll-smooth">
    <div id="nav-page" class="pr-2 w-full rounded-2xl sticky top-1 backdrop-blur-sm z-50">
        @yield('navbar-docking', '<p>No Navbar Content</p>')
    </div>

    <div class="mt-12 overflow-y-scroll">
        @yield('docking-content')
    </div>
</div>
@endsection