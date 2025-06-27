<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CuitController;


route::get('/register', [Authcontroller::class, 'showRegister']) ->name('register')->middleware('guest');;
route::post('/register', [Authcontroller::class, 'register']);

route::get('/login', [Authcontroller::class, 'showLogin'])->name('login')->middleware('guest');
route::post('/login', [Authcontroller::class, 'login']);



route::middleware('auth')->group(function (){
Route::get('/', [CuitController::class, 'index'])->middleware('auth')->name('home');
route::post('/logout', [AuthController::class, 'logout'])->name('logout')->middleware('auth');
route::post('/post', [CuitController::class, 'post'])->name('cuit.post')->middleware(('auth'));


});




