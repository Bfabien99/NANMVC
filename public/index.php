<?php

use Mvcnan\Http\Route;
use Mvcnan\Http\Request;
use Mvcnan\Http\Response;

require_once __DIR__ . '/../vendor/autoload.php';
require_once __DIR__ . '/../routes/web.php';
                                 
// dump(Route::$routes['get']['/']());
$route = new Route(new Request,new Response);

dump($route->resolve());


