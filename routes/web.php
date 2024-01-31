<?php

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use App\Models\Monitor;



Route::get('/', function () {
    return view('welcome');
});

Route::get('home', function () {
    $monitors = Monitor::all();
    return Inertia::render('Home', [
        'monitors' => $monitors,

    ])->withViewData(['title' => 'Inertia Js',]);
});

Route::get('about', function () {
    return Inertia::render('About')->withViewData(['title' => 'About Js',]);
});

Route::get('login', function () {
    return Inertia::render('Login')->withViewData(['title' => 'Login Js',]);
});

Route::get('site/create', function () {
    return Inertia::render('Site/Create')->withViewData(['title' => 'Create Js',]);
});
