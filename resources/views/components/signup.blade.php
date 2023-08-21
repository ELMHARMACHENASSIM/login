<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup</title>
    @vite(['resources/sass/app.scss'])

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
        integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    @include('layouts.header')

    <section class="login">

        <form action={{ route('signup.store') }} method="POST" enctype="multipart/form-data">
            @csrf
            @if (Session::has('success'))
                <div class="alert">
                    <h1>{{ Session::get('success') }}</h1>
                </div>
            @endif
            <div class="blockimg">
                <label for="profileimg"><i class="fa-solid fa-plus"></i></label>
                <div class="displayi">
                    <img src="" alt="" srcset="" id="displayimg">
                </div>
            </div>
            <input type="file" name="profileimg" id="profileimg" required>
            <input type="text" name="fullname" id="fullname" placeholder="Full name" required>
            <input type="email" name="email" id="email" placeholder="Email" required>
            <input type="password" name="password" id="password" placeholder="Password" required>
            <input type="password" name="confirmepassword" id="confirmepassword" placeholder="Confirme Password"
                required>
            <input type="number" name="phone" id="phone" placeholder="phone" required>
            <button type="submit" id="submitlogin">Login</button>
            <h1>Do you have a account ? <a href={{ route('login.index') }}>login now</a></h1>
        </form>
    </section>






    @vite(['resources/js/showimg.js'])
</body>

</html>
