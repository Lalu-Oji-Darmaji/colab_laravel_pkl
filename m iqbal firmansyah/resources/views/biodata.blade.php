<!DOCTYPE html>
<html>
<head>
    <title>Biodata Sederhana</title>
</head>
<body>
    <h2>Form Biodata</h2>

    @if(session('success'))
        <p style="color: green">{{ session('success') }}</p>
    @endif

    <form action="/simpan" method="POST" enctype="multipart/form-data">
        @csrf
        <label>Nama:</label><br>
        <input type="text" name="nama" required><br>

        <label>Alamat:</label><br>
        <input type="text" name="alamat" required><br>

        <label>No HP:</label><br>
        <input type="text" name="no_hp" required><br>

        <label>Foto:</label><br>
        <input type="file" name="foto" accept="image/*"><br><br>

        <button type="submit">Simpan</button>
    </form>

    <h3>Daftar Biodata</h3>
    <ul>
        @foreach(session('biodata', []) as $data)
            <li>
                {{ $data['nama'] }} - {{ $data['alamat'] }} - {{ $data['no_hp'] }} <br>
                @if(!empty($data['foto']))
                    <img src="{{ asset($data['foto']) }}" alt="Foto {{ $data['nama'] }}" width="100">
                @endif
            </li>
        @endforeach
    </ul>
</body>
</html>
