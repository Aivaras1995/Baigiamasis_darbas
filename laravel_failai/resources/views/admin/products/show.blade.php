@extends('layouts.admin.main')

@section('title', 'Sporto prekė')
@section('content')
    {{--
        @include('public.layouts.styles')
    --}}
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
            font-size: 2rem;
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

        .btn:hover {
            background-color: #4e73df;
        }
    </style>

    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">


    <div class="container">

        <h1>Prekė:</h1>

        <p>Pavadinimas: {{ $product->name }}</p>
        <p>Slug: {{ $product->slug }}</p>
        <p>Aprašymas: {{ $product->description }}</p>
        <p>Paveikslėlis: <img src="{{ asset($product->image) }}" alt="{{ $product->name }}"></p>
        <p>Kategorija: {{ $product->category_id }}</p>
        <p>Spalva: {{ $product->color }}</p>
        <p>Dydis: {{ $product->size }}</p>
        <p>Kaina: {{ $product->price }}</p>

    </div>
@endsection
