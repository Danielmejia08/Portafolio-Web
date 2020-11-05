$(document).ready(function(){
    $('#main-menu li a').on('click', function(){
        $('li a.activo').removeClass('activo');
        $(this).addClass('activo');
    });
});

$('.owl-carousel').owlCarousel({
    loop:false,
    margin:10,
    nav:true,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:3
        },
        1000:{
            items:5
        }
    }
})
