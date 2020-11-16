$(document).ready(function(){
    $('#main-menu li a').on('click', function(){
        $('li a.activo').removeClass('activo');
        $(this).addClass('activo');
    });
});


$('.sliderTrabajos').owlCarousel({
    loop:false,
    nav:true,
    margin:50,
    merge:true,
    autoWidth:true,
    autoplay:false,
    autoplayTimeout:5000,
    autoplayHoverPause:false,
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

$('.trabajosMovil').owlCarousel({
    loop:false,
    margin:10,
    nav:true,
    autoplay:false,
    autoplayTimeout:5000,
    autoplayHoverPause:false,
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
