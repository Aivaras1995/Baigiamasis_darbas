@extends('admin.layouts.main')

@section('content')

    <h1>Sporto prekių kategorijų sąrašas</h1>

    @include('admin.layouts.styles')
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">

    <div class="category-list">

        <a href="{{ route('categories.create') }}" class="btn btn-primary mb-3">Pridėti kategoriją</a>

        <table class="table">
            <thead>
            <tr>
                <th>#</th>
                <th>Pavadinimas</th>
                <th>Slug'as</th>
                <th>Aprašymas</th>
                <th>Paveiksliukas</th>
                <th>Status ID</th>
                <th>Veiksmai</th>
            </tr>
            </thead>
            <tbody>
            @foreach($categories as $category)
                <tr>
                    <td>{{ $category->id }}</td>
                    <td>{{ $category->name }}</td>
                    <td>{{ $category->slug }}</td>
                    <td>{{ $category->description }}</td>
                    <td>{{ $category->image }}</td>
                    <td>{{ $category->status_id }}</td>
                    <td>
                        <a href="{{ route('categories.edit', $category->id) }}" class="btn btn-sm btn-primary">Redaguoti</a>
                        <form action="{{ route('categories.destroy', $category->id) }}" method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-sm btn-danger">Trinti</button>
                        </form>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
@endsection
