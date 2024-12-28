<<<<<<< HEAD
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

=======
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

>>>>>>> d7551d09c0565e1ad752b3250b3d6ca5f48dff31
setInterval(showSlide, 1500);