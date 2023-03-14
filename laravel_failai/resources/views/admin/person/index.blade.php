@extends('layouts.admin.main')

@section('title', 'Asmenų sąrašas')

@section('content')
    @include('admin.layouts.styles')
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <div class="row">
        <div class="col s12">
            <h1>Products</h1>
            <a href="{{route('persons.create')}}" class="btn btn-primary">Sukurti vartotojo profilį</a>
            <table class="table">
                <thead>
                <tr>
                    <th>Vardas</th>
                    <th>Pavardė</th>
                    <th>Asmens Kodas</th>
                    <th>El.Paštas</th>
                    <th>Telefono Numeris</th>
                    <th>Vartotojo ID</th>
                    <th>Adreso ID</th>

                </tr>
                </thead>
                <tbody>
                @foreach($persons as $person)
                    <tr>
                        <td>{{$person->id}}</td>
                        <td>{{$person->name}}</td>
                        <td>{{$person->surname}}</td>
                        <td>{{$person->personal_code}}</td>
                        <td>{{$person->email}}</td>
                        <td>{{$person->phone}}</td>
                        <td>{{$person->user_id}}</td>
                        <td>{{$person->address_id}}</td>
                        <td>
                            <a href="{{route('persons.edit', $person->id)}}" class="btn btn-primary">Redaguoti</a>
                            <form action="{{route('persons.destroy', $person->id)}}" method="post">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
