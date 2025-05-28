<?php
// if(isset($_GET['submit'])){
//     $nama = $_GET['nama'];
//     $umur = $_GET['umur'];
//     $alamat = $_GET['alamat'];
//     $prodi= $_GET['prodi'];
// }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="/request" method="get" enctype="multipart/form-data">
        <!-- <label for="">Image</label>
        <input type="file" name="foto">
        <br> -->
        <label for="">Nama</label>
        <input type="text" name="nama" placeholder="nama">
        <br>
        <label for="">Umur</label>
        <input type="text" name="umur" placeholder="umur">
        <br>
        <label for="">Prodi</label>
        <input type="text" name="prodi" placeholder="prodi">
        <br>
        <label for="">Alamat</label>
        <input type="text" name="alamat" placeholder="Alamat">
        <br>
        <button type="submit">submit</button>
    </form>
    <!-- <form action="" method="post">
        <input type="file">
        <button type="submit" name="submit">Simpan</button>
    </form> -->
</body>

</html>