const prevBtn = document.querySelector('#prev-btn');
const nextBtn = document.querySelector('#next-btn');
const carousel = document.querySelector('.carousel');

let scrollLeft;

// Gestionnaire de clic pour le bouton Précédent
prevBtn.addEventListener('click', () => {
  scrollLeft = carousel.scrollLeft;
  carousel.scrollTo({
    left: scrollLeft - 400,
    behavior: 'smooth'
  });
});

// Gestionnaire de clic pour le bouton Suivant
nextBtn.addEventListener('click', () => {
  scrollLeft = carousel.scrollLeft;
  carousel.scrollTo({
    left: scrollLeft + 400,
    behavior: 'smooth'
  });
});
