@extends('layouts.admin.main')

@section('title', 'Naujas adresas')
<style>
    /* styles.css */
    body {
        font-family: Arial, sans-serif;
        line-height: 1.6;
    }

    .container {
        max-width: 1200px;
        margin: 0 auto;
        padding: 20px;
    }

    h1 {
        font-size: 2rem;
        margin-bottom: 20px;
    }

    p {
        font-size: 20px;
        margin-bottom: 10px;
    }

    .btn {
        display: inline-block;
        text-decoration: none;
        color: #fff;
        background-color: #3490dc;
        border-radius: 3px;
        padding: 7px 15px;
        font-size: 1rem;
        margin-top: 20px;
        cursor: pointer;
        transition: all 0.3s ease;
    }


</style>

<link rel="stylesheet" href="{{ asset('css/styles.css') }}">
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
