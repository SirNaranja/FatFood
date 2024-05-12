<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="icon" type="image/png" href={{ asset('images/logo1(1).png') }}>
</head>
<body>
    <div class="contenedor" aria-label="Formulario para registrarte">
        <img src="{{ asset('images/logo1(1).png') }}">

        <form id="formulario" action="{{ route('register') }}" method="POST">
            @csrf
            <div class="formControl">
                <label for="usuario">Nombre de usuario</label>
                <input aria-label="Introduce tu nombre de usuario" id="usuario" type="text" name="name" name="name" required autocomplete="name" autofocus>
                @error('name')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror

            </div>

            <div class="formControl">
                <label for="email">E-mail</label>
                <input aria-label="Introduce tu email" id="email"  type="email" name="email" required autocomplete="email">
                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror

            </div>

            <div class="formControl">
                <label>Contraseña</label>
                <input aria-label="Introduce tu contraseña" id="pass"  name="password" type="password" required autocomplete="new-password">
                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror

            </div>

            <div class="formControl">
                <label for="passConfirma">Confirmar Password</label>
                <input aria-label="Vuelve a introducir la contraseña" id="passConfirma" name="password_confirmation" required autocomplete="new-password" type="password">

            </div>
            <p aria-label="Ya tienes cuenta? inicia sesión" id="msg"><a href="{{ route('login') }}">¿Ya tienes cuenta? Inicia sesión</a></p>

            <button aria-label="Registrar" type="submit" id="button">Registrar</button>
        </form>
    </div>
</body>
</html>
