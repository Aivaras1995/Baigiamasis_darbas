@extends('admin.layouts.main')

@section('content')

    <h2>Vartotojų sąrašas</h2>

    @include('admin.layouts.styles')
    @include('admin.layouts.button_styles')

    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <a href="{{route('users.create')}}" class="waves-effect waves-light btn">{{__('Pridėti naują vartotoją')}}</a>
    <table>
        <thead>
        <tr>
            <th>ID</th>
            <th>{{__('Vartotojo vardas')}}</th>
            <th>{{__('Rolė')}}</th>
            <th>{{__('El.paštas')}}</th>
            <th>{{__('Vartotojo verifikacijos data')}}</th>
            <th>{{__('Vartotojas sukurtas')}}</th>
            <th>{{__('Vartotojas atnaujintas')}}</th>
            <th>{{__('Veiksmai')}}</th>
        </tr>
        </thead>
        <tbody>
        @foreach($users as $user)
            <tr>
                <td>{{$user->id}}</td>
                <td>{{$user->name}}</td>
                <td>{{$user->role}}</td>
                <td>{{$user->email}}</td>
                <td>{{$user->email_verified_at}}</td>
                <td>{{$user->created_at}}</td>
                <td>{{$user->updated_at}}</td>
                <td>
                    <a href="{{route('users.edit', $user->id)}}" class="btn btn-primary">Redaguoti</a>
                    <form action="{{route('users.destroy', $user->id)}}" method="post">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Ištrinti</button>
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection
