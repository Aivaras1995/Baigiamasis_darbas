@extends('admin.layouts.main')

@section('content')

    <h2>Užsakymų sąrašas</h2>

    @include('admin.layouts.styles')
    @include('admin.layouts.button_styles')

    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">

    <div class="order-list">

        <a href="{{ route('orders.create') }}" class="btn btn-primary mb-3">Pridėti užsakymą</a>

        <table class="table">
            <thead>
            <tr>
                <th>#</th>
                <th>Vartotojo ID</th>
                <th>Pristatymo adreso ID</th>
                <th>Apmokėjimo adreso ID</th>
                <th>Status ID</th>
                <th>Veiksmai</th>
            </tr>
            </thead>
            <tbody>
            @foreach($orders as $order)
                <tr>
                    <td>{{ $order->id }}</td>
                    <td>{{ $order->user_id }}</td>
                    <td>{{ $order->shipping_address_id }}</td>
                    <td>{{ $order->billing_address_id }}</td>
                    <td>{{ $order->status_id }}</td>
                    <td>
                        <a href="{{ route('orders.edit', $order->id) }}" class="btn btn-sm btn-primary">Redaguoti</a>
                        <form action="{{ route('orders.destroy', $order->id) }}" method="POST" class="d-inline">
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
