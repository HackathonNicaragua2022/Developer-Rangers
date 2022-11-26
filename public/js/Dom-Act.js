//Evento load para desplasar imagen
window.addEventListener('load', function() {
    let img1 = document.getElementById('ImgAct');
    img1.style.animation = 'mover 1s ease-out';
    img1.style.visibility = 'visible';
    
});


let typed = new Typed('.typed', {
    strings: ['Gestiona las tareas relacionadas a tu hato ganadero.','Controla y administra tu tiempo.'] ,
    typeSpeed: 30,
    loop: true,
    backSpeed: 80,
    showCursor: true,
    startDelay: 200,
});



function AgregaClick(){
    let myModal = new bootstrap.Modal(document.getElementById('modal'), {
        keyboard: false
      });
      myModal.show();



    
 }

 var swiper = new Swiper(".mySwiper", {
    direction: "vertical",
    slidesPerView: "auto",
    freeMode: true,
    scrollbar: {
      el: ".swiper-scrollbar",
    },
    mousewheel: true,
  });