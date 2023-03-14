@extends('public.layouts.main')

@section('title', 'Mokėjimų forma')

@section('content')
    <form action="{{route('payments.store')}}" method="post">

        @include('admin.layouts.styles')
        <link rel="stylesheet" href="{{ asset('css/styles.css') }}">        <fieldset>
            <legend>Mokėjimai</legend>

            <label for="name">Mokėjimo tipas:</label>
            <input type="text" name="name" id="name" required >

            <label for="amount">Suma:</label>
            <input type="text" name="amount" id="amount" required>

            <label for="order_id">Užsakymo ID:</label>
            <input type="text" name="order_id" id="order_id" required>

            <label for="status_id">Status_ID:</label>
            <input type="text" name="status_id" id="status_id" required>

        </fieldset>

        <button type="submit">Išsaugoti</button>
        @csrf
    </form>
@endsection
