@extends('layouts.master')

@section('title', 'Welcome')

@section('page-styles')
<link rel="stylesheet" href="styles/form.css">
@stop

@section('content')
  @if (count($errors) > 0)
    <div class="alert callout">
      <p><strong>Whoops!</strong> There were some problems with your input.</p>
      <ul>
        @foreach ($errors->all() as $error)
          <li>{{ $error }}</li>
        @endforeach
      </ul>
    </div>
  @endif
<div class="container">
  <form method="POST" action="/auth/login" class="form-signin">
    {!! csrf_field() !!}
    <label for="inputEmail" class="sr-only">Email address</label>
    <input type="email" id="inputEmail" class="form-control" value="{{ old('email') }}" placeholder="Email address" name="email" required autofocus>
    <label for="inputPassword" class="sr-only">Password</label>
    <input type="password" id="inputPassword" class="form-control" placeholder="Password" name="password" required>
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