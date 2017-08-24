<?php

namespace middleware;

use Slim\Http\Request;
use Slim\Http\Response;

class App
{
    function __invoke(Request $request, Response $response, $next)
    {
        //TODO
        return $next($request, $response);
    }
}