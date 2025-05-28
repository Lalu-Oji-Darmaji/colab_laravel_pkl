<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

Route::post('/request', function(Request $request){

    $nama = request('nama');
    $nim = request('nim');
    $jurusan = request('jurusan');
    $alamat = request('alamat');

    return view('bio.pandu', compact('nama', 'nim', 'jurusan', 'alamat'));
});
