<?php

use Mvcnan\Http\Route;

require_once __DIR__ . '/../vendor/autoload.php';
require_once __DIR__ . '/../routes/web.php';


dump(Route::$routes['get']['/']());

dump(Route::$routes['post']['/']());


