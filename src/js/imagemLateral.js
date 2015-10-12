(function( root, $, undefined ) {
	'use strict';

	$(function () {
		var $lateral = $('.lateral'),
			$lateralM = $('.lateralMenor'),
			$conteudo = $('section');

		function abreLateral() {
			$lateral.height($conteudo.height());
		}
		setTimeout(abreLateral, 200);

		// $lateralM.css('right', '75%');

		// function swipe () {
		// 	$lateralM.animate({ 'right' : '0' }, 1000);
		// }
		// setTimeout(swipe, 1000);

	});

} ( this, jQuery ));
