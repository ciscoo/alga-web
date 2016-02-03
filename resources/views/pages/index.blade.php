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
        <input type="email" class="form-control" value="{{ old('email') }}" placeholder="Email address" name="email" required autofocus>
        <input type="password" class="form-control" placeholder="Password" name="password" required>
        <div class="checkbox">
            <label>
                <input type="checkbox" value="remember-me"> Remember me
            </label>
        </div>
        <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
        <a href="register" class="btn btn-lg btn-success btn-block">Register</a>
        <a class="btn btn-link" href="{{ url('/password/reset') }}">Forgot Your Password?</a>
    </form>
</div>
@stop
