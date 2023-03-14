@extends('admin.layouts.main')

@section('content')

    <h1>Statusų sąrašas</h1>

    @include('admin.layouts.styles')
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">

    <div class="order-list">

        <a href="{{ route('statuses.create') }}" class="btn btn-primary mb-3">Sukurti naują statusą</a>

        <table class="table">
            <thead>
            <tr>
                <th>#</th>
                <th>Statuso pavadinimas</th>
                <th>Statuso tipas</th>
                <th>Veiksmai</th>
            </tr>
            </thead>
            <tbody>
            @foreach($statuses as $status)
                <tr>
                    <td>{{ $status->id }}</td>
                    <td>{{ $status->name }}</td>
                    <td>{{ $status->type }}</td>
                    <td>
                        <a href="{{ route('statuses.edit', $status->id) }}" class="btn btn-sm btn-primary">Redaguoti</a>
                        <form action="{{ route('statuses.destroy', $status->id) }}" method="POST" class="d-inline">
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
