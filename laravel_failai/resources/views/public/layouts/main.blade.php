<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" data-theme="dark" class="dark" data-mode="dark">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title', config('app.name', 'Sportuok.lt'))</title>

    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <link rel="icon" type="image/svg+xml" href="{{asset('favicon.svg')}}">

</head>
<body>
<div class="main_grid">
    <div class="lg:px-8 justify-center">
        @include('public.layouts.flash-message')

        @yield('content', 'Default page content')
    </div>
    <br>
</div>
</body>
</html>
