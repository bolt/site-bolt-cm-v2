jQuery(function($) {
    
    // hiding the mobile navigation
    $('.main-nav').removeClass('expanded');
    
    // and toggling it again with a button
    $('.menu-toggle').click(function() {
        $('.main-nav').toggleClass('expanded');
        $(this).toggleClass('active');
    });
    

    $(window).scroll(function () {
        $('header').css('backgroundPosition', '0px ' + (document.documentElement.scrollTop / 2) + 'px');
    });

   
    if($(window).width() > 801) { // ONLY LARGE-UP 
        
        $(window).scroll(function () { 
            var nav = $(".main-nav");
            var navwidth = nav.width();
            var halfwidth = Math.round(navwidth/2);
    
            // make main-nav sticky when scrolled lower then header height
            if (document.documentElement.scrollTop > ($('header').height()-44)){
                nav.addClass('is-sticky');
                nav.css({ 'margin-left':'-'+halfwidth+'px' });
            };
            // make main-nav UNsticky when scrolled up again
            if (document.documentElement.scrollTop <= ($('header').height()-44)){
                nav.removeClass('is-sticky');
                nav.css({'margin-left':'auto'})
            };
        });     
    }
    
    
    
    //move aside blok on homepage, mobile only, to bottom
    /*
    if($(window).width() < 641) {
        $('.body-home aside').prependTo("#asidemoved");
    }
    //*/
    
    //make li's clickable
    /*
    $('.clickable').click(function (){
      location.href = $(this).find('a').attr('href');
    });
    //*/
    

    
});


