(function($) {
    
    $( window ).on('load', function() {
    $('.preloader__circle').delay(400).fadeOut(); // efekt zanikania animowanej grafiki
    $('.preloader').delay(700).fadeOut('slow'); // efekt zanikania warstwy zakrywającej stronę
    $('body').delay(700).css({'overflow':'visible'}); // dopóki nasz div#preloader jest widoczny nie ma możliwości przewijania strony 
    });
    
    const $nav = $('.nav');
    const $navOffsetY = $nav.offset().top;
    const $innerAnchors = $('a[href^="#"]');
    
    $(document).ready(function() {
     
        let stickyNav = function() {

            let $scrolled = $(window).scrollTop();
            if ($scrolled > $navOffsetY) {
                $nav.addClass('nav--sticky');
                //document.body.style.paddingTop = $nav.height() + 'px';
            } else {
                $nav.removeClass('nav--sticky');
                //document.body.style.paddingTop = 0;
            }
        }
    stickyNav();
        
    if ($innerAnchors.length > 0) {
        $innerAnchors.on('click', function(e) {
            e.preventDefault();
            const href= $(this).attr('href');
            const $targetElement = $(href); 
            const targetToScroll = $targetElement.offset().top - $nav.height();
            $('html, body').animate({
                scrollTop:targetToScroll
                }, 1000);
            });
        }
        
        $(window).scroll(function() {
            stickyNav();
            $('.nav-mobile').removeClass('nav-mobile--active');
            $('.navbar-btn').removeClass('navbar-btn--clicked');

        });
        
        $('.navbar-btn').on('click', function() {
            $('.navbar-btn').toggleClass('navbar-btn--clicked');
            $('.nav-mobile').toggleClass('nav-mobile--active');
          
        });
        
        $(window).on('resize', function() {
                if($(document).width()>991) {
                    $('.nav-mobile').removeClass('nav-mobile--active');
                    $('.navbar__btn').removeClass('navbar-btn--clicked');
                }
        });
        
        var loc = window.location.pathname.split('/');
        var href = loc[loc.length-1];
        $('.navbar__link').each(function() {
            $(this).toggleClass('navbar__link--active', $(this).attr('href') === href);
        });
    
    });
})(jQuery);
$(document).ready(() => {
	$('.jobs__more').on('click', event => {
		$(event.currentTarget).parent().find('li.hid').slideToggle();
		if ($(event.currentTarget).find('a').text() == "Więcej ofert") {
			/*alert($(event.currentTarget).text());*/
			$(event.currentTarget).find('a').text("Zwiń");
		} else if  ($(event.currentTarget).find('a').text() == "Zwiń") {
			$(event.currentTarget).find('a').text("Więcej ofert");
		}
	});	
});