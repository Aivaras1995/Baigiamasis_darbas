@extends('layouts.admin.main')

@section('title', 'Sporto prekių sąrašas')

@section('content')
    @include('public.layouts.styles')
    @include('admin.layouts.button_styles')
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <div class="row">
        <div class="col s12">
            <h2>Sporto prekės</h2>
            <table class="custom-table">
                <thead>
                <tr>
                    <th>Pavadinimas</th>
                    <th>Kaina</th>
                    <th>Dydis</th>
                    <th>Veiksmai</th>
                </tr>
                </thead>
                <tbody>
                @foreach($products as $product)
                    <tr>
                        <td>{{$product->name}}</td>
                        <td>{{$product->price}}</td>
                        <td>{{$product->size}}</td>
                        <td>
                            <form action="{{route('user.products.show', $product->id)}}" method="get" class="d-inline">
                                @csrf
                                <button type="submit" class="btn btn-secondary">Žiūrėti</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection


