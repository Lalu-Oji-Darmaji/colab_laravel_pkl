<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;


Route::get('/', function () {
    return view('welcome');
});


//3metode
Route::get('/biodata', function (Request $request) {
    // Cara 1 (request() helper)
    $nama1 = request('nama');
    $nim1 = request('nim');
    $jurusan1 = request('jurusan');
    $umur1 = request('umur');
    $alamat1 = request('alamat');

    // Cara 2 ($_GET)
    $nama2 = $_GET['nama'] ?? 'Tidak diisi';
    $nim2 = $_GET['nim'] ?? 'Tidak diisi';
    $jurusan2 = $_GET['jurusan'] ?? 'Tidak diisi';
    $umur2 = $_GET['umur'] ?? 'Tidak diisi';
    $alamat2 = $_GET['alamat'] ?? 'Tidak diisi';

    // Cara 3 ($request->input())
    $nama3 = $request->input('nama');
    $nim3 = $request->input('nim');
    $jurusan3 = $request->input('jurusan');
    $umur3 = $request->input('umur');
    $alamat3 = $request->input('alamat');

    return view('index', compact(
        'nama1', 'nim1', 'jurusan1', 'umur1', 'alamat1',
        'nama2', 'nim2', 'jurusan2', 'umur2', 'alamat2',
        'nama3', 'nim3', 'jurusan3', 'umur3', 'alamat3'
    ));
});
