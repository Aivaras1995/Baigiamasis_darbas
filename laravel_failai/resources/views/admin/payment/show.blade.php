@extends('layouts.admin.main')

@section('title', 'Naujas mokėjimas')

@section('content')
    @include('admin.layouts.styles')
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <h1>Informacija apie mokėjimas</h1>

    <p>Mokėjimo tipas: {{ $payment->name }}</p>
    <p>Suma: {{ $payment->amount }}</p>
    <p>Užsakymo ID: {{ $payment->order_id }}</p>
    <p>Status_ID: {{ $payment->status_id }}</p>
@endsection
