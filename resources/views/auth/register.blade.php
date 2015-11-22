@extends('layouts.master')

@section('title', 'Welcome')

@section('page-styles')
    <link rel="stylesheet" href="styles/form.css">
@stop

@section('content')
    <div class="container">
        @if (count($errors) > 0)
            <div class="alert alert-danger">
                <strong>Whoops!</strong> There were some problems with your input.<br><br>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form method="POST" action="/register" class="form-signin">
            {!! csrf_field() !!}
            <label for="inputName" class="sr-only">Full Name</label>
            <input type="text" id="inputName" class="form-control" value="{{ old('name') }}" placeholder="John Doe" name="name" required autofocus>
            <label for="inputEmail" class="sr-only">Email address</label>
            <input type="email" id="inputEmail" class="form-control" value="{{ old('email') }}" placeholder="Email address" name="email" required autofocus>
            <label for="inputPassword" class="sr-only">Password</label>
            <input type="password" id="inputPassword" class="form-control" placeholder="Password" name="password" required>
            <label for="inputConfPassword" class="sr-only">Confirm Password</label>
            <input type="password" id="inputConfPassword" class="form-control" placeholder="Confirm Password" name="password_confirmation" required>
            <button class="btn btn-lg btn-success btn-block" type="submit">Register</button>
        </form>
    </div>
@stop

@section('scripts')
    <script src="js/register.js"></script>
@stop
