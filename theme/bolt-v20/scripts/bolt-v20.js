jQuery(function($) {
    
    // hiding the mobile navigation
    $('.main-nav').removeClass('expanded');
    
    // and toggling it again with a button
    $('.menu-toggle').click(function() {
        $('.main-nav').toggleClass('expanded');
        $(this).toggleClass('active');
    });
    

    $(window).unbind("scroll").scroll(function () {
        $('header').css('backgroundPosition', '0px ' + (document.documentElement.scrollTop / 2) + 'px');
    });

   
    if($(window).width() > 801) { // ONLY LARGE-UP 
        
       // $(".main-nav").sticky({
       //    topSpacing:0,
       //     center:true
       // });
       // TODO : couldn't get it to work with negative margins on the main-nav
        
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


