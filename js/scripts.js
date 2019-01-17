// $ = jQuery.noConflict();
// ------------------------------

// (function($){

// })(jQuery);
// --------------------------------

// jQuery(document).ready(function($){
	
// })
// ---------------------------------

$ = jQuery.noConflict();

$(function() {
	$('.mobile-menu a').on('click', function(){
		$('nav.site-nav').toggle('slow');
	});

	var breakpoint = 768;
	$(window).resize(function(){
		if($(document).width() >= breakpoint) {
			$('nav.site-nav').show()
		} else {
			$('nav.site-nav').hide()
		}
	});
});