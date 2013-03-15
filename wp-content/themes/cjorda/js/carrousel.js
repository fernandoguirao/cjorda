$('.carousel').carousel({
  interval: 6000
})

	$(".nav-carousel > div").click(function(){
	
	var item = $(this).attr('class').replace("thumb car-", "");
	var itemnum = parseInt(item) - 1;
	$('.carousel').carousel(itemnum);	
	return false;
		
	});