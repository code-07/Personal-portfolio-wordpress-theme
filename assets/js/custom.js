(function($) {

    /*==================================
     Owlcarosel (Testimonial slider) 
    ====================================*/

    $(document).ready(function () {

        $('.owl-carousel').owlCarousel({
            loop: true,
            nav: true,
            margin: 10,
            autoplay: true,
            autoplayTimeout: 5000,
            rewind: true,
            responsiveClass: true,
            responsive: {
                0: {
                    items: 1,
                    nav: true
                },
                600: {
                    items: 1,
                    nav: true
                },
                1000: {
                    items: 1,
                    nav: true,
                    loop: false
                }
            }
        })
    });
    $(document).ready(function(){
	/*==================================
     Nacigation Scroll
    ====================================*/
     $(window).on('scroll', function () {
        var scroll = $(window).scrollTop();
        if (scroll > 15) {
            $(".navbar-default").addClass("add-color");
        } else {
            $(".navbar-default").removeClass("add-color");
        }
    });
    /*==================================
     Scroll Up
    ====================================*/
	 $('.go-up').hide();
    $(window).scroll(function(){
        var ourScroll = $(window).scrollTop()>300;
        if (ourScroll) {
            $('.go-up').fadeIn(500);
        } else {
            $('.go-up').fadeOut(500);
        }
    });
    $('.go-up').click(function(){
        $('body, html').animate({scrollTop:0}, 500);
    });

	/*==================================
     Navigation Change
	====================================*/
    $('.navbar-nav li').click(function(){
        $(this).addClass('active-item').siblings().removeClass('active-item');
    });
    $('.navbar-nav li').hover(function(){
        $(this).addClass('active-item').siblings().removeClass('active-item');
    });

    /*==================================
    //Isotop 
	====================================*/
	$(window).load(function(){
        var $container = $('.portfolioContainer');
        $container.isotope({
            filter: '*',
            animationOptions: {
                duration: 750,
                easing: 'linear',
                queue: false
            }
        });
     
        $('.portfolioFilter a').click(function(){
            $('.portfolioFilter .current').removeClass('current');
            $(this).addClass('current');
     
            var selector = $(this).attr('data-filter');
            $container.isotope({
                filter: selector,
                animationOptions: {
                    duration: 750,
                    easing: 'linear',
                    queue: false
                }
             });
             return false;
        }); 
    });

/* --------------------------------------------------
 ## Navigation
-------------------------------------------------- */
    function onepageNav() {
        var $body     = $(document.body),
            navHeight = $('.navbar').outerHeight(true);
        $body.scrollspy({
            target: '.navbar',
            offset: navHeight
        });
        $('.navbar-menu a, .slider-icon a, .slider-button a[href*="#"]:not([href="#"]), .anchor-link').click(function() {
            $('.navbar-menu').removeClass('in');
            if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
                var target = $(this.hash);
                target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
                if (target.length) {
                    $('html,body').animate({
                    scrollTop: target.offset().top -navHeight+21
                    }, 1000);
                    return false;
                }
            }
        });
    }

    onepageNav();

    /*==================================
     Progress Bar
    ====================================*/
    $(document).ready(function() {
      $('.progress .progress-bar').css("width",
                function() {
                    return $(this).attr("aria-valuenow") + "%";
                }
        )
    });

    /*==================================
     Counter
    ====================================*/
    $('.counter').each(function() {
      var $this = $(this),
          countTo = $this.attr('data-count');
      
      $({ countNum: $this.text()}).animate({
        countNum: countTo
      },
      {
        duration: 2000,
        easing:'linear',
        step: function() {
          $this.text(Math.floor(this.countNum));
        },
        complete: function() {
          $this.text(this.countNum);
          //alert('finished');
        }
      });  
    });
    /*==================================
    //WOW JS
    ====================================*/
    new WOW().init();

    
});
})(jQuery);