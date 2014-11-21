jQuery(function($) {
    
    // HIDING MOBILE NAVIGATION
    $('.main-nav').removeClass('expanded');
    // and toggling it again with a button
    $('.menu-toggle').click(function() {
        $('.main-nav').toggleClass('expanded');
        $(this).toggleClass('active');
    });
    
   
    // MAKE TOPIMAGE SCROLL SLOWER FOR PARALLAX EFFECT
    $(window).scroll(function () {
        $('header').css('backgroundPosition', '0px ' + (posTop() / 2) + 'px');
    });
    
    
    //initialize Cycle 2 slideshow.
    $('.bolt-slideshow').cycle();
    
    if($(window).width() < 801) { // ONLY MEDIUM-DOWN
    
        $('.bolt-slideshow').on('cycle-after', function(event, opts) {

            //$('.slider .pager').css('margin-left', '0px');
            var offset = $('.cycle-pager-active').offset().left - 30;
            var margin =  $('.slider .pager').css('margin-left').replace(/[^-\d\.]/g, '');
            var offsetdef = -margin + offset;
            //console.log('A:', offset, 'margin:',margin, 'def', offsetdef);
            $('.slider .pager').animate({'margin-left': '-' + offsetdef + 'px'});

            
        });
    
    
    }
        
   
    if($(window).width() > 800) { // ONLY LARGE-UP 
        
        // STICKY MAIN-NAV
        $(window).scroll(function () { 
            var nav = $(".main-nav");
            var navwidth = nav.width();
            var halfwidth = Math.round(navwidth/2);
    
            // make main-nav sticky when scrolled lower then header height
            if (posTop() > ($('header').height()-44)){
                nav.addClass('is-sticky');
                nav.css({ 'margin-left':'-'+halfwidth+'px' });
            };
            // make main-nav UNsticky when scrolled up again
            if (posTop() <= ($('header').height()-44)){
                nav.removeClass('is-sticky');
                nav.css({'margin-left':'auto'})
            };
        });     
    }
    
    // FIX FOR SCROLLPOS IN ALL BROWSERS
    function posTop() {
        return typeof window.pageYOffset != 'undefined' ? window.pageYOffset: document.documentElement.scrollTop? document.documentElement.scrollTop: document.body.scrollTop? document.body.scrollTop:0;
    }    
    

    
});


