<?php

use Viserio\HttpFactory\ResponseFactory;

Route::get('/', function ($request, $args) {
    $response = (new ResponseFactory())->createResponse();
    $response->getBody()->write((string) View::create('welcome'));

    return $response;
});
