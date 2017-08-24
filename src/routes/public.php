<?php

use Slim\Http\Request;
use Slim\Http\Response;

$app->get('/[{name:\d+}]', function (Request $request, Response $response, $args) {
    $response = $response->withHeader('Content-Type', 'Application/json')->withStatus(200)->write(\lib\Utils::curl()->get('http://httpbin.org/get')->response);
    return $response;
});
