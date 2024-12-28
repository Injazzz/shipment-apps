@extends('layouts.dashboard')

@section('content')
<div class="w-full h-screen overflow-y-scroll scroll-smooth">
    <div id="nav-page" class="pr-2 w-full rounded-2xl sticky top-2 backdrop-blur-sm">
        @yield('navbar-profile')
    </div>

    <div class="mt-36 md:mt-48 lg:mt-52 xl:mt-80 h-[900px]">
        @yield('profile-content')
    </div>
</div>
@endsection