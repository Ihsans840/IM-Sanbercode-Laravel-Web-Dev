<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index(Request $request)
    {
        // Ambil data user dari session (sesuai tugas Day 14)
        // Pastikan sebelumnya di route POST /welcome kamu sudah simpan ke session:
        // $request->session()->put('user', $data);

        $user = $request->session()->get('user', []);

        // Kirim ke view 'profile'
        return view('profile', [
            'first_name'  => $user['first_name']  ?? '',
            'last_name'   => $user['last_name']   ?? '',
            'gender'      => $user['gender']      ?? '',
            'nationality' => $user['nationality'] ?? '',
            'languages'   => $user['languages']   ?? [],
            'bio'         => $user['bio']         ?? '',
        ]);
    }
}