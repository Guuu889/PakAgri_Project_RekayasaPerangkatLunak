//Toggle class active
const navbarNav = document.querySelector(".navbar-nav");

// Ketika hamburger menu diklik
document.querySelector("#hamburger-menu").onclick = () => {
  navbarNav.classList.toggle("active");
};






let currentSlide = 1;
const totalSlides = document.querySelectorAll('.box').length;

function showSlide(slideIndex) {
  const slides = document.querySelectorAll('.box');

  if (slideIndex < 1) {
    currentSlide = totalSlides;
  } else if (slideIndex > totalSlides) {
    currentSlide = 1;
  }

  for (let i = 0; i < slides.length; i++) {
    slides[i].style.display = 'none';
  }

  for (let i = currentSlide - 2; i <= currentSlide; i++) {
    let adjustedIndex = (i % totalSlides + totalSlides) % totalSlides;
    slides[adjustedIndex].style.display = 'block';
  }
}

function prevSlide() {
  showSlide(currentSlide -= 1);
}

function nextSlide() {
  showSlide(currentSlide += 1);
}

// Show the initial slide
showSlide(currentSlide);


 function showPopUp() {
      var popup = document.getElementById("pop-up");
      var overlay = document.getElementById("overlay");
  
      // Memastikan elemen popup dan overlay ada
      if (popup && overlay) {
        overlay.style.display = "block";
        overlay.style.opacity = 1;
  
        popup.style.display = "block";
        popup.style.opacity = 1;
  
        var body = document.getElementsByTagName("body")[0];
        body.style.overflow = "hidden";
      }
    }

    
  
    function closePopUp() {
      var Box = document.getElementById("pop-up");
      var overlay = document.getElementById("overlay");
      overlay.classList.remove("overlay");
      Box.style.opacity = 0;
      var body = document.getElementsByTagName("body")[0];
      Box.classList.remove("overlay");
  
      setTimeout(function () {
          Box.style.display = "none";
          overlay.style.display = "none";
          body.style.overflow = "auto";
      }, 100); // Waktu animasi fade-out, dalam milidetik (misalnya, 500ms)
  }



  

