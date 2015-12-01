@extends('layouts.master')

@section('title', 'Dashboard')
@section('body-class', 'dashboard')

@section('content')
    <nav class="navbar navbar-inverse navbar-fixed-top">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">Alga | <span>Dashboard</span></a>
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
                    <li><a href="#">Help</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container">
        <iframe id="forecast_embed" type="text/html" frameborder="0" height="245" width="100%" src="http://forecast.io/embed/#lat=42.726052&lon=87.805873&name=Racine, WI"> </iframe>
        <hr>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>UUID</th>
                    <th>Total Chl a</th>
                    <th>Cyano Chl a</th>
                    <th>Created At</th>
                    <th>Secci Depth</th>
                    <th>Dissolved Oxygen</th>
                </tr>
            </thead>
            <tbody>
            @foreach ($algae as $alga)
                <tr>
                    <td>{{ $alga->id }}</td>
                    <td>{{ $alga->uuid }}</td>
                    <td>{{ $alga->total_chla }}</td>
                    <td>{{ $alga->cyano_chla }}</td>
                    <td>{{ $alga->created_at }}</td>
                    <td>{{ $alga->sd_value }}</td>
                    <td>{{ $alga->do_value }}</td>
                </tr>
            @endforeach
    </div>
@stop