@extends('layouts.admin.main')

@section('title', 'Naujas užsakymas')

@section('content')
    @include('admin.layouts.styles')
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <h1>Informacija apie užsakymą</h1>

    <p>Vartotojo ID: {{ $order->user_id }}</p>
    <p>Pristatymo adreso ID: {{ $order->shipping_address_id }}</p>
    <p>Apmokėjimo adreso ID: {{ $order->billing_address_id }}</p>
    <p>Status_ID: {{ $order->status_id }}</p>
@endsection
