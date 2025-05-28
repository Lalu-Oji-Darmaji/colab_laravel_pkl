<?php

use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('formulir');
});

Route::get('/request', function (Request $request) {
    $nama = $_GET['nama'];
    $umur = $_GET['umur'];
    $prodi = $_GET['prodi'];
    $alamat = $_GET['alamat'];

    return view('index', compact('nama', 'umur', 'prodi', 'alamat'));
});