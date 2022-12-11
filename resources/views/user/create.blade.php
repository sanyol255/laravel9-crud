@extends('layouts.users')
@section('title', 'Create user')

@section('content')
    <form action="{{ route('user.store') }}" method="post">
        @csrf
        <div>
            <label for="name">Name:</label>
            <input type="text" id="name" name="name">
        </div>
        <div>
            <label for="email">Email:</label>
            <input type="email" id="email" name="email">
        </div>
        <div>
            <label for="password">Password:</label>
            <input type="password" id="password" name="password">
        </div>
        <input type="submit" value="Create user">
    </form>
@endsection
