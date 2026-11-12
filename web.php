<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('gis');
})->name('home');

Route::get('/gis', function () {
    return view('gis');
})->name('gis');

Route::get('/bio', function () {
    return view('bio');
})->name('bio');

Route::get('/assignment', function () {
    return view('assignment');
})->name('assignment');

