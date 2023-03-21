@extends('public.layouts.main')

@section('content')
    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Krepšelis</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-4">
    <h1>Krepšelis</h1>
    <table class="table table-bordered">
        <thead>
        <tr>
            <th>Produktas</th>
            <th>Kaina</th>
            <th>Kiekis</th>
            <th>Viso</th>
            <th>Veiksmai</th>
        </tr>
        </thead>
        <tbody>
        @foreach($cartItems as $item)
            <tr>
                <td>{{ $item->product->name }}</td>
                <td>{{ $item->product->price }} &euro;</td>
                <td>{{ $item->quantity }}</td>
                <td>{{ $item->product->price * $item->quantity }} &euro;</td>
                <td>
                    <form action="{{ route('cart.destroy', $item->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Pašalinti</button>
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>
</body>
</html>
@endsection

