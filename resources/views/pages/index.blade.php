@extends('layouts.master')
@section('title', 'Welcome')

@section('page-styles')
    <link rel="stylesheet" href="styles/login.css">
@stop

@section('content')
    <div class="container">
        <form class="form-signin">
            <label for="inputUsername" class="sr-only">Username</label>
            <input type="text" id="inputUsername" class="form-control" placeholder="Username" required autofocus>
            <label for="inputPassword" class="sr-only">Password</label>
            <input type="password" id="inputPassword" class="form-control" placeholder="Password" required>
            <button id="login" class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
        </form>
    </div>
@stop