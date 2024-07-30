<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/{any}', function () {
    return view('welcome'); // or the name of your Blade template serving the Vue app
})->where('any', '.*'); // This route will catch all routes not defined above