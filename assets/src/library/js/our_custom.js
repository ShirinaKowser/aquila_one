$(document).ready(function() {

    // banner slider 
    // slider 02 js
    $('.slider2').slick({
        infinite: true,
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: true,
        dots: false,
        autoplay: true,
        speed: 1000,
        fade: true,
        cssEase: 'linear',
        autoplaySpeed: 500,
        prevArrow: '.arrow_left',
        nextArrow: '.arrow_right',
    });

    // slider 03 js
    $('.slider3').slick({
        infinite: true,
        slidesToShow: 4,
        slidesToScroll: 1,
        arrows: true,
        dots: false,
        autoplay: true,
        speed: 1000,
    });

    // team slider 
    $('.team-slider').slick({
        infinite: true,
        slidesToShow: 4,
        slidesToScroll: 1,
        dots: true,
        arrows: false,
        autoplay: true,

    });

    $("#owl-demo").owlCarousel({
        navigation: true
    });

    //  slider4 
    $('#slider4').owlCarousel({
        loop: true,
        margin: 10,
        nav: false,
        arrows: true,
        autoplay: true,
        responsive: {
            0: {
                items: 1,

            },
            600: {
                items: 2,

            },
            1000: {
                items: 3,

            }
        }
    })

    //  slider5
    $('#slider5').owlCarousel({
            loop: true,
            margin: 10,
            nav: false,
            arrows: true,
            autoplay: true,
            responsive: {
                0: {
                    items: 1,

                },
                600: {
                    items: 2,

                },
                1000: {
                    items: 4,

                }

            }
        })
        // video popup
    $('.venobox').venobox();
});