const navSlide  = () => {

    const burger = document.querySelector('.burger');
    const nav = document.querySelector('.nav-links');
    const navLinks = document.querySelectorAll('.nav-links li');
    const blurPage  = document.querySelector('.section');
    const logo = document.querySelector('.logo');
    const knopkes = document.querySelector('.knopkes');


    //--- Toggle burger Nav -----
    burger.addEventListener('click', ()=> {
        nav.classList.toggle('nav-active');

        //--- Burger button animation ---
        burger.classList.toggle("toggle");

        //--- Bluring the  page -----

        blurPage.classList.toggle("blur");

        if (logo.style.display === "none") {
            logo.style.display = "block";
            knopkes.style.display = 'none';
          } else {
            logo.style.display = "none";
            knopkes.style.display = 'block';
          }

    });
    blurPage.addEventListener('click', ()=> {
        nav.classList.remove('nav-active');
        blurPage.classList.remove("blur");
        burger.classList.remove("toggle");
    })

    //--- Nav links animamtion ---
    navLinks.forEach((link, index) => {
        link.style.animation = 'navlinkFade 0.5s ease ${index / 7}s forwards';
    });
}

navSlide();