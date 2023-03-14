@extends('layouts.admin.main')

@section('title', 'Asmuo')
@section('content')
    @include('admin.layouts.styles')
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <h1>Asmens informacija</h1>

    <p>Vardas: {{ $person->name }}</p>
    <p>Pavardė: {{ $person->surname }}</p>
    <p>Asmens Kodas: {{ $person->personal_code }}</p>
    <p>El.paštas: {{ $person->email }}</p>
    <p>Telefono Numeris: {{ $person->phone }}</p>
    <p>Vartotojo ID: {{ $person->user_id }}</p>
    <p>Adreso ID: {{ $person->address_id }}</p>

@endsection

