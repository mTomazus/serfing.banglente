const track = document.querySelector('.carousel-track');
const slides = Array.from(track.children);

const nextButton = document.querySelector('.b-right');
const prevButton = document.querySelector('.b-left');

const slideWidth = slides[0].getBoundingClientRect().width;

//-------------------------------------
//--- arrange slides one to another ---
//-------------------------------------

const setCarouselSlidePosition = (slide, index) => {
    slide.style.left = slideWidth * index + 'px';
}
slides.forEach(setCarouselSlidePosition);

//--------------------------------
//--- move slides with buttons ---
//--------------------------------

const moveToSlide = (track, currentSlide, targetSlide) => {
    track.style.transform = 'translateX(-' + targetSlide.style.left + ')';
    currentSlide.classList.remove('current-slide');
    targetSlide.classList.add('current-slide');
}

//----------------------------
//--- hide or show buttons ---
//----------------------------

const hideShowArrows = (slides, prevButton, nextButton, targetIndex) => {
    if (targetIndex === 0) {
        prevButton.classList.add('is-hidden');
        nextButton.classList.remove('is-hidden');
    } else if ( targetIndex === slides.length -1) {
        prevButton.classList.remove('is-hidden');
        nextButton.classList.add('is-hidden');
    }else {
        prevButton.classList.remove('is-hidden');
        nextButton.classList.remove('is-hidden');
    }  
}

//----------------------------
//--- prev button listener ---
//----------------------------

prevButton.addEventListener('click', e => {

    const currentSlide = track.querySelector('.current-slide');
    const prevSlide = currentSlide.previousElementSibling;

    const targetIndex = slides.findIndex(slide => slide === prevSlide);

    moveToSlide(track,currentSlide,prevSlide);
    
    hideShowArrows(slides, prevButton, nextButton, targetIndex)
})

//----------------------------
//--- next button listener ---
//----------------------------

nextButton.addEventListener('click', e => {

    const currentSlide = track.querySelector('.current-slide');
    const nextSlide = currentSlide.nextElementSibling;
    
    const targetIndex = slides.findIndex(slide => slide === nextSlide);
    
    moveToSlide(track,currentSlide,nextSlide);
    
    hideShowArrows(slides, prevButton, nextButton, targetIndex)
})