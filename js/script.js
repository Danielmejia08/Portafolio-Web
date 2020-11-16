$(document).ready(function(){
    $('#main-menu li a').on('click', function(){
        $('li a.activo').removeClass('activo');
        $(this).addClass('activo');
    });
});


$('.sliderTrabajos').owlCarousel({
    loop:true,
    nav:true,
    margin:50,
    autoWidth:true,
    autoplay:true,
    autoplayTimeout:1000,
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
});


$('.publicidadSlider').owlCarousel({
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
});
