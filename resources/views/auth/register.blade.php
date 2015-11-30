@extends('layouts.master')

@section('title', 'Welcome')

@section('page-styles')
    <style type="text/css">
        body {
            padding-top: 3%;
            background: #F0F0F3;
        }

        .login-box {
            background: #fff;
            max-width: 400px;
            border: 1px solid #ddd;
            padding: 40px;
            margin: 10% auto;
        }

        .alert {
            color: #a94442;
            background-color: #f2dede;
            border-color: #ebccd1;
        }

        li {
            list-style: none;
        }
    </style>
@stop

@section('content')
    @if (count($errors) > 0)
        <div class="row">
            <div class="small-12">
                <div class="callout alert">
                    <h5><strong>Whoops!</strong> There were some problems with your input.</h5>
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    @endif
    <div class="small-12 medium-4 large-3 small-centered columns">
        <section class="login-box">
            <form method="POST" action="/register">
                {!! csrf_field() !!}
                <div class="row">
                    <div class="small-12">
                        <input type="text" value="{{ old('name') }}" placeholder="John Doe" name="name" required autofocus>
                    </div>
                </div>
                <div class="row">
                    <div class="small-12">
                        <input type="email" value="{{ old('email') }}" placeholder="jdoe@example.com" name="email" required>
                    </div>
                </div>
                <div class="row">
                    <div class="small-12">
                        <input type="password" placeholder="Password" name="password" required>
                    </div>
                </div>
                <div class="row">
                    <div class="small-12">
                        <input type="password" placeholder="Confirm Password" name="password_confirmation" required>
                    </div>
                </div>
                <div class="small-12">
                    <button class="expanded button success" type="submit">Register</button>
                </div>
            </form>
        </section>
    </div>
@stop
