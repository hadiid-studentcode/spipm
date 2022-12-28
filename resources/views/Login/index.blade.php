<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sistem Perkaderan IPM | SPIPM </title>
</head>

<body>
    <h1>Halaman Login</h1>

    @if (session()->has('error'))
       
            <strong> {{ session('error') }}</strong>
        </div>
    @endif

    <form action="/login" method="post">
        @csrf

        <label for="username">Username</label>
        <input type="text" name="username" id="username"> <br>

        <label for="password">Password</label>
        <input type="password" name="password" id="password">

        <button type="submit">Masuk</button>

    </form>
</body>

</html>
