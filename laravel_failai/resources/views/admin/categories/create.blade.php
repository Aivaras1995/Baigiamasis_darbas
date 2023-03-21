@extends('public.layouts.main')

@section('title', 'Kategorijos sukūrimo forma')

@section('content')
    <form action="{{route('categories.store')}}" method="post">

        @include('admin.layouts.styles')
        <link rel="stylesheet" href="{{ asset('css/styles.css') }}">        <fieldset>
            <legend>Kategorijos</legend>

            <label for="name">Pavadinimas:</label>
            <input type="text" name="name" id="name" required >

            <label for="slug">Slug:</label>
            <input type="text" name="slug" id="slug" required>

            <label for="description">Aprašymas:</label>
            <input type="text" name="description" id="description" required>

            <label for="image">Paveiksliukas</label>
            <input type="file" class="form-control-file" id="image" name="image">

            <label for="status_id">Status_ID:</label>
            <input type="text" name="status_id" id="status_id" required>

        </fieldset>

        <button type="submit">Sukurti kategoriją</button>
        @csrf
    </form>
@endsection
