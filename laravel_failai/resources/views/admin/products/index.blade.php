@extends('layouts.admin.main')

@section('title', 'Sporto prekių sąrašas')

@section('content')
    @include('admin.layouts.styles')
    @include('admin.layouts.button_styles')
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <div class="row">
        <div class="col s12">
            <h2>Sporto prekės</h2>
            <a href="{{route('products.create')}}" class="btn btn-primary">Sukurti naujo produkto įrašą</a>
            <table class="table">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Pavadinimas</th>
                    <th>Kaina</th>
                    <th>Veiksmai</th>
                </tr>
                </thead>
                <tbody>
                @foreach($products as $product)
                    <tr>
                        <td>{{$product->id}}</td>
                        <td>{{$product->name}}</td>
                        <td>{{$product->price}}</td>
                        <td>
                            <form action="{{route('products.show', $product->id)}}" method="get" class="d-inline">
                                @csrf
                                <button type="submit" class="btn btn-secondary">Žiūrėti</button>
                            </form>
                            <form action="{{route('products.edit', $product->id)}}" method="get" class="d-inline">
                                @csrf
                                <button type="submit" class="btn btn-primary">Atnaujinti</button>
                            </form>
                            <form action="{{route('products.destroy', $product->id)}}" method="post" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Ištrinti</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
