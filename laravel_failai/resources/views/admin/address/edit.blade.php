@extends('layouts.admin.main')

@section('title', 'Adreso atnaujinimas')
@section('content')

    <input type="text" name="city" placeholder="City" value="{{$address->city}}"><br>
    <input type="text" name="country" placeholder="Country" value="{{$address->country}}"><br>
    <input type="text" name="email" placeholder="Email" value="{{$address->email}}"><br>
    <input type="text" name="phone" placeholder="Phone" value="{{$address->phone}}"><br>
    <input type="text" name="address" placeholder="Address" value="{{$address->address}}"><br>
    <input type="text" name="zip" placeholder="Zip" value="{{$address->zip}}"><br>
    <input type="submit" class="waves-effect waves-light btn" value="Atnaujinti">

@endsection
