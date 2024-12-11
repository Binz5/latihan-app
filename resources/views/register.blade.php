<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
</head>
<body>
    <h2>Register</h2>

    @if(session('success'))
        <p style="color: green">{{ session('success') }}</p>
    @endif

    <form action="/register" method="POST">
        @csrf
        <label for="name">Nama:</label>
        <input type="text" name="name" id="name" required><br><br>

        <label for="nim">NIM:</label>
        <input type="text" name="nim" id="nim" required><br><br>

        <button type="submit">Register</button>
    </form>

    <p>Sudah punya akun? <a href="/login">Login di sini</a></p>
</body>
</html>
