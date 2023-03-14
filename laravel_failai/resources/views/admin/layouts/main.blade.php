@extends('public.layouts.main')

@section('title', 'Admin')

@section('admin_content')
    <div class="main_grid">
        <div class="lg:px-8 justify-center">
            @yield('content', 'Default content')
        </div>
        <br>
    </div>
@endsection
