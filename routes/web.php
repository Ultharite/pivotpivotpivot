<?php

use App\Models\Signing;
use Illuminate\Support\Facades\Route;
use App\Models\Artist;

Route::get('/', function () {

    return view('welcome', [
        'signings' => Signing::all(),
        'artists' => Artist::all(),
    ]);
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/contact', function () {
    return view('contact');
});
