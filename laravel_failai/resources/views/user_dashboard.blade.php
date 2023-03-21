@extends('public.layouts.main')

@section('content')
    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
@include('public.layouts.styles')
</head>
<body>
@include('public.layouts.header')
<div class="container mt-4">
    <form action="{{ route('search') }}" method="GET">
        <div class="input-group mb-4">
            <input type="text" name="search" class="form-control" placeholder="Ieškoti prekės...">
            <button type="submit" class="btn btn-primary">Ieškoti</button>
        </div>
    </form>
</div>

<div class="container mt-4">
    <h2 class="text-center mb-4">Sporto prekės</h2>
    <div class="row">
        @foreach($products as $product)
            <div class="col-md-4 mb-4">
                <div class="card h-100">
                    <img src="{{ asset($product->image) }}" alt="{{ $product->name }}" class="card-img-top img-fluid product-image">
                    <div class="card-body">
                        <h4 class="card-title">{{ $product->name }}</h4>
                        <p class="card-text">{{ $product->description }}</p>
                        <p><strong>Spalva:</strong> {{ $product->color }}</p>
                        <p><strong>Dydis:</strong> {{ $product->size }}</p>
                        <p><strong>Kaina:</strong> {{ $product->price }} €</p>
                        <a href="{{ url('product', $product->slug) }}" class="btn btn-primary">Peržiūrėti prekę</a>
                    </div>
                </div>
            </div>
            @if ($loop->iteration % 3 == 0 && !$loop->last)//tikrina, ar dabartinis produktas yra trečias šioje eilutėje ir ar dar yra produktų sąraše po šio.
    </div>
    <div class="row">
        @endif
        @endforeach
    </div>
</div>
@include('public.layouts.footer')
</body>
</html>
@endsection
