@extends('layouts.admin.main')

@section('title', 'Naujas produktas')
@section('content')
<h1>Produkto informacija</h1>

<p>Pavadinimas: {{ $product->name }}</p>
<p>Slug: {{ $product->slug }}</p>
<p>Aprašymas: {{ $product->description }}</p>
<p>Nuotrauka: {{ $product->image }}</p>
<p>Kategorija: {{ $product->category_id }}</p>
<p>Spalva: {{ $product->color }}</p>
<p>Dydis: {{ $product->size }}</p>
<p>Kaina: {{ $product->price }}</p>

@endsection
