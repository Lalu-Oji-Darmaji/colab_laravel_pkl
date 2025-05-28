<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/', function () {
    return view('biodata');
});

Route::post('/simpan', function (Request $request) {
    $request->validate([
        'nama' => 'required',
        'alamat' => 'required',
        'no_hp' => 'required',
        'foto' => 'image|mimes:jpg,jpeg,png|max:2048'
    ]);

    // Simpan foto ke storage
    $path = null;
    if ($request->hasFile('foto')) {
        $path = $request->file('foto')->store('public/foto');
        $path = str_replace('public/', 'storage/', $path); // agar bisa ditampilkan
    }

    $data = [
        'nama' => $request->nama,
        'alamat' => $request->alamat,
        'no_hp' => $request->no_hp,
        'foto' => $path,
    ];

    session()->push('biodata', $data);
    return redirect('/')->with('success', 'Biodata berhasil disimpan!');
});


