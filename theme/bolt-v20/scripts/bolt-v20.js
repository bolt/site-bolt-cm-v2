jQuery(function($) {
    
    // hiding the mobile navigation
    $('.main-nav').removeClass('expanded');
    
    // and toggling it again with a button
    $('.menu-toggle').click(function() {
        $('.main-nav').toggleClass('expanded');
        $(this).toggleClass('active');
    });
    
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


