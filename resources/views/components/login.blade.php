<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signin</title>
    @vite(['resources/sass/app.scss'])
</head>

<body>

    @include('layouts.header')
    <section class="login">
        <form action={{ route('home.login') }} method="POST">
            @csrf
            @if (session('error'))
                <div class="alerterror">
                    {{ session('error') }}
                </div>
            @endif
            <input type="text" name="email" id="email" placeholder="Email" required>
            <input type="password" name="password" id="password" placeholder="Password" required>
            <button type="submit">Login</button>
            <h1>if you don't have a account ? <a href={{ route('signup.index') }}>Signup now</a></h1>
        </form>
    </section>
</body>

</html>
