// AOS.init({ duration: 1500 });

document.querySelectorAll('a[href="#form"], a[href="#gallery"], a[href="#why-us"], a[href="#pools"], a[href="#process"], a[href="#faq"]').forEach(function (anchor) {
    anchor.addEventListener('click', function (e) {
        e.preventDefault();

        document.querySelector(this.getAttribute('href')).scrollIntoView({
            behavior: 'smooth'
        });
    });
});

$(window).on('scroll', () => {
    if ($(this).scrollTop() >= 121) {
        $('.navbar').css('background', '#ffffff');
        $('.navbar-toggler').css('color', '#61666C');
        $('.callIcon').css('color', '#61666C');
        $('.logo-before-scroll').css('display', 'none');
        $('.logo-after-scroll').css('display', 'block');
    } else {
        $('.navbar').css('background', 'rgba(0,0,0,0)');
        $('.navbar-toggler').css('color', '#21262D');
        $('.callIcon').css('color', '#21262D');
        $('.logo-before-scroll').css('display', 'block');
        $('.logo-after-scroll').css('display', 'none');
    }

    if ($(this).scrollTop() >= 600) {
        $('#return-to-top').fadeIn(300);
    } else {
        $('#return-to-top').fadeOut(300);
    }
});

$('#return-to-top').on('click', () => {
    $('body,html').animate({
        scrollTop: 0
    }, 500);
});

$(() => {
    $('.poster-slider').slick({
        slidesToShow: 2,
        slidesToScroll: 1,
        speed: 3000,
        autoplay: true,
        autoplaySpeed: 0,
        cssEase: 'linear',
        arrows: false
    });

    $('.gallery-slider').slick({
        slidesToShow: 4,
        prevArrow: "<img class='a-left control-c prev slick-prev' src='assets/images/icons/slick-prev.png'>",
        nextArrow: "<img class='a-right control-c next slick-next' src='assets/images/icons/slick-next.png'>",
        responsive: [
            {
                breakpoint: 1100,
                settings: {
                    slidesToShow: 2,
                }
            },
            {
                breakpoint: 540,
                settings: {
                    slidesToShow: 1,
                    centerMode: true,
                    centerPadding: "30px",
                    arrows: false,
                }
            }
        ]
    });

    $('.processes').slick({
        slidesToShow: 6,
        arrows: false,
        slidesToScroll: 1,
        responsive: [
            {
                breakpoint: 1560,
                settings: {
                    slidesToShow: 3,
                    autoplay: true,
                }
            },
            {
                breakpoint: 1100,
                settings: {
                    slidesToShow: 1,
                    autoplay: true,
                }
            },
            {
                breakpoint: 540,
                settings: {
                    slidesToShow: 1,
                    arrows: true,
                    nextArrow: "<img class='a-right control-c next slick-next' src='assets/images/icons/slick-next.png'>",
                }
            }
        ]
    });

    $('.faq-slider').slick({
        slidesToShow: 4,
        arrows: false,
        slidesToScroll: 1,
        responsive: [
            {
                breakpoint: 1560,
                settings: {
                    slidesToShow: 3,
                    dots: true,
                }
            },
            {
                breakpoint: 1100,
                settings: {
                    slidesToShow: 2,
                    dots: true,
                }
            },
            {
                breakpoint: 540,
                settings: {
                    slidesToShow: 1,
                    dots: true,
                    arrows: true,
                    prevArrow: "<img class='a-left control-c prev slick-prev' src='assets/images/icons/slick-prev-sm.png'>",
                    nextArrow: "<img class='a-right control-c next slick-next' src='assets/images/icons/slick-next-sm.png'>",
                }
            }
        ]
    });
})