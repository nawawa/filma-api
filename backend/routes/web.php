<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\LoginController;

Route::get('/', function () {
    return view('welcome');
});

Route::prefix('auth')->group(function() {
    Route::post('/login', [LoginController::class, 'login']);
    Route::post('/logout', [LoginController::class, 'logout']);
});
