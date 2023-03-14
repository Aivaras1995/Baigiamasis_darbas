@extends('layouts.admin.main')

@section('title', 'Vartotojo paskyros kūrimas')

@section('content')
    @include('admin.layouts.styles')
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <h1>Vartotojo kūrimas</h1>

    <form action="{{route('users.store')}}" method="post">
        <input type="text" name="name" placeholder="Name" value="{{old('name')}}"><br>
        <input type="text" name="email" placeholder="Email" value="{{old('email')}}"><br>
        <input type="password" name="password" placeholder="Password"><br>
        <input type="password" name="password_confirmation" placeholder="Password confirmation"><br>
        <input type="submit" class="waves-effect waves-light btn" value="Create">
        @csrf
    </form>
@endsection
