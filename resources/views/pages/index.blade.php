@extends('layouts.master')

@section('title', 'Welcome')

@section('content')
<nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">Alga-Web</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li><a href="#about">About</a></li>
                <li><a href="/login">Login</a></li>
            </ul>
        </div>
    </div>
</nav>
<div class="container">
    <br><br><br><br> <!-- Quick and dirty for presentation, fix later. -->
    <iframe id="forecast_embed" type="text/html" frameborder="0" height="245px" width="100%" src="http://forecast.io/embed/#lat=42.5822&lon=87.8456&name=Kenosha, WI"> </iframe>
</div>
<script src="assets/vendor/jquery-1.11.3.min.js"></script>
<script src="assets/vendor/bootstrap.min.js"></script>
@stop