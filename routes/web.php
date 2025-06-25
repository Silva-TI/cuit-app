<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AuthController;

Route::get('/', function () 
{
    return view('home');
})->middleware('auth');

route::get('/register', [Authcontroller::class, 'showRegister']) ->name('register')->middleware('guest');;
route::post('/register', [Authcontroller::class, 'register']);

route::get('/login', [Authcontroller::class, 'showLogin'])->name('login')->middleware('guest');
route::post('/login', [Authcontroller::class, 'login']);

