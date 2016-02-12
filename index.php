<?php

require 'vendor/autoload.php';

$app = new Slim\App();

$app->get('/', function ($request, $response, $args) {
    $response->write("Hello welcome home");
    return $response;
});

$app->run();
