<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\ProfileController;

// Redirect root ke /home
Route::get('/', function () {
    return redirect('/home');
});

// Halaman Home
Route::get('/home', function () {
    return view('home');
});

// Halaman Form
Route::get('/form', function () {
    return view('form');
});

// Submit Form (Day 13)
Route::post('/welcome', function (Request $request) {

    $data = [
        'first_name' => $request->first_name,
        'last_name' => $request->last_name,
        'gender' => $request->gender,
        'nationality' => $request->nationality,
        'languages' => $request->languages ?? [],
        'bio' => $request->bio,
    ];

    $request->session()->put('user', $data);

    return view('welcome', $data);
});

// Profile (Day 14)
Route::get('/profile', [ProfileController::class, 'index'])->name('profile');