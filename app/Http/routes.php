<?php

Route::get('/', function () {
    return view('welcome');
});

// TODO: Create route group.
// TODO: Secure routes.
Route::get('api/alga/index', 'AlgaController@index');
Route::get('api/alga/show/{id}', 'AlgaController@show');
Route::post('api/alga/store', 'AlgaController@store');
Route::post('api/alga/destroy/{id}', 'AlgaController@destroy');