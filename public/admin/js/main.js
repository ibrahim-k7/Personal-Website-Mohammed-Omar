//const nextIcon = '<img src="/back.png" class="arrow" alt="ff">';
//const prevIcon = '<img src="../imgs/icons8-forward-48.png" class="arrow" alt="dd">';

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

var myModal = new bootstrap.Modal(document.getElementById('confirmationDelete'), {
   
});


