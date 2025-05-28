<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    <h1>ISI BIODATA</h1><br>

    <form action="/request" method="POST">
        @csrf

        <label for="nama">Nama</label>
        <input type="text" name="nama" id="nama"><br>

        <label for="nim">NIM</label>
        <input type="text" name="nim" id="nim"><br>

        <label for="jurusan">Jurusan</label>
        <input type="text" name="jurusan" id="jurusan"><br>

        <label for="alamat">Alamat</label>
        <input type="text" name="alamat" id="alamat"><br>

        <button type="submit">Kirim</button>
    </form>

</body>
</html>
