// WOW
new WOW().init();

// Slick
$('.partner').slick({
    slidesToShow: 4,
    slidesToScroll: 1,
    autoplay: true,
    autoplaySpeed: 4000,
    responsive: [
        {
        breakpoint: 1024,
        settings: {
            slidesToShow: 3,
            slidesToScroll: 3,
            infinite: true,
            dots: true
        }
        },
        {
        breakpoint: 600,
        settings: {
            slidesToShow: 2,
            slidesToScroll: 2
        }
        },
        {
        breakpoint: 480,
        settings: {
            slidesToShow: 1,
            slidesToScroll: 1
        }
        }
    ]
});

// Navbar
$(window).scroll(function(e) {
    const scroll = document.documentElement.scrollTop;
    const about = $('.about').position().top;
    
    if (scroll > (about - 150)) {
        $('.navbar').addClass('sticky');
    } else {
        $('.navbar').removeClass('sticky');        
    }
});