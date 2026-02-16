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
});