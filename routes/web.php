<?php

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use App\Models\Monitor;
use Illuminate\Http\Request;



Route::get('/', function () {
    return view('welcome');
});

Route::get('home', function () {
    $monitors = Monitor::paginate();
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

Route::post('/auth/login', function (Request $request) {

    $request->validate([
        'email' => ['required', 'email'],
        'password' => ['required'],
    ]);
    return Inertia::location('/home');
});
