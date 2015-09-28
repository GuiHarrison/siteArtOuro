(function( root, $, undefined ) {
	"use strict";

	$(function () {
		var $lateral = $(".lateral"),
				$conteudo = $("section");

		function abreLateral() {
			$lateral.height($conteudo.height());
		}
		setTimeout(abreLateral, 200);

	});

} ( this, jQuery ));
