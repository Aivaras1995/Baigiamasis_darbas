@extends('admin.layouts.main')

@section('content')

    <h1>Vartotojų sąrašas</h1>

    @include('admin.layouts.styles')
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <a href="{{route('users.create')}}" class="waves-effect waves-light btn">{{__('Pridėti naują vartotoją')}}</a>
    <table>
        <thead>
        <tr>
            <th>ID</th>
            <th>{{__('users.name')}}</th>
            <th>{{__('users.role')}}</th>
            <th>{{__('users.email')}}</th>
            <th>{{__('users.email_verified_at')}}</th>
            <th>{{__('general.created_at')}}</th>
            <th>{{__('general.updated_at')}}</th>
            <th>{{__('general.actions')}}</th>
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
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection
