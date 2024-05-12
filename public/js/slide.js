const images = document.querySelectorAll('.hero-image img');
let currentIndex = 0;

// Mostrar la primera imagen
images[currentIndex].classList.add('active');

setInterval(() => {
  // Ocultar la imagen actual
  images[currentIndex].classList.remove('active');

  // Obtener el índice de la siguiente imagen
  currentIndex = (currentIndex + 1) % images.length;

  // Mostrar la siguiente imagen
  images[currentIndex].classList.add('active');
}, 5000);
