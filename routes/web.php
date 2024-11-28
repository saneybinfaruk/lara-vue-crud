<?php

use App\Http\Controllers\Auth\LoginController;
use App\Models\User;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;


Route::get('/login', [LoginController::class, 'create'])->name('login');
Route::post('/login', [LoginController::class, 'store'])->name('login');
Route::post('/logout', [loginController::class, 'destroy'])->middleware('auth');

Route::middleware('auth')->group(function () {
    Route::get('/users', function () {
        return Inertia::render('Users/Index', [
            'users' => User::query()
                ->latest()
                ->when(Request::input('search'), function ($query, $search) {
                    $query->where('name', 'like', "%{$search}%");
                })
                ->paginate(10)
                ->withQueryString()
                ->through(fn($user) => [
                    'id' => $user->id,
                    'name' => $user->name,
                    'email' => $user->email,
                ]),
            'filters' => Request::only(['search'])
        ]);
    });

    Route::post('/users', function () {

        $attributes = Request::validate([
            'name' => ['required', 'string',],
            'email' => ['required', 'string', 'email',],
            'password' => ['required'],
        ]);

        User::create($attributes);

        return redirect('/users');
    },);

    Route::get('/users/create', function () {
        return Inertia::render('Users/Create');
    },);

    Route::get('/about', function () {
        return Inertia::render('About');
    });

    Route::get('/contact', function () {
        return Inertia::render('Contact');
    });


});



