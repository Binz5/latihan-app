<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <h2>Login</h2>

    @if(session('error'))
        <p style="color: red">{{ session('error') }}</p>
    @endif
    @if(session('success'))
        <p style="color: green">{{ session('success') }}</p>
    @endif

    <form action="/login" method="POST">
        @csrf
        <label for="name">Nama:</label>
        <input type="text" name="name" id="name" required><br><br>

        <label for="nim">NIM:</label>
        <input type="text" name="nim" id="nim" required><br><br>

        <button type="submit">Login</button>
    </form>

    <p>Belum punya akun? <a href="/register">Daftar di sini</a></p>
</body>
</html>
