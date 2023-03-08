@extends('admin.layouts.main')

@section('content')

    <h1>Adresų sąrašas</h1>

    @include('admin.layouts.styles')
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">

    <div class="address-list">

        <a href="{{ route('addresses.create') }}" class="btn btn-primary mb-3">Pridėti adresą</a>

        <table class="table">
            <thead>
            <tr>
                <th>#</th>
                <th>Pavadinimas</th>
                <th>Šalis</th>
                <th>Miestas</th>
                <th>Pašto kodas</th>
                <th>Gatvė</th>
                <th>Namo numeris</th>
                <th>Buto numeris</th>
                <th>Užsakymo būklė</th>
                <th>Tipo pavadinimas</th>
                <th>Papildoma informacija</th>
                <th>Vartotojo ID</th>
                <th>Veiksmai</th>
            </tr>
            </thead>
            <tbody>
            @foreach($addresses as $address)
                <tr>
                    <td>{{ $address->id }}</td>
                    <td>{{ $address->name }}</td>
                    <td>{{ $address->country }}</td>
                    <td>{{ $address->city }}</td>
                    <td>{{ $address->zip }}</td>
                    <td>{{ $address->street }}</td>
                    <td>{{ $address->house_number }}</td>
                    <td>{{ $address->apartment_number }}</td>
                    <td>{{ $address->state }}</td>
                    <td>{{ $address->type }}</td>
                    <td>{{ $address->additional_info }}</td>
                    <td>{{ $address->user_id }}</td>
                    <td>
                        <a href="{{ route('addresses.edit', $address->id) }}" class="btn btn-sm btn-primary">Redaguoti</a>
                        <form action="{{ route('addresses.destroy', $address->id) }}" method="POST" class="d-inline">
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


