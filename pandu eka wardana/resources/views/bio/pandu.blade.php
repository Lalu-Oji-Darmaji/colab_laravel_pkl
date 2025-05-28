<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Bio {{ $nama }}</title>
</head>
<body>

    <ul>
        <img src="{{ asset('img/none.jpg') }}" width="200">
        <li>Nama : {{ $nama }}</li>
        <li>NIM : {{ $nim }}</li>
        <li>Jurusan : {{ $jurusan }}</li>
        <li>Alamat : {{ $alamat }}</li>
    </ul>

</body>
</html>
