<?php

// TODO: I don't know what to show here, so login page.
Route::get('/', function () {
    return view('pages.index');
});

// Authentication routes
Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('auth/logout', 'Auth\AuthController@getLogout');

// Registration routes
Route::get('/register', 'Auth\AuthController@getRegister');
Route::post('/register', 'Auth\AuthController@postRegister');

// Protected routes
Route::get('/dashboard', ['middleware' => 'auth', function() {
    return view('auth.dashboard');
}]);

// API routes
// TODO: Create route group.
// TODO: Secure routes.
Route::get('api/alga/index', 'AlgaController@index');
Route::get('api/alga/show/{id}', 'AlgaController@show');
Route::post('api/alga/store', 'AlgaController@store');
Route::delete('api/alga/destroy/{id}', 'AlgaController@destroy');