<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

Route::get('/', function () {
    return redirect('/home');
});

Route::get('/home', function () {
    return view('home');
});

Route::get('/form', function () {
    return view('form');
});

Route::post('/welcome', function (Request $request) {
    // ambil data dari form
    $data = [
        'first_name'  => $request->first_name,
        'last_name'   => $request->last_name,
        'gender'      => $request->gender,
        'nationality' => $request->nationality,
        'languages'   => $request->languages ?? [],
        'bio'         => $request->bio,
    ];

    return view('welcome', $data);
});