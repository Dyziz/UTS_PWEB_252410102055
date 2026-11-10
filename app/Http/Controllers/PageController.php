<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function login() {
        return view('login');
    }

    public function dashboard(Request $request) {
        $username = $request->query('username');
        return view('dashboard', ['username' => $username]);
    }

    public function daftartugas(Request $request) {
        $username = $request->query('username');
        $tugas = [
            [
                'matkul' => 'pweb',
                'tugas' => 'Tugas uts bikin web',
                'status' => 'udah',
            ],
            [
                'matkul' => 'PIb',
                'tugas' => 'Bikin prototype petani dan lain-lain',
                'status' => 'belum',
            ],
            [
                'matkul' => 'agama',
                'tugas' => 'bikin video keagamaan',
                'status' => 'belum',
            ],
            [
                'matkul' => 'UI/UX',
                'tugas' => 'Bikin maze prototype',
                'status' => 'udah',
            ],
            [
                'matkul' => 'Administrasi Sistem',
                'tugas' => 'Tugas nyatet server',
                'status' => 'udah',
            ]
        ];
        return view('daftartugas', [
            'tugas' => $tugas,
            'username' => $username
        ]);
    }

    public function profile() {
        $username = request()->query('username');
        return view('profile', ['username' => $username]);
    }
}
