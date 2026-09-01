<?php

use Illuminate\Support\Facades\Route;

Route::get('{any}', function () {
    return view('welcome');
})->where('any', '.*');

Route::get('/roll', function () {
    return view('roll');
});
