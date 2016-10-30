<?php

use Viserio\HttpFactory\ResponseFactory;

Route::get('/', function ($request, $args) {
    $response = (new ResponseFactory())->createResponse();
    $response->getBody()->write('test');

    return $response;
});
