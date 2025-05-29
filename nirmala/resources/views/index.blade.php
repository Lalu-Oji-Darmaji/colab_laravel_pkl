<!DOCTYPE html>
<html>
<head>
    <title>Biodata</title>
</head>
<body>
    <h1>Biodata </h1>

    <h2>Cara 1 (request())</h2>
    <ul>
        <li>Nama: {{ $nama1 }}</li>
        <li>NIM: {{ $nim1 }}</li>
        <li>Jurusan: {{ $jurusan1 }}</li>
        <li>Umur: {{ $umur1 }}</li>
        <li>Alamat: {{ $alamat1 }}</li>
    </ul>

    <h2>Cara 2 ($_GET)</h2>
    <ul>
        <li>Nama: {{ $nama2 }}</li>
        <li>NIM: {{ $nim2 }}</li>
        <li>Jurusan: {{ $jurusan2 }}</li>
        <li>Umur: {{ $umur2 }}</li>
        <li>Alamat: {{ $alamat2 }}</li>
    </ul>

    <h2>Cara 3 ($request->input())</h2>
    <ul>
        <li>Nama: {{ $nama3 }}</li>
        <li>NIM: {{ $nim3 }}</li>
        <li>Jurusan: {{ $jurusan3 }}</li>
        <li>Umur: {{ $umur3 }}</li>
        <li>Alamat: {{ $alamat3 }}</li>
    </ul>
</body>
</html>
