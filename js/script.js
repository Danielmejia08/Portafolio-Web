$(document).ready(function(){
    $('#main-menu li a').on('click', function(){
        $('li a.activo').removeClass('activo');
        $(this).addClass('activo');
    });
    $('.venobox').venobox(); 
    $('.venobox_musica').venobox({
    framewidth : '25%',                            
    frameheight: '20%',                         
    }); 
    $('.venobox_dental').venobox({
    framewidth : '900px',                            
    frameheight: '700px',     
    });


    $('.venobox_negocio').venobox({
        framewidth : '40%',                            
        frameheight: '40%',     
        });

        $('.venobox_naranja').venobox({
            framewidth : '25%',                            
            frameheight: '20%',     
            });
            $('.venobox_juridico').venobox({
                framewidth : '25%',                            
                frameheight: '20%',     
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

// MDB Lightbox Init
$(function () {
    $("#mdb-lightbox-ui").load("mdb-addons/mdb-lightbox-ui.html");
    });
    