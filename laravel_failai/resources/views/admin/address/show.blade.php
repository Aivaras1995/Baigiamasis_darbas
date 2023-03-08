@extends('layouts.admin.main')

@section('title', 'Naujas adresas')

@section('content')
    <h1>Adreso informacija</h1>

    <p>Pavadinimas: {{ $address->name }}</p>
    <p>Šalis: {{ $address->country }}</p>
    <p>Miestas: {{ $address->city }}</p>
    <p>Pašto kodas: {{ $address->zip }}</p>
    <p>Gatvė: {{ $address->street }}</p>
    <p>Namo numeris: {{ $address->house_number }}</p>
    <p>Buto numeris: {{ $address->apartment_number }}</p>
    <p>Būsena: {{ $address->state }}</p>
    <p>Tipas: {{ $address->type }}</p>
    <p>Papildoma informacija: {{ $address->additional_info }}</p>
    <p>Vartotojo ID: {{ $address->user_id }}</p>
@endsection
