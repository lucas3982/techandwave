let menu = document.querySelector('#menu-btn');
let navbar = document.querySelector('.header .navbar');

/*menu hamburguesa*/
menu.onclick = () =>{
    menu.classList.toggle('fa-times');
    navbar.classList.toggle('active');
};
/*menu hamburguesa*/


window.onscroll = () =>{
    menu.classList.remove('fa-times');
    navbar.classList.remove('active');
};

var swiper = new Swiper(".inicio-slider", {
    loop:true,
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
  });

  /*reseñas*/
  var swiper = new Swiper(".reseñas-slider", {
    loop:true,
    spaceBetween: 20,
    autoheight:true,
    grabCursor:true,
    breakpoints: {
        640: {
          slidesPerView: 1,
        },
        768: {
          slidesPerView: 2, 
        },
        1024: {
          slidesPerView: 3,
        },
    },
  });

/*cargar mas proyectos*/

let cargarMasBtn = document.querySelector('.proyectos .cargar-mas .btn');
let currentItem = 3;

cargarMasBtn.onclick = () =>{
    let boxes = [...document.querySelectorAll('.proyectos .box-container .box')];
    for(var i = currentItem; i < currentItem + 3; i++){
        boxes[i].style.display = 'inline-block';
    };
    currentItem += 3;
    if(currentItem >= boxes.length){
        cargarMasBtn.style.display = 'none';
    }

}


