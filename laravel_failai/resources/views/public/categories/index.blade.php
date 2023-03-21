@extends('layouts.admin.main')

@section('title', 'Sporto prekių kategorijų sąrašas')

@section('content')
    @include('public.layouts.styles')
    @include('admin.layouts.button_styles')
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <div class="row">
        <div class="col s12">
            <h2>Sporto prekių kategorijos</h2>
            <table class="custom-table">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Pavadinimas</th>
                    <th>Slug'as</th>
                    <th>Aprašymas</th>
                    <th>Paveiksliukas</th>
                    <th>Veiksmai</th>
                </tr>
                </thead>
                <tbody>
                @foreach($categories as $category)
                    <tr>
                        <td>{{$category->id}}</td>
                        <td>{{$category->name}}</td>
                        <td>{{$category->slug}}</td>
                        <td>{{$category->description}}</td>
                        <td>{{$category->image}}</td>
                        <td>
                            <button type="submit" class="btn btn-secondary">Prekių sąrašas</button>

                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
