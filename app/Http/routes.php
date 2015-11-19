<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

$app->get('/', 'IndexController@showIndex');

$app->get('/login', function () {
    return view('pages/login');
});

$app->get('/dashboard', 'DashboardController@authenticate');

$app->group(['namespace' => 'App\Http\Controllers'], function () use ($app) {
    $api = 'api/v1/';
    $app->get($api.'alga/all', ['uses' => 'AlgaController@getAll', 'as' => 'allAlgae']);
    $app->get($api.'alga/{id}', ['uses' => 'AlgaController@getAlga', 'as' => 'singleAlga']);
    $app->post($api.'alga', ['uses' => 'AlgaController@saveAlga', 'as' => 'saveAlga']);
    $app->delete($api.'alga/{id}', ['uses' => 'AlgaController@deleteAlga', 'as' => 'deleteAlga']);
});
