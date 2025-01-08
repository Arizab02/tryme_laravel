<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('halo');
});

Route::get('/about', function () {
    return view('about');
});