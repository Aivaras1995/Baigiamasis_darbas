@extends('admin.layouts.main')
@include('admin.layouts.styles')
@php
    $users = \App\Models\User::all();
    $categories = \App\Models\Category::all();
    $products = \App\Models\Product::all();
@endphp

@section('title', 'Dashboard')

@include('admin.layouts.header')

@section('content')

    <div class="container"></div>
    <h2>Vartotojai</h2>
    <table class="table">
        <thead>
        <tr>
            <th>ID</th>
            <th>Vardas</th>
            <th>El. paštas</th>
            <th>Registracijos data</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($users as $user)
            <tr>
                <td>{{ $user->id }}</td>
                <td>{{ $user->name }}</td>
                <td>{{ $user->email }}</td>
                <td>{{ $user->created_at }}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
    <h2>Produktai</h2>
    <table class="table">
        <thead>
        <tr>
            <th>ID</th>
            <th>Pavadinimas</th>
            <th>Kaina</th>
            <th>Dydis</th>
            <th>Aprašymas</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($products as $product)
            <tr>
                <td>{{ $product->id }}</td>
                <td>{{ $product->name }}</td>
                <td>{{ $product->price }}</td>
                <td>{{ $product->size }}</td>
                <td>{{ $product->description }}</td>
            </tr>
        @endforeach
        </tbody>
    </table>

    <h2>Kategorijos</h2>
    <table class="table">
        <thead>
        <tr>
            <th>ID</th>
            <th>Pavadinimas</th>
            <th>Kaina</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($categories as $category)
            <tr>
                <td>{{ $category->id }}</td>
                <td>{{ $category->name }}</td>
                <td>{{ $category->description }}</td>
            </tr>
        @endforeach
    </table>
    @include('admin.layouts.footer')

@endsection
