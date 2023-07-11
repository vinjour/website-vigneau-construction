$(document).ready(function(){

    $('#myCarousel').carousel({interval: 2000, pause: 'hover'});

    $('.item1').click(function(){
        $('#myCarousel').carousel(0);
    });
    $('.item2').click(function(){
        $('#myCarousel').carousel(1);
    });
    $('.item3').click(function(){
        $('#myCarousel').carousel(2);
    });
    $('.item4').click(function(){
        $('#myCarousel').carousel(3);
    });

    $('.carousel-control-prev').click(function(){
        $('#myCarousel').carousel('prev');
    });
    $('.carousel-control-next').click(function(){
        $('#myCarousel').carousel('next');
    });
});