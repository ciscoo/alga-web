<?php

$app->get('/', function () use ($app) {
    return $app->welcome();
});

// TODO: Create route group.
$app->get('/all', 'AlgaController@getAll');
$app->post('/insert', 'AlgaController@saveAlga');