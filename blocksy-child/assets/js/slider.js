window.addEventListener('DOMContentLoaded', function(){  
    const hero_swiper = new Swiper(".hero-slider", {
        slidesPerView: 1, 
        spaceBetween: 4,   
        // speed: 700,    
        // keyboard: {
        //     enabled: true,
        //     pageUpDown: true,
        // },       
        // autoplay: {
        //     delay: 3000,            
        //     waitForTransition: true,
        // },                  
      
    });

    // Слайдер в блоке Gallery

    const gallery_slider = new Swiper('.gallery-slider', {
        // Optional parameters
        direction: 'horizontal',      
        slidesPerView: 'auto',
        spaceBetween: 9, 
    
        // Navigation arrows
        navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
        },  
        
        breakpoints: {
        768: {
            spaceBetween: 17, 
        }
        }
    });   
});