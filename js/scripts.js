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

	function contentBoxHeight() {
		var images = $('.box-image')
		var imageHeight = images[0].height;
		var boxes = $('.content-box');
		$(boxes).each(function(i, box) {
			$(box).css({
				'height': imageHeight + 'px'
			})
		})
	}

	contentBoxHeight()

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
		contentBoxHeight()
	});

});