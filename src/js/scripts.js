(function( root, $, undefined ) {
	'use strict';

	$(function () {
		var $newsletter = $('#chamadaAssine');
			$newsletter.mouseenter(function() {
				$(this).animate({
					opacity: 0
				},
					500, function() {
					$(this).addClass('passouOmouse');
				});
			});
	});

} ( this, jQuery ));
