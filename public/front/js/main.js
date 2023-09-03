//const nextIcon = '<img src="/back.png" class="arrow" alt="ff">';
//const prevIcon = '<img src="../imgs/icons8-forward-48.png" class="arrow" alt="dd">';
$(document).ready(function () {
    $('.owl-carousel.my-message').owlCarousel({
        items: 1,
        margin: 10,
        dots: true,
        rtl: true,
        responsiveClass: true,
        nav: false,
        navText: [$('.am-next.my-message'), $('.am-prev.my-message')],
        responsive: {
            0: {
                items: 1,
                nav: false
            },
            600: {
                items: 1,

            },
            1000: {
                items: 1,
                nav: false,
                loop: false
            }
        }

    });
});

$(document).ready(function () {
    $('.owl-carousel.all_success_partners').owlCarousel({
        items: 2,
        margin: 10,
        dots: true,
        rtl: true,
        responsiveClass: true,
        nav: false,
        navText: [$('.am-next.all_success_partners'), $('.am-prev.all_success_partners')],
        responsive: {
            0: {
                items: 1,
                nav: false
            },
            600: {
                items: 2,

            },
            1000: {
                items: 2,
                nav: false,
                loop: false
            }
        }

    });
});

$(document).ready(function () {
    $('.owl-carousel.moahlat').owlCarousel({
        items: 3,
        margin: 10,
        dots: true,
        rtl: true,
        responsiveClass: true,
        nav: false,
        navText: [$('.am-next.moahlat'), $('.am-prev.moahlat')],
        responsive: {
            0: {
                items: 1,
                nav: false
            },
            600: {
                items: 2,

            },
            1000: {
                items: 3,
                nav: false,
                loop: false
            }
        }

    });
});

$(document).ready(function () {
    $('.owl-carousel.experr').owlCarousel({
        items: 3,
        margin: 10,
        dots: true,
        rtl: true,
        responsiveClass: true,
        nav: false,
        navText: [$('.am-next.experr'), $('.am-prev.experr')],
        responsive: {
            0: {
                items: 1,
                nav: false
            },
            600: {
                items: 2,

            },
            1000: {
                items: 3,
                nav: false,
                loop: false
            }
        }

    });
});
$(document).ready(function () {
    $('.owl-carousel.success_partners').owlCarousel({
        items: 3,
        margin: 10,
        dots: true,
        rtl: true,
        responsiveClass: true,
        nav: true,
        navText: [$('.am-next.success_partners'), $('.am-prev.success_partners')],
        responsive: {
            0: {
                items: 1,
                nav: false
            },
            600: {
                items: 2,

            },
            1000: {
                items: 3,
                nav: true,
                loop: false
            }
        }

    });
});

$(document).ready(function () {
    $('.owl-carousel.courses').owlCarousel({
        items: 1,
        margin: 10,
        dots: true,
        rtl: true,
        responsiveClass: true,
        nav: true,
        navText: [$('.am-next.courses'), $('.am-prev.courses')],
        responsive: {
            0: {
                items: 1,
                nav: false
            },
            600: {
                items: 1,

            },
            1000: {
                items: 1,
                nav: true,
                loop: false
            }
        }

    });
});

$(document).ready(function () {
    $('.owl-carousel.bags').owlCarousel({
        items: 2,
        margin: 10,
        dots: true,
        rtl: true,
        responsiveClass: true,
        nav: true,
        navText: [$('.am-next.bags'), $('.am-prev.bags')],
        responsive: {
            0: {
                items: 1,
                nav: false
            },
            600: {
                items: 2,

            },
            1000: {
                items: 2,
                nav: true,
                loop: false
            }
        }

    });
});

$(document).ready(function () {
    $('.owl-carousel.consulting').owlCarousel({
        items: 3,
        margin: 10,
        dots: true,
        rtl: true,
        responsiveClass: true,
        nav: true,
        navText: [$('.am-next.consulting'), $('.am-prev.consulting')],
        responsive: {
            0: {
                items: 1,
                nav: false
            },
            600: {
                items: 3,

            },
            1000: {
                items: 3,
                nav: true,
                loop: false
            }
        }

    });
});

document.addEventListener("DOMContentLoaded", function (event) {
    var scrollpos = localStorage.getItem("scrollpos");
    if (scrollpos) window.scrollTo(0, scrollpos);
  });

  window.onscroll = function (e) {
    localStorage.setItem("scrollpos", window.scrollY);
  };