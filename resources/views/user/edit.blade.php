@extends('layouts.users')
@section('title', 'Edit user')

@section('content')
    @if($errors->any())
        {!! implode('', $errors->all('<div style="color: red;">:message</div>')) !!}
    @endif
    <form action="{{ route('user.update', $user->id) }}" method="post">
        @csrf
        @method('patch')
        <div>
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" value="{{ $user->name }}">
        </div>
        <div>
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" value="{{ $user->email }}">
        </div>
        <input type="submit" value="Update user">
    </form>
@endsection
