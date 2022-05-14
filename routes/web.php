<?php

use Mvcnan\Http\Route;
use App\controllers\HomeController;

Route::get('/',function(){
    echo 'ok en get';
});

Route::get('/index',[HomeController::class,'index']);