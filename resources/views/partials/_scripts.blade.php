<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
<script type="text/javascript" src="js/fullpage.js"></script>
<script type="text/javascript" src="js/carousel.js"></script>
<script type="text/javascript" src="js/topnav.js"></script>
<script type="text/javascript" src="js/accordion.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.6.0/gsap.min.js" integrity="sha512-1dalHDkG9EtcOmCnoCjiwQ/HEB5SDNqw8d4G2MKoNwjiwMNeBAkudsBCmSlMnXdsH8Bm0mOd3tl/6nL5y0bMaQ==" crossorigin="anonymous"></script>

<script>
    document.addEventListener("DOMContentLoaded", function(event) {
    // wait until window is loaded - all images, styles-sheets, fonts, links, and other media assets
    // you could also use addEventListener() instead
        window.onload = function() {
            // OPTIONAL - waits til next tick render to run code (prevents running in the middle of render tick)
            window.requestAnimationFrame(function() {
                gsap.from('svg', {delay:2, stagger:0.2, x:-280, opacity:0, duration: 0.4, ease: "none"});
                gsap.from('button', {delay:3, opacity:0, duration: 0.5, scale:.2, ease: "elastic"});
                gsap.from('.listas', {delay:2, y:180, opacity:0, duration: 0.5, ease: "none"});
                gsap.from('h1', {delay:0.5, stagger:0.5, opacity:0, duration: 2, y:-30, ease: "back"});
                gsap.from('.stars', {delay:2, stagger:0.5, opacity:0, scale:2, duration: 2, ease: "back"});    
                gsap.from('h2', {delay:0.9, stagger:0.5, opacity:0, duration: 1.5, scale:2, ease: "bounce"});
                gsap.from('.elastic', {delay:3, opacity:0, duration: 1.5, scale:.2, ease: "elastic"});
                gsap.from('.menu', {delay:2, stagger:0.5, opacity:0, scale:2, duration: 2, ease: "back"}); 
                gsap.from('h3', {delay:2, stagger:0.5, opacity:0, y:90, duration: 2, ease: "back"}); 
            });
        };
    });
</script>

<script>
    fullpage('#fullpage', {
        autoScrolling: true,
        navigation: true,
        controlArrows: false,
        scrollBar: true,
        slidesNavigation: true,

        onLeave: (origin, destination, direction) => {
            const section = destination.item;
            const items = section.querySelectorAll('h1');
            const items2 = section.querySelectorAll('h2');
            const stars = section.querySelectorAll('.stars');
            const img = section.querySelectorAll('img')
            const nodes = items.length;
            const nodes2 = items2.length;
            const nodes3 = stars.length;
            const button = section.querySelectorAll('button');
            const listas = section.querySelector('.listas');
            const svgAll = section.querySelectorAll('svg');
            const buttons = button.length;
            const svg = svgAll.length;
            const image = img.length;
            
            if (svg !== 0) {
                gsap.from(svgAll, {delay:2, stagger:0.2, x:-280, opacity:0, duration: 0.4, ease: "none"});
            }
            if (listas !== null) {
                gsap.from(listas, {delay:2, y:180, opacity:0, duration: 0.5, ease: "none"});
            }
            if (buttons !== 0) {
                gsap.from(button, {delay:3, opacity:0, duration: 0.5, scale:.2, ease: "elastic"});
            };
            if (nodes !== 0) {
                gsap.from(items, {delay:0.5, stagger:0.5, opacity:0, duration: 2, y:-30, ease: "back"});
            };
            if (nodes3 !== 0) {
                gsap.from(stars, {delay:2, stagger:0.5, opacity:0, scale:2, duration: 2, ease: "back"});
            };
            if (nodes2 !== 0) {
                gsap.from(items2, {delay:0.9, stagger:0.5, opacity:0, duration: 1.5, scale:2, ease: "bounce"});
            };
            if (image !== 0) {
                gsap.from(img, {delay:.5, duration: 2, opacity: 0, ease:Linear.easeNone});
                gsap.from(img, {duration: 3, rotation:"+=360", ease:Linear.easeNone, repeat:-1});
            }
        }
    })
</script>