$(document).ready(function() {

    
    /*--sticky--nav--*/
    
       $('.js--homepage2').waypoint(function(direction){
           if (direction ==  "down"){
               $('nav').addClass('sticky');
           } else{
               $('nav').removeClass('sticky');
           }
       });

    /*--scroll--navigation--*/
    $('.js--scroll-homepage3').click(function(){
        $('html , body').animate({scrollTop: $('.js--section-homepage3').offset().top}, 1000)
    });
    
});