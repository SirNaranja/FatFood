<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>FatFood</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">
    <link rel="icon" type="image/png" href={{ asset('images/logo1(1).png') }}>
</head>

<body>
    @include('includes.nav')
    <section id="slideshow">
        <img src="{{ asset('images/alergBackground.jpg') }}" alt="Imagen1">
        <img src="{{ asset('images/bebidaBackground.jpg') }}" alt="Imagen2">
        <img src="{{ asset('images/carneBackground.jpg') }}" alt="Imagen3">
        <img src="{{ asset('images/ensaladaBackground.jpg') }}" alt="Imagen4">
        <img src="{{ asset('images/hamburguesaBackground.jpg') }}" alt="Imagen5">


    </section>

    <h2>CONOCE NUESTROS PLATOS</h2>


    <div class="button-panel">
        <div class="button-row">
            <a aria-label="Hamburguesas" href={{ route('burgers') }} id="butHam">Hamburguesa</a>
            <a aria-label="Entrantes" href={{ route('sides') }} id="butPat">Entrantes</a>
            <a href={{ route('meats') }} id="butCarn">Carnes</a>
        </div>
        <div class="button-row">
            <a aria-label="Ensaladas" href={{ route('salads') }} id="butEns">Ensaladas</a>
            <a aria-label="Libre de alergenos" href={{ route('allergen') }} id="butAlerg">Libre de alérgenos</a>
            <a aria-label="Postres" href={{ route('desserts') }} id="butPost">Postres</a>
        </div>
    </div>
    <script>
        const slideshow = document.getElementById("slideshow");
        const images = slideshow.getElementsByTagName("img");
        let currentIndex = 0;

        // Mostrar la primera imagen
        images[currentIndex].style.opacity = "1";

        function showNextImage() {
            // Ocultar la imagen actual
            images[currentIndex].style.opacity = "0";

            // Obtener el índice de la siguiente imagen
            currentIndex = (currentIndex + 1) % images.length;

            // Mostrar la siguiente imagen
            images[currentIndex].style.opacity = "1";
        }
        setInterval(showNextImage, 5000);
    </script>
    @include('includes.footer')

</body>

</html>
