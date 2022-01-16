const navSlide  = () => {

    const burger = document.querySelector('.burger');
    const nav = document.querySelector('.nav-links');
    const meganav = document.querySelector('.meganav-links');
    const navLinks = document.querySelectorAll('.nav-links li');
    const blurPage  = document.querySelector('.section');
    const logo = document.querySelector('.logo');
    const knopkes = document.querySelector('.knopkes');


    //--- Toggle burger Nav -----
    burger.addEventListener('click', ()=> {
        nav.classList.toggle('nav-active');
        meganav.classList.toggle('mega-active');

        //--- Burger button animation ---
        burger.classList.toggle("toggle");

        //--- Bluring the  page -----
        blurPage.classList.toggle("blur");

        //--- Toggling Logo or Knopkes---
        if (logo.style.display === "none") {
            logo.style.display = "block";
            knopkes.style.display = 'none';
          } else {
            logo.style.display = "none";
            knopkes.style.display = 'block';
          }

    });
    //--- Closing navigation on outside click
    blurPage.addEventListener('click', ()=> {
        nav.classList.remove('nav-active');
        meganav.classList.remove('mega-active');
        blurPage.classList.remove("blur");
        burger.classList.remove("toggle");
    });

    //--- Nav links animamtion ---
    navLinks.forEach((link, index) => {
        link.style.animation = 'navlinkFade 0.5s ease ${index / 7}s forwards';
    });
}

navSlide();

//   navigation disapear on scroll
	
if ($( window ).width() > 769) {   
var mywindow = $(window);
var mypos = mywindow.scrollTop();
var up = false;
var newscroll;
mywindow.scroll(function () {
    newscroll = mywindow.scrollTop();
    if (newscroll > mypos && !up) {
        $('.slidd').stop().fadeOut(730);
        up = !up;

    } else if(newscroll < mypos && up) {
        $('.slidd').stop().fadeIn(300);
        up = !up;
    }
    mypos = newscroll;
});
}