<?php

// routes/web.php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('homepage.homepage');
});

Route::get('/about', function () {
    return view('about.about');
})->name('about');

Route::get('/event-creator', function () {
    return view('event-creator');
});

Route::get('/review', function () {
    return view('review');
});

Route::get('/contact', function () {
    return view('contact');
});