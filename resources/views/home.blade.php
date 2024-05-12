<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">
    <link rel="icon" type="image/png" href={{ asset('images/logo1(1).png') }}>
    <title>Home</title>
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
            <a aria-label="Hamburguesas" href="{{ route('burgers') }}" id="butHam">Hamburguesa</a>
            <a aria-label="Entrantes" href={{ route('sides') }} id="butPat">Entrantes</a>
            <a aria-label="Carnes a la brasa" href={{ route('meats') }} id="butCarn">Carnes</a>
        </div>
        <div class="button-row">
            <a aria-label="Ensaladas" href={{ route('salads') }} id="butEns">Ensaladas</a>
            <a aria-label="Libre de alergenos" href={{ route('allergen') }} id="butAlerg">Libre de alérgenos</a>
            <a aria-label="Postres" href={{ route('desserts') }} id="butPost">Postres</a>
        </div>
    </div>
    @include('includes.footer')
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
</body>

</html>
