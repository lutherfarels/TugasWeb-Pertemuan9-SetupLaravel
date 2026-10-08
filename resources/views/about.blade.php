<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About - TR 9</title>
</head>
<body>

    <h1>Tentang Saya</h1>

    <p>Nama: {{ $profile['nama'] }}</p>
    <p>Jurusan: {{ $profile['jurusan'] }}</p>
    <p>Kampus: {{ $profile['kampus'] }}</p>

    <p>
        Halaman ini dibuat menggunakan Laravel
        untuk memenuhi Tugas Rutin 9.
    </p>

    <nav>
        <a href="/">Home</a> |
        <a href="/about">About</a> |
        <a href="/contact">Contact</a>
    </nav>

</body>
</html>