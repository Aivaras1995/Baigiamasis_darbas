@extends('layouts.admin.main')

@section('title', 'Vartotojo informacija')
@section('content')
    @include('admin.layouts.styles')
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <h1>Vartotojo informacija</h1>

    <p>Vardas: {{ $user->name }}</p>
    <p>El.paštas: {{ $user->email }}</p>
@endsection
