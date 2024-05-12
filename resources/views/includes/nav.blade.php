<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="{{ asset('css/nav.css') }}">
    <link rel="icon" type="image/png" href={{ asset('images/logo1(1).png') }}>
    <title>Document</title>

  </head>
  <body>
    <nav>
        <div class="logo">
          <p><a href="{{route('home')}}"><img src="{{ asset('images/logo1(1).png') }}" alt="Logo de tu empresa"></a></p>
        </div>
        <div class="menu">
          <ul>
            @if (Auth::user())
            <li><a href="{{route('cart.index')}}">Carrito</a></li>
            @endif
            <li><a aria-label="Carta" href="{{route('home')}}">Carta</a></li>
            <li><a aria-label="Quienes somos" href="{{route('aboutus')}}">Quienes Somos</a></li>
            @if(Auth::user() && Auth::user()->hasRole('admin'))
            <li><a href="{{route('menu.index')}}">Gestionar Menu</a></li>
            <li><a href="{{route('user.index')}}">Gestionar Usuarios</a></li>
            <li><a href="{{route('cart.gestion')}}">Gestionar Pedidos</a></li>
            @endif
            <div class="dropdown">
                <div class="dropdown-toggle">
                    <img id ="profile" src="{{ asset('images/profile.png') }}" alt="Icono de perfil">
                </div>
                @if(Auth::user())
                <ul class="dropdown-menu">
                    <li><a href="{{route('profile')}}">Perfil</a></li>
                    <form action="{{ route('logout') }}" method="POST">
                    @csrf
                    <li><input aria-label="Cerrar sesión" type="submit" value="Cerrar sesión"></li>
                    </form>
                </ul>
                @else
                <ul class="dropdown-menu">
                    <li><a aria-label="Iniciar sesión" href="{{ route('login') }}">Login</a></li>
                    <li><a aria-label="Registrarse" href="{{ route('register') }}">Register</a></li>
                </ul>
                @endif
            </div>
          </ul>

        </div>
      </nav>

  </body>
</html>
