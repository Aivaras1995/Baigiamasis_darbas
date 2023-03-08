@extends('public.layouts.main')

@section('title', 'Adreso kūrimo forma')

@section('content')
    <form action="{{route('addresses.store')}}" method="post">

        @extends('admin.layouts.styles')
        <fieldset>
            <legend>Address Details</legend>

            <label for="name">Name:</label>
            <input type="text" name="name" id="name" required >

            <label for="country">Country:</label>
            <input type="text" name="country" id="country" required>

            <label for="city">City:</label>
            <input type="text" name="city" id="city" required>

            <label for="zip">Zip Code:</label>
            <input type="text" name="zip" id="zip" required>

            <label for="street">Street:</label>
            <input type="text" name="street" id="street" required>

            <label for="house_number">House Number:</label>
            <input type="text" name="house_number" id="house_number" required>

            <label for="apartment_number">Apartment Number:</label>
            <input type="text" name="apartment_number" id="apartment_number">
        </fieldset>

        <fieldset>
            <legend>Additional Details</legend>

            <label for="state">State:</label>
            <input type="text" name="state" id="state">

            <label for="type">Type:</label>
            <input type="text" name="type" id="type">

            <label for="additional_info">Additional Info:</label>
            <textarea name="additional_info" id="additional_info" cols="30" rows="10"></textarea>
        </fieldset>

        <fieldset>
            <legend>User Details</legend>

            <label for="user_id">User:</label>
            <select name="user_id" id="user_id" required>
                @foreach($users as $user)
                    <option value="{{ $user->id }}">{{ $user->name }}</option>
                @endforeach
            </select>
        </fieldset>

        <button type="submit">Create Address</button>
        @csrf
    </form>
@endsection
