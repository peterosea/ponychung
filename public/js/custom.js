$(document).ready(function(){
    $('.slider-for').slick({
        dots: false,
        infinite: true,
        fade: true,
        cssEase: 'linear',
        arrows:false
    });
    $('.slider-nav').slick({
        asNavFor: '.slider-for',
        dots: false,
        infinite: true,
        focusOnSelect: true,
        cssEase: 'linear',
        arrows:false,
        slidesToShow: 2,
        slidesToScroll: 1,
        variableWidth: true,
    });

    $('.mobile_menu').click(function(){
        $(this).toggleClass("_active");
        $('.mobile_nav').toggleClass("_active");
    });
    // $('.main_nav').hover(function(){
    //     $('.submenu_grp').addClass("_active");
    // });
    // $('.submenu_grp').hover(function(){
    //     $(this).toggleClass("_active");
    // });
});