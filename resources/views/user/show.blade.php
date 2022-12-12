@extends('layouts.users')
@section('title', 'User details')

@section('content')
    <p><a href="{{ route('user.index') }}">&ltBack to users</a> </p>
    <h1>{{$user->name}} details</h1>
    <table>
        <tr>
            <th>Id</th>
            <th>Name</th>
            <th>Email</th>
        </tr>
        <tr>
            <td>{{$user->id}}</td>
            <td>{{$user->name}}</td>
            <td>{{$user->email}}</td>
        </tr>
    </table>
@endsection
