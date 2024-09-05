<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login User</title>

    @vite(['resources/js/app.js', 'resources/css/app.css'])

</head>
<body>

    <div class="login-page">
        <div class="form">
          {{-- <form class="register-form">
            <input type="text" placeholder="name"/>
            <input type="password" placeholder="password"/>
            <input type="text" placeholder="email address"/>
            <button>create</button>
            <p class="message">Already registered? <a href="#">Sign In</a></p>
          </form> --}}
        @if (session('failed'))
            <div class="alert alert-danger">
                {{ session('failed') }}
            </div>
        @endif
        <form class="login-form" action="{{ route('user.store') }}" method="POST">
            @csrf

            <input name="email" type="email" placeholder="email">
            <input name="password" type="password" placeholder="password">
            <x-alerts.validation/>
            <button type="submit">Login</button>
        </form>
        <p class="message">Not registered? <a href="#">Create an account</a></p>
        </div>
      </div>

    </body>
</html>
