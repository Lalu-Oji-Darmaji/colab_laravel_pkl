<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Oji</title>
</head>
<style>
    .container {
        display: flex;
        justify-content: center;
        align-items: center;
        flex-direction: column;
    }

    img {
        border: 1px solid #000;
    }

    .bio{
        margin-top: 40px;
        display: flex;
        justify-content: start;
        align-items: start;
        flex-direction: column;
    }

    li{
        list-style: none;
    }
</style>

<body>
    <div class="container">
        <img src="profil.jpg" alt="" style="width: 200px; border-radius:100%;">
        <div class="bio">
            <li>Nama : {{$nama}}</li>
            <li>Umur : {{$umur}}</li>
            <li>Prodi : {{$prodi}}</li>
            <li>Alamat : {{$alamat}}</li>
        </div>
    </div>
</body>

</html>