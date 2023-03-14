@extends('layouts.admin.main')

@section('title', 'Naujų statusų sukūrimo forma')

@section('content')
    @include('admin.layouts.styles')
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <h1>Statuso kūrimas</h1>

    <form action="{{route('users.store')}}" method="post">
        <input type="text" name="name" placeholder="Name" value="{{old('name')}}"><br>
        <input type="text" name="type" placeholder="Type" value="{{old('type')}}"><br>
        <input type="submit" class="waves-effect waves-light btn" value="Išsaugoti">
        @csrf
    </form>
@endsection
