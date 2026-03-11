let slideIndex = 1;

// On lance le carrousel au chargement
showSlides(slideIndex);

// Pour les flèches
function plusSlides(n) {
  showSlides(slideIndex += n);
}

// Pour les petits points
function currentSlide(n) {
  showSlides(slideIndex = n);
}

// La mécanique du carrousel
function showSlides(n) {
  let i;
  let slides = document.getElementsByClassName("carousel-slide");
  let dots = document.getElementsByClassName("dot");
  
  // Boucle de fin et de début
  if (n > slides.length) { slideIndex = 1 }
  if (n < 1) { slideIndex = slides.length }
  
  // Cache tout
  for (i = 0; i < slides.length; i++) {
    slides[i].classList.remove("active");
  }
  
  // Retire l'état actif des points
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  
  // Affiche la bonne image et le bon point
  slides[slideIndex - 1].classList.add("active");
  dots[slideIndex - 1].className += " active";
}

// Optionnel : Ça fait défiler l'image automatiquement toutes les 4 secondes !
setInterval(function() {
  plusSlides(1);
}, 4000);

