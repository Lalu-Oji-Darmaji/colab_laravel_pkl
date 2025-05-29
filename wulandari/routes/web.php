<?php

use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/request', function (Request $request) {

    $nama = request('nama');
    $nim = request('nim');
    $jurusan= request('jurusan');
    $email = request('email');
    $alamat = request ('alamat');
    return view('wulan', compact('nama', 'nim', 'jurusan', 'email', 'alamat'));
});
