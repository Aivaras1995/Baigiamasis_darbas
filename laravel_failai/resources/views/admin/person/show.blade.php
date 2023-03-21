@extends('layouts.admin.main')

@section('title', 'Asmuo')
@section('content')
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
    <h2>Asmens informacija</h2>

    <p>Vardas: {{ $person->name }}</p>
    <p>Pavardė: {{ $person->surname }}</p>
    <p>Asmens Kodas: {{ $person->personal_code }}</p>
    <p>El.paštas: {{ $person->email }}</p>
    <p>Telefono Numeris: {{ $person->phone }}</p>
    <p>Vartotojo ID: {{ $person->user_id }}</p>
    <p>Adreso ID: {{ $person->address_id }}</p>

@endsection

