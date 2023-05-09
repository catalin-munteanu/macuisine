/*  metiendo mi código JS dentro de este event listener, no importa si
    coloco la etiqueta <script src="js/main.js"></script> al final del body
    o dentro del head */
    document.addEventListener("DOMContentLoaded", function () {
      /* Funcion que maneja el menu */
      function navResponsive() {
        /* primero guardo en constantes los elementos HTML que necesito */
        const burgerMenuBtn = document.querySelector("#burger-menu-toggler");
    
        /* En este caso, al ser varios items y seleccionarlos todos, lo que se guarda
              en la constante menuItems es una lista de nodos*/
        const menuItems = document.querySelectorAll(".itemsNav");
    
        // Agrego o quito una clase al body para activar el menu mobile
        burgerMenuBtn.addEventListener("click", function () {
          document.body.classList.toggle("mobile-menu-active");
        });
    
        //recorro la lista de nodos menuItems
        menuItems.forEach(function (menuItem) {
          //ejecuto el método addEventListener() en cada uno
          menuItem.addEventListener("click", function () {
            //Al clickear un item del menu mobile, este se cierra
            document.body.classList.remove("mobile-menu-active");
    
            //selecciono el elemento con la clase y se la quito
            let currentItem = document.querySelector(".active");
            currentItem.classList.remove("active");
            //le pongo la clase al elemento clickeado
            this.classList.add("active");
          });
        });
      }
    
      navResponsive();
    });
    
// Scrolled Page class
window.addEventListener('scroll', function () {
    if (window.scrollY > 0) {
        document.body.classList.add('page-scrolled');
    } else {
        document.body.classList.remove('page-scrolled');
    }
});

// SLIDER

let slideIndex = 1;
showSlides(slideIndex);

// Next/previous controls
function plusSlides(n) {
  showSlides(slideIndex += n);
}

// Thumbnail image controls
function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  let i;
  let slides = document.getElementsByClassName("mySlides");
  let dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " active";
}

