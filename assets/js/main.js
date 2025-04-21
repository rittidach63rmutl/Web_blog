$(document).ready(function(){
  $('.owl-carousel').owlCarousel({
    loop:true,responsive:{
      0:{
          items:1,
          nav:true
      },
      600:{
          items:3,
          nav:false
      },
      1000:{
          items:3,
          nav:true,
          loop:false
      }
  }
  });
});


$('.to-top').click(function(){
   $('html,body').animate({scrollTop:'0px'},800);
})


