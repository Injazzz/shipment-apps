@extends('layouts.analytics')

@section('navbar-analytics')
<x-navbar.navbar-analytics :user="$user" />
@endsection

@section('analytics-content')
analytics
@endsection