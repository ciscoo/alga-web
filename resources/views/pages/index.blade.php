@extends('layouts.master')

@section('title', 'Welcome')

@section('page-styles')
<link rel="stylesheet" href="styles/form.css">
@stop

@section('content')
<div class="container">
  <form method="POST" action="/auth/login" class="form-signin">
    {!! csrf_field() !!}
    <label for="inputEmail" class="sr-only">Email address</label>
    <input type="email" id="inputEmail" class="form-control" value="{{ old('email') }}" placeholder="Email address" required autofocus>
    <label for="inputPassword" class="sr-only">Password</label>
    <input type="password" id="inputPassword" class="form-control" placeholder="Password" required>
    <div class="checkbox">
      <label>
        <input type="checkbox" value="remember-me"> Remember me
      </label>
    </div>
    <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
    <a href="register" class="btn btn-lg btn-success btn-block">Register</a>
  </form>
</div>
@stop