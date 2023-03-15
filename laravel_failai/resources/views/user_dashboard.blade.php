@extends('public.layouts.main')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <h1>Produktai</h1>
                <ul>
                    @foreach($products as $product)
                        <li>{{$product->name}}</li>
                    @endforeach
                </ul>
            </div>
            <div class="col-md-4">
                <h1>Kategorijos</h1>
                <ul>
                    @foreach($categories as $category)
                        <li>{{$category->name}}</li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
@endsection
