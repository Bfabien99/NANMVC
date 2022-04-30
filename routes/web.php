<?php

use Mvcnan\Http\Route;

Route::get('/',function(){
    return 'ok en get';
});

Route::post('/',function(){
    return 'ok en post';
});