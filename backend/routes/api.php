<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return Auth::user();
});

Route::get('/test', function() {
    return [
        'message' => 'Laravelです！'
    ];
});

Route::post('/test', function() {
    return [
        'message' => 'Laravelです！POSTされたよ！'
    ];
});
