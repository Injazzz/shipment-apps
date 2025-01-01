@extends('layouts.report')

@section('navbar-report')
<x-navbar.navbar-report :user="$user" />
@endsection

@section('report-header')
<div class="w-full flex flex-wrap gap-10 p-5">
    @foreach($years as $year)
    <a href="{{ route('report.year', $year) }}" class="flex flex-col items-center">
        <img src="{{asset('folder.png')}}" alt="folder-{{$year}}" class="w-32 h-32">
        Tahun {{ $year }}
    </a>
    @endforeach
</div>
@endsection

@section('report-content')
<div class="w-full h-screen overflow-y-scroll scroll-smooth z-20 px-3 mt-5">

</div>
@endsection