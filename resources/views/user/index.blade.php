@extends('layouts.users')
@section('title', 'Users')

@section('content')
    <h1 class="">List of users</h1>
    @if (Session::has('success'))
        <div class="flash-success">
            {{ Session::get('success') }}
        </div>
    @endif
    <div class="create-button"><a href="{{ route('user.create') }}">Create user</a></div>
    <table>
        <tr>
            <th>User name</th>
            <th>User email</th>
            <th colspan="3">Actions</th>
        </tr>
        @foreach($users as $user)
        <tr>
            <td>{{ $user->name ?? '' }}</td>
            <td>{{ $user->email ?? '' }}</td>
            <td><a href="{{ route('user.edit', $user->id) }}">Edit</a></td>
            <td>
                <form action="{{ route('user.destroy', $user->id)}}" method="post">
                    @csrf
                    @method('delete')
                    <input type="submit" value="Delete" class="delete-button">
                </form>
            </td>
            <td><a href="{{ route('user.show', $user->id) }}">Details</a></td>
        </tr>
        @endforeach
    </table>
@endsection

