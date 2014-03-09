jQuery(document).ready(function($) {
	$('.flexslider').flexslider({
    animation: "slide",
    controlNav: "thumbnails"	
	});

	if ($("html").hasClass("no-touch")) {
    $('#first').parallax("50%", 0, 0.1, true);
    $('#second').parallax("50%", 1200, 0.1, true);
    $('#third').parallax("50%", 3130, 0.1, true);
    $('#fourth').parallax("50%", 4060, 0.1, true);
    $('#fifth').parallax("50%", 5000, 0.1, true);

    var deck = new $.scrolldeck({
      slides: '.slide',
      buttons: '#slide-nav li a',
      duration: 900,
      easing: 'easeInOutExpo'
    });
    //position home captions
    function posCaptions() {
      $windowHeight = $(window).height();
      $caption = $('.home-caption').outerHeight();
      $('.home-caption').css('marginTop', ($windowHeight/2 + 135));
    }
    posCaptions();
    $(window).resize(function() {
      posCaptions();
    });   
    }
});
