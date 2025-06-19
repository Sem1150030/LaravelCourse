<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return 'Main Page';
});

//Add a name to the route
Route::get('/hello', function () {
   return 'Hello World';
})->name('hello');;

//URL parameters
Route::get('/greet/{name}', function ($name) {
    return 'Hello ' . $name . '!';
});

//Redirect
Route::get('/hallo', function () {
   return redirect()->route('hello');
});

//
Route::fallback(function () {
   return '404 Not Found';
});
