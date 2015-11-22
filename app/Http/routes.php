<?php

// TODO: I don't know what to show here, so login page.
Route::get('/', function () {
    return view('pages.index');
});

Route::get('/register', function () {
    return view('pages.register');
});

Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('auth/logout', 'Auth\AuthController@getLogout');

// TODO: Create route group.
// TODO: Secure routes.
Route::get('api/alga/index', 'AlgaController@index');
Route::get('api/alga/show/{id}', 'AlgaController@show');
Route::post('api/alga/store', 'AlgaController@store');
Route::delete('api/alga/destroy/{id}', 'AlgaController@destroy');