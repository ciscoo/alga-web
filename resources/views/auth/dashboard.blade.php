@extends('layouts.master')

@section('title', 'Welcome')

@section('page-styles')
    <link rel="stylesheet" href="styles/dashboard.css">
@stop

@section('content')
    <nav class="navbar navbar-inverse navbar-fixed-top">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#"><span>Alga</span> | Dashboard</a>
            </div>
            <div id="navbar" class="navbar-collapse collapse">
                <ul class="nav navbar-nav navbar-right">
                    <li role="presentation" class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                            {{ Auth::user()->name }} <span class="caret"></span>
                        </a>
                        <ul class="dropdown-menu">
                            <li><a href="/auth/logout">Log out</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-3 col-md-2 sidebar">
                <ul class="nav nav-sidebar">
                    <li class="active"><span></span><a href="#">Overview</a></li>
                    <li><a href="#">Reports</a></li>
                    <li><a href="#">Analytics</a></li>
                    <li><a href="#">Export</a></li>
                </ul>
            </div>
            <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
                <h1 class="page-header">Welcome</h1>
                <iframe id="forecast_embed" type="text/html" frameborder="0" height="245" width="100%" src="http://forecast.io/embed/#lat=42.3583&lon=-71.0603&name=Downtown Boston"> </iframe>
                <h2 class="sub-header">Recent Entries</h2>
                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                        <tr class="clickable-row">
                            <th>#</th>
                            <th>Chlorophyll <i>a</i></th>
                            <th>Cyanobacteria</th>
                            <th>Lux</th>
                            <th>Phosphate</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach ($algae as $alga)
                        <tr>
                        <td><a href="/details/{{ $alga->id }}">{{ $alga->id }}</a></td>
                        <td>{{ $alga->total_chla }}</td>
                        <td>{{ $alga->cyano_chla }}</td>
                        <td>{{ $alga->lux }}</td>
                        <td>{{ $alga->pbot }}</td>
                        </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@stop