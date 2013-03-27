<<<<<<< HEAD
/* INICIALIZAR CAROUSEL */

$('.carousel').carousel({  
  interval: 2000 // in milliseconds  
})  
=======
$('.carousel').carousel({
  interval: 6000
})
>>>>>>> fd773705eb32127d7b24f8b15d7b9aa8c3f39b4a
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
