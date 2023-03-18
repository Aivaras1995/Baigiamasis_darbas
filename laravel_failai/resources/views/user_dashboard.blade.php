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
    <h2 class="text-center mb-4">Sporto prekės</h2>
    <div class="row">
        <div class="col-md-4">
            <img src="https://example.com/image1.jpg" alt="Prekė 1" class="img-fluid">
        </div>
        <div class="col-md-4">
            <img src="https://example.com/image2.jpg" alt="Prekė 2" class="img-fluid">
        </div>
        <div class="col-md-4">
            <img src="https://example.com/image3.jpg" alt="Prekė 3" class="img-fluid">
        </div>
    </div>
</div>
@include('public.layouts.footer')

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>
</body>
</html>
@endsection
