@extends('public.layouts.main')

@section('title', 'Asmens profilio kūrimo forma')

@section('content')
    <form action="{{route('persons.store')}}" method="post">

        @include('admin.layouts.styles')
        <link rel="stylesheet" href="{{ asset('css/styles.css') }}">        <fieldset>
            <legend>Asmens duomenys</legend>

            <label for="name">Vardas:</label>
            <input type="text" name="name" id="name" required >

            <label for="surname">Pavardė:</label>
            <input type="text" name="surname" id="surname" required>

            <label for="personal_code">Asmens Kodas:</label>
            <input type="text" name="personal_code" id="personal_code" required>

            <label for="email">El.paštas:</label>
            <input type="text" name="email" id="email" required>

            <label for="phone">Telefono Numeris:</label>
            <input type="text" name="phone" id="phone" required>

            <label for="user_id">Vartotojo ID:</label>
            <input type="text" name="user_id" id="user_id" required>

        </fieldset>

        <button type="submit">Sukurti asmens profilį</button>
        @csrf
    </form>
@endsection
