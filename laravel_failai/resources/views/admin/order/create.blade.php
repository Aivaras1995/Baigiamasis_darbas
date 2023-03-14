@extends('public.layouts.main')

@section('title', 'Užsakymų forma')

@section('content')
    <form action="{{route('orders.store')}}" method="post">

        @include('admin.layouts.styles')
        <link rel="stylesheet" href="{{ asset('css/styles.css') }}">        <fieldset>
            <legend>Užsakymai</legend>

            <label for="user_id">Vartotojo ID:</label>
            <input type="text" name="user_id" id="user_id" required >

            <label for="shipping_address_id">Pristatymo adreso ID:</label>
            <input type="text" name="shipping_address_id" id="shipping_address_id" required>

            <label for="billing_address_id">Apmokėjimo adreso ID:</label>
            <input type="text" name="billing_address_id" id="billing_address_id" required>

            <label for="status_id">Status_ID:</label>
            <input type="text" name="status_id" id="status_id" required>

        </fieldset>

        <button type="submit">Išsaugoti</button>
        @csrf
    </form>
@endsection
