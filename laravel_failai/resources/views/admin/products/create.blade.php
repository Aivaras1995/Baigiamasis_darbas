@extends('public.layouts.main')

@section('title', 'Produkto sukūrimo forma')
@extends('admin.layouts.styles')

@section('content')
    <div class="container">
        <h2>Produkto sukūrimo forma</h2>
        <form method="POST" action="{{ route('products.store') }}">
            @csrf
            <div class="form-group">
                <label for="name">Pavadinimas</label>
                <input type="text" class="form-control" id="name" name="name" required>
            </div>
            <div class="form-group">
                <label for="slug">Slug</label>
                <input type="text" class="form-control" id="slug" name="slug" required>
            </div>
            <div class="form-group">
                <label for="description">Aprašymas</label>
                <textarea class="form-control" id="description" name="description" rows="3" required></textarea>
            </div>
            <div class="form-group">
                <label for="image">Nuotrauka</label>
                <input type="file" class="form-control-file" id="image" name="image">
            </div>
            <div class="form-group">
                @if(isset($categories) && count($categories))
                    <div class="form-group">
                        <label for="category_id">Kategorija</label>
                        <select class="form-control" id="category_id" name="category_id">
                            <option value="">Pasirinkite kategoriją</option>
                            @foreach($categories as $category)
                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                            @endforeach
                        </select>
                    </div>
                @endif
            </div>
            <div class="form-group">
                <label for="color">Spalva</label>
                <input type="text" class="form-control" id="color" name="color" required>
            </div>
            <div class="form-group">
                <label for="size">Dydis</label>
                <input type="text" class="form-control" id="size" name="size" required>
            </div>
            <div class="form-group">
                <label for="price">Kaina</label>
                <input type="text" class="form-control" id="price" name="price" min="0" step="0.01" required>
            </div>
            <div class="form-group">
                @if(isset($statuses) && count($statuses))
                    <div class="form-group">
                        <label for="status_id">Būsena</label>
                        <select class="form-control" id="status_id" name="status_id">
                            <option value="">Pasirinkite būsena</option>
                            @foreach($statuses as $status)
                                <option value="{{ $status->id }}">{{ $status->name }}</option>
                            @endforeach
                        </select>
                    </div>
                @endif
            </div>
            <button type="submit" class="btn btn-primary">Sukurti</button>
        </form>
    </div>
@endsection
