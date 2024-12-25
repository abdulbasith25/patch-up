let currentIndex = 0;
const slides = document.querySelectorAll('.slide');
const totalSlides = slides.length;

function showSlide() {
  
    slides.forEach((slide, index) => {
        slide.style.opacity = 0;
    });

   
    slides[currentIndex].style.opacity = 1;

 
    currentIndex = (currentIndex + 1) % totalSlides;
}

setInterval(showSlide, 1500);