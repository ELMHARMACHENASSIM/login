<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup</title>
    @vite(['resources/sass/app.scss'])
</head>
<body>
    @include('layouts.header')
    <section class="login">
        <form action="" method="POST" enctype="multipart/form-data">
            @csrf
            <input type="file" name="profileimg" id="profileimg">
            <input type="text" name="fullname" id="fullname" placeholder="Full name">
            <input type="text" name="email" id="email" placeholder="Email">
            <input type="password" name="password" id="password" placeholder="Password">
            <input type="password" name="confirmepassword" id="confirmepassword" placeholder="Confirme Password">
            <input type="password" name="phone" id="phone" placeholder="phone">
            <button type="submit">Login</button>
            <h1>Do you have a account ? <a href={{route('signin.index')}}>login now</a></h1>
        </form>
    </section>
</body>
</html>