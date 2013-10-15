$(document).ready(function(){

	$(".fade").each(function(index) {
	    $(this).delay(700).delay(100*index).fadeTo(1000,1);
	});
	
 	$(".box").hover(
	  	function() { $(".menu-box",this).stop().fadeIn(200)},
	  	function() { $(".menu-box",this).stop().fadeOut(200)} 	
	 	);
});
