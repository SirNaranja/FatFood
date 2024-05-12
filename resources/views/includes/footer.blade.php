<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/footer.css') }}"/>
    <title>Footer</title>
</head>
<body>
    <footer>
        <div class="links">
          <ul>
            <li><a aria-label="Menu" id="titFoot" href="{{route('home')}}">Menu</a></li>
            <li><a aria-label="Hamburguesas" href="{{route('burgers')}}">Hamburguesas</a></li>
            <li><a aria-label="Entrantes" href="{{route('sides')}}">Entrantes</a></li>
            <li><a aria-label="Postres" href="{{route('desserts')}}">Postres</a></li>
          </ul>
          </div>
          <div class="links">
          <ul>
            <li><a aria-label="#" style="color: black">.</a></li>
            <li><a aria-label="Carnes a la brasa" href="{{route('meats')}}">Carnes</a></li>
            <li><a aria-label="Carnes a la brasa" href="{{route('salads')}}">Ensaladas</a></li>
            <li><a aria-label="Libres de alergenos" href="{{route('allergen')}}">Libre de alérgenos</a></li>
          </ul>
          </div>
          <div class="links">
            <ul>
              <li><a aria-label="Sobre nosotros" id="titFoot" href="{{route('home')}}">Fat Food</a></li>
              <li><a aria-label="Politica privacidad" href="{{route('privacy')}}">Política de privacidad</a></li>
              <li><a aria-label="Aviso legal" href="{{route('avlegal')}}">Aviso legal</a></li>
              <li><a aria-label="Sobre nosotros" href="{{route('aboutus')}}">Sobre nosotros</a></li>
            </ul>
        </div>
        <div class="social-icons">
          <a aria-label="Nuestro Instagram" href="https://instagram.com/fatfoodnuria?igshid=YmMyMTA2M2Y="><img src="{{ asset('images/instagram.png') }}" alt="Logo de Instagram"></a>
          <a aria-label="Nuestro TikTok" href="https://www.tiktok.com/@fatfoodnuria"><img src="{{ asset('images/tiktok.png') }}" alt="Logo de TikTok"></a>
          <a aria-label="Nuestro Facebook " href="https://www.facebook.com/people/FatFood-Nuria/pfbid0wMAojp5Rd3PgYZs2YvkszDpKbTgGD3NijsYpX3yJ9be2UQqZFeB8ZE7PaRTvzmGUl/"><img src="{{ asset('images/facebook.png') }}" alt="Logo de Facebook"></a>
        </div>
        <div id="logo">
          <img src="{{ asset('images/logo1(1).png') }}" alt="Logo"></a>
        </div>
      </footer>

</body>
</html>
