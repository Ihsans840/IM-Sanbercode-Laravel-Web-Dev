<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index()
    {
        // ambil data dari session
        $user = session('user', [
            'first_name'  => '',
            'last_name'   => '',
            'gender'      => '',
            'nationality' => '',
            'languages'   => [],
            'bio'         => '',
        ]);

        return view('profile', compact('user'));
    }
}