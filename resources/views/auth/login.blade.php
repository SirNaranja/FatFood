<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio de sesión</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="icon" type="image/png" href={{ asset('images/logo1(1).png') }}>
</head>
<body>
    <div class="contenedor" aria-label="Formulario para iniciar sesión">
        <img src="{{ asset('images/logo1(1).png') }}">
        <form id="formulario" action="{{ route('login') }}" method="POST">
            @csrf
            <div class="formControl">
                <label for="usuario">Email</label>
                <input aria-label="Introduce tu mail" id="usuario" name="email" type="text">
                @error('email')
                <span  role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror

            </div>

            <div class="formControl">
                <label>Contraseña</label>
                <input aria-label="Introduce tu contraseña" id="pass" name="password" type="password">
                @error('password')
                        <span  role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror

            </div>
            @if (Route::has('password.request'))
            <p aria-label="Has olvidado tu contraseña?" id="msg"><a class="btn btn-link" href="{{ route('password.request') }}">¿Has olvidado tu contraseña?</p></a><br>
            @endif
            <p aria-label="Has olvidado tu contraseña?" id="msg"><a class="btn btn-link" href="{{ route('register') }}">Hazte una cuenta</p></a>
            <button aria-label="Iniciar sesión" id="button">Iniciar Sesión</button>
        </form>

    </div>
</body>
</html>

