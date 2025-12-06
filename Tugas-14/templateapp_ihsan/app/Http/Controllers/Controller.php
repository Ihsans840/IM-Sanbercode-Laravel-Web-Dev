<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index()
    {
        // data contoh, sesuaikan dengan petunjuk tugas kalau ada format tertentu
        $data = [
            'nama'      => 'Ihsan',
            'pekerjaan' => 'Calon Web Developer',
            'alamat'    => 'Indonesia',
            'hobi'      => ['Ngoding', 'Belajar hal baru', 'Ngopi'],
        ];

        return view('profile', $data);
    }
}