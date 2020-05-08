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
    
    if (scroll > 200) {
        $('.navbar').addClass('sticky');
    } else {
        $('.navbar').removeClass('sticky');        
    }
});

$('#bars').click(function(e) {
    if ($('.nav-item').css('display') == 'none') {
        $('.nav-item').css('display', 'block');
    } else {
        $('.nav-item').css('display', 'none');
    }
});

const _self = $;
$('#contact-us').validate({
	submitHandler: function (form) {
		$.post('email.php', {
			names: form[0].value,
			surname: form[1].value,
			mobile: form[2].value,
			email: form[3].value,
			messages: form[4].value,
		}).then(function(data){
			if (data == true) {
				alert('Your message has been sent!');
			}
		})
	}
});