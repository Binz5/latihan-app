<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign In</title>
</head>
<body>
    <h1>Login</h1>

    <form action="/signin" method="POST">
    @csrf
    <label for="name">Nama:</label>
    <input type="text" name="name" id="name" placeholder="Nama" required>

    <label for="nim">NIM:</label>
    <input type="text" name="nim" id="nim" placeholder="NIM" required>

    <button type="submit">Login</button>
</form>

</body>
</html>
