<?php

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/', function () {
    return Inertia::render(
        'Home',
        [
            'name' => 'saney bin faruk',
            'frameworks' => ['laravel', 'vue', 'inertia'],
            'date'=> 'Today'
        ]);
});

Route::get('/about', function () {
    return Inertia::render('About');
});

Route::get('/contact', function () {
    return Inertia::render('Contact');
});

Route::post('/logout', function () {
    return Inertia::render('Logout');
});


