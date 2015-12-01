@extends('layouts.master')

@section('title', 'Welcome')
@section('body-class', 'login')

@section('content')
    <div class="container">
        @if (count($errors) > 0)
            <div class="alert alert-danger" role="alert">
                <p><strong>Whoops!</strong> There were some problems with your input.</p>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form method="POST" action="/auth/login" class="form-signin">
            {!! csrf_field() !!}
            <input type="text" class="form-control" value="{{ old('name') }}" placeholder="John Doe" required autofocus>
            <input type="email" class="form-control" value="{{ old('email') }}" placeholder="Email address" name="email" required>
            <input type="password" class="form-control" placeholder="Password" name="password" required>
            <input type="password" class="form-control" placeholder="Confirm Password" name="password_confirmation" required>
            <a href="register" class="btn btn-lg btn-success btn-block">Register</a>
        </form>
    </div>
@stop
