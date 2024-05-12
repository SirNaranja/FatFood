<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/toastify-js/src/toastify.min.css" />
    <script src="https://cdn.jsdelivr.net/npm/toastify-js"></script>
    <link rel="stylesheet" href="{{ asset('css/menu.css') }}"/>
    <link rel="icon" type="image/png" href={{ asset('images/logo1(1).png') }}>
    <title>Bebidas</title>
  </head>

  <body>
    @include('includes.nav')
    <div class="button-panel">
      <div class="button-row">
        <a aria-label="Hamburguesas" href="{{route('burgers')}}" id="butHam">Hamburguesas</a>
        <a aria-label="Entrantes" href="{{route('sides')}}" id="butPat">Entrantes</a>
        <a aria-label="Carnes a la brasa" href="{{route('meats')}}" id="butCarn">Carnes</a>
      </div>
      <div class="button-row">
        <a aria-label="Ensaladas" href="{{route('salads')}}" id="butEns">Ensaladas</a>
        <a aria-label="Libre de alergenos" href="{{route('allergen')}}" id="butAlerg">Libre de alérgenos</a>
        <a aria-label="Postres" href="{{route('desserts')}}" id="butPost">Postres</a>
      </div>
    </div>
    <h2>BEBIDAS</h2>
    <div class="menus">
    @if(count($drinks)!=0)
    @foreach ($drinks as $drink)
    <div class="cajaMenu">
      <div class="container">
        <img src="{{ $drink->url}}" alt="Descripción de la imagen" />
        <div class="container2">
        <h1>{{ $drink->name }}</h1>
          <p id="p2">{{ $drink->price }}€</p>
          @if(Auth::user())
          <form action="{{route('cart.add',$drink->id)}}" method="GET" id="addForm">
                <button type="submit">Añadir</button>
          </form>
          @endif
        </div>
      </div>
    </div>
    @endforeach
    @else
    <p>No hay menus por el momento</p>
    @endif
    </div>
    @include('includes.footer')
  </body>
</html>
