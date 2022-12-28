<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <h1>Halaman Login</h1>

    <form action="/login" method="post">
        @csrf

        <label for="username">Username</label>
        <input type="text" name="username" id="username"> <br>

        <label for="password">Password</label>
        <input type="password" name="pass" id="pass">

        <button type="submit">Masuk</button>

    </form>
</body>

</html>
