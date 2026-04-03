window.addEventListener('DOMContentLoaded', function(){
    const availableScreenWidth = window.screen.availWidth; 

    /*Fancybox Gallery*/
    Fancybox.bind("[data-fancybox]", {
        hideScrollbar: false,
    });

    /*Inputmask*/

    var selectors = document.querySelectorAll('input[type="tel"].input-form');

    selectors.forEach(function(selector){
    var im = new Inputmask("+7(999)-999-9999");
    im.mask(selector);
    });   
    
    /* Init AOS Animation */
    AOS.init(); 

    jQuery (function($) { 
        // Скролл меню в хедере
        $(window).scroll(function(){
        if(($(this).scrollTop()>=50) && $(this).width()>=768) {
          $('.header').css({
            'background-color':'rgba(255, 255, 255, .9)',
            'border-bottom-color': 'rgba(28, 94, 217, .9)',  
            'transition': 'all .25s linear', 
          });
    
        } else {
          $('.header').css({
            'background-color':'',
            'border-bottom-color': '',    
            'transition': 'all .25s linear',     
          });
        }
      });
    
    });
});