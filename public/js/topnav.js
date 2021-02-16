const navSlide  = () => {

    const burger = document.querySelector('.burger');
    const nav = document.querySelector('.nav-links');
    const navLinks = document.querySelectorAll('.nav-links li');
    const blurPage  = document.querySelector('.content');

    //--- Toggle burger Nav -----
    burger.addEventListener('click', ()=> {
        nav.classList.toggle('nav-active');

        //--- Burger button animation ---
        burger.classList.toggle("toggle");

        //--- Bluring the  page -----

        blurPage.classList.toggle("blur")

    });
    blurPage.addEventListener('click', ()=> {
        nav.classList.remove('nav-active');
        blurPage.classList.remove("blur");
        urger.classList.remove("toggle");
    })

    //--- Nav links animamtion ---
    navLinks.forEach((link, index) => {
        link.style.animation = 'navlinkFade 0.5s ease ${index / 7}s farwards';
    });
}

navSlide();