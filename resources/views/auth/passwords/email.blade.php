<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reset Password</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <div class="contenedor">
        <img src="{{ asset('images/logo.png') }}">
        <form id="formulario" action="{{ route('password.email') }}" method="POST">
            @csrf
            <div class="formControl">
                <label for="Email">Email</label>
                <input id="Email" type="text" name="email"  required autocomplete="email" autofocus>
                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror

            </div>

            <button type="submit" id="button">Reset Password</button>
        </form>

    </div>
</body>
</html>
