<?php

use App\Mail\welcomeMail;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AdminController;
use Illuminate\Auth\Middleware\Authenticate;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware('auth')->group(function (){
    Route::get('/admin', [AdminController::class, 'index'])->middleware('auth');
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

});
   
Route::middleware('guest')->group(function (){
    Route::get('/login', [AuthController::class, 'login'])->name('login');
    Route::post('/login', [AuthController::class, 'authenticate']);
});

Route::get('/test', function () {
    return 'Test Route';
})->middleware('tokenvalid');

Route::get('/send-welcome-mail', function (){
    $data = [
        'name' => 'Syariful Anam',
        'email' => 'useranam@gmail.com',
        'password' => '123456789',
    ];
    Mail::to('anam@gmail.com')->send(new welcomeMail($data));
});
