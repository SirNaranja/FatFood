<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Sobre nosotros - FatFood</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="{{ asset('css/aboutus.css') }}">
    <link rel="icon" type="image/png" href={{ asset('images/logo1(1).png') }}>

<body>
    @include('includes.nav')
    <header>
        <div class="container">
            <h1>FatFood</h1>
            <p>Reparto de comida a domicilio en Gavá</p>
        </div>
    </header>

    <main>
        <div class="container">
            <h2>Sobre nosotros</h2>
            <p>Somos una empresa de reparto de comida a domicilio ubicada en Gavá, Barcelona. Nuestro objetivo es llevar
                la mejor comida directamente a la puerta de tu casa.</p>
            <h3>Nuestra oferta</h3>
            <p>Ofrecemos una amplia variedad de opciones de comida, desde platos tradicionales hasta opciones
                vegetarianas y veganas. Todos nuestros pedidos se preparan con ingredientes frescos y de alta calidad.
            </p>
            <h3>Nuestro equipo</h3>
            <p>Contamos con un equipo de repartidores comprometidos y amables, que aseguran que tu comida llegue
                caliente y en el tiempo acordado.</p>
            <h3>Cómo pedir</h3>
            <p>Puedes hacer tu pedido en línea a través de nuestro sitio web o llamando a nuestro número de teléfono.
                Ofrecemos entrega a domicilio y también puedes recoger tu pedido en nuestro local.</p>
            <h3>Contacto</h3>
            <p>Si tienes alguna pregunta o comentario, no dudes en ponerte en contacto con nosotros a través de nuestro
                correo electrónico o número de teléfono.</p>
            <p>Email: admin@fatfood.com</p>
            <p>Teléfono: 985425784</p>
        </div>
    </main>
    @include('includes.footer')
</body>

</html>
