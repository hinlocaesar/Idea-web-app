<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', [
        'message' => 'Hello World',
        'person' => request('person', "Word "),
    ]);
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/contact', function () {
    return view('contact');
});
