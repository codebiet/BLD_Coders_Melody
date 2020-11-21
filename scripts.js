$(document).ready(function(){
      $('#mycarousel').carousel({interval:2000});
      $('#carouselButton').click(function(){
        if($('#carouselButton').children('span').hasClass('fa-pause')){
             $('#mycarousel').carousel('pause');
             $('#carouselButton').Children('span').removeClass('fa-pause'); 
             $('#carouselButton').Children('span').addClass('fa-play'); 
                }
        else if($('#carouselButton').children('span').hasClass('fa-play');)
                {
                   $('#mycarousel').carousel('cycle');
                   $('#carouselButton').Children('span').removeClass('fa-play'); 
                   $('#carouselButton').Children('span').addClass('fa-pause'); 
                }
              });
           });
    