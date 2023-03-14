@extends('layouts.admin.main')

@section('title', 'Nauja kategorija')

@section('content')
    @include('admin.layouts.styles')
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <h1>Informacija apie kategoriją</h1>

    <p>Pavadinimas: {{ $category->name }}</p>
    <p>Slug: {{ $category->slug }}</p>
    <p>Aprašymas: {{ $category->description }}</p>
    <p>Paveiksliukas: {{ $category->image }}</p>
    <p>Status_ID: {{ $category->status_id }}</p>
@endsection
