jQuery(document).ready(function () {
    document.getElementById('open-menu').addEventListener("click", function () {
        jQuery('#mobile-nav-items').toggleClass('d-none');
    });
    jQuery('.mobile-nav-items .menu-item-has-children .sub-menu').addClass('d-none');
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
            e.preventDefault();

            document.querySelector(this.getAttribute('href')).scrollIntoView({
                behavior: 'smooth'
            });
        });
    });
    $( ".mobile-nav-items ul li a" ).on( "click", function() {
        jQuery('#mobile-nav-items').addClass('d-none');
      } );
    
    jQuery('.icon-wrapper').on('click', function (){
        jQuery('.box-details').toggleClass('active');
    });

    var swiper = new Swiper(".emp-swiper", {
        slidesPerView: 1,
        pagination: {
            el: ".swiper-pagination",
            dynamicBullets: true,
        },
        breakpoints: {
            
        }
    });
    console.log('scroll')
    jQuery(window).scroll(function() {
        var scroll = $(window).scrollTop();
        console.log('scroll', scroll)
        if (scroll <= 500) { // change this 500 by your own need
            $(".header").removeClass("lightHeader");
        } else {
             $(".header").addClass("lightHeader");
        }
    });

    document.addEventListener( 'wpcf7mailsent', function( event ) {
        location = '/thank-you';
    }, false );
});


