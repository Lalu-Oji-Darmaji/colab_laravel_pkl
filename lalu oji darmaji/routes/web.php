<?php

use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('formulir');
});

Route::get('/request', function (Request $request) {
    // $nama_gambar = $_FILES["foto"]["name"];
    // $lokasi_gambar = $_FILES["foto"]["tmp_name"];
    // move_uploaded_file($lokasi_gambar, "storage/" . $nama_gambar);
    // $foto = $nama_gambar;
    // $foto = $_GET['foto'];
    $nama = $_GET['nama'];
    $umur = $_GET['umur'];
    $prodi = $_GET['prodi'];
    $alamat = $_GET['alamat'];

    return view('index', compact('nama', 'umur', 'prodi', 'alamat'));
});
