@extends('layouts.master')

@section('title', 'Welcome')

@section('page-styles')
    <link rel="stylesheet" href="styles/form.css">
@stop

@section('content')
    <div class="container">
        <form method="POST" action="/auth/login" class="form-signin">
            {!! csrf_field() !!}
            <label for="inputName" class="sr-only">Full Name</label>
            <input type="text" id="inputName" class="form-control" value="{{ old('name') }}" placeholder="John Doe" required autofocus>
            <label for="inputEmail" class="sr-only">Email address</label>
            <input type="email" id="inputEmail" class="form-control" value="{{ old('email') }}" placeholder="Email address" required autofocus>
            <label for="inputPassword" class="sr-only">Password</label>
            <input type="password" id="inputPassword" class="form-control" placeholder="Password" required>
            <label for="inputConfPassword" class="sr-only">Confirm Password</label>
            <input type="password" id="inputConfPassword" class="form-control" placeholder="Confirm Password" required>
            <button class="btn btn-lg btn-success btn-block" type="submit">Register</button>
        </form>
    </div>
@stop

@section('scripts')

@stop
