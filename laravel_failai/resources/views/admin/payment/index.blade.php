@extends('admin.layouts.main')

@section('content')

    <h2>Mokėjimų sąrašas</h2>

    @include('admin.layouts.styles')
    @include('admin.layouts.button_styles')

    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">

    <div class="payment-list">

        <a href="{{ route('payments.create') }}" class="btn btn-primary mb-3">Pridėti mokėjimą</a>

        <table class="table">
            <thead>
            <tr>
                <th>#</th>
                <th>Mokėjimo tipas</th>
                <th>Suma</th>
                <th>Užsakymo ID</th>
                <th>Status ID</th>
                <th>Veiksmai</th>
            </tr>
            </thead>
            <tbody>
            @foreach($payments as $payment)
                <tr>
                    <td>{{ $payment->id }}</td>
                    <td>{{ $payment->name }}</td>
                    <td>{{ $payment->amount }}</td>
                    <td>{{ $payment->order_id }}</td>
                    <td>{{ $payment->status_id }}</td>
                    <td>
                        <a href="{{ route('payments.edit', $payment->id) }}" class="btn btn-sm btn-primary">Redaguoti</a>
                        <form action="{{ route('payments.destroy', $payment->id) }}" method="POST" class="d-inline">
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
