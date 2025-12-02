<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\FormController;

Route::get('/dashboard', [DashboardController::class, 'index']);
Route::get('/form', [FormController::class, 'index']);
Route::post('/form', [FormController::class, 'store']);

Route::get('/', function () {
    return redirect('/dashboard');
});