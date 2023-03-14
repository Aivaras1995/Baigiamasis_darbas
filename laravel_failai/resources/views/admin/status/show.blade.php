@extends('layouts.admin.main')

@section('title', 'Statusas')

@section('content')
    @include('admin.layouts.styles')
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <h1>Informacija apie statusą</h1>

    <p>Statuso pavadinimas: {{ $status->name }}</p>
    <p>Statuso tipas: {{ $status->type }}</p>

@endsection
