$(document).ready(function(){
    $('.slider-for').slick({
        dots: false,
        infinite: true,
        speed: 500,
        fade: true,
        cssEase: 'linear',
        autoplay:true,
        arrows:false
    });
    $('.slider-nav').slick({
        asNavFor: '.slider-for',
        dots: false,
        infinite: true,
        focusOnSelect: true,
        autoplay:true,
        arrows:false,
        slidesToShow: 2,
        variableWidth: true
    });
  });