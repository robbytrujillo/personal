<?php

use Illuminate\Support\Facades\Route;

// routing

Route::get('/', function () {
    return view('home');
});

Route::get('/links', function () {
    return view('links');
});
