<?php

$this->app->get('route')->get('/', function ($request, $response) {
    return $response->setContent(View::make('wellcome'));
});
