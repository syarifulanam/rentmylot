<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use Illuminate\Auth\Middleware\Authenticate;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/admin', function () {
    return view('admin');
})->middleware('auth');

Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/login', [AuthController::class, 'authenticate']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');