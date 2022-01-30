$(document).ready(function(){
    $('#menubtn').bind('click',function(){
        $(".menu ul").slideToggle(1000);
    });

    $(".img-slider").slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: true,
        fade: true,
        dots: true
    });
});