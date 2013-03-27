
/* INICIALIZAR CAROUSEL */

$('.carousel').carousel({
  interval: 6000
})

$(document).ready(function($){
		crono();
		$('.carousel').carousel('cycle');  

});

/* FUNCIÓN SCROLL HEADER */

$('.menuscroll').css('opacity','1');
$(window).scroll(function() {

        if ($(this).scrollTop() >= 323) {
	      $('.menuscroll').stop().animate({top: '239'});

        } else {
        $('.menuscroll').stop().animate({top: '139'});
  
        }
    });
