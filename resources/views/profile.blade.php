<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
</head>
<body>
    <h1>Selamat Datang di Halaman Profile</h1>

    <p>Nama: {{ session('user.name') ?? 'Tidak diketahui' }}</p>
    <p>NIM: {{ session('user.nim') ?? 'Tidak diketahui' }}</p>

    <a href="/logout">Logout</a>
</body>
</html>
