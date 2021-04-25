<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.6.0/gsap.min.js" integrity="sha512-1dalHDkG9EtcOmCnoCjiwQ/HEB5SDNqw8d4G2MKoNwjiwMNeBAkudsBCmSlMnXdsH8Bm0mOd3tl/6nL5y0bMaQ==" crossorigin="anonymous"></script>


<script>
    fullpage('#fullpage', {
        autoScrolling: true,
        navigation: true,
        controlArrows: false,
        scrollBar: true,
        slidesNavigation: true,

    })
</script>
<script>
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
</script>