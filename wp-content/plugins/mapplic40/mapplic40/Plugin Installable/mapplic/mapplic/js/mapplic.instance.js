jQuery(document).ready(function($) {
	var i = 1;

	while (window['mapplic' + i] !== undefined) {
		var params = window['mapplic' + i];
		var selector = '#mapplic' + i;
		ajaxurl = params.ajaxurl;

		$(selector).mapplic({
			'id': params.id,
			'height': params.height,
			'landmark': params.landmark
		});

		i++;
	}
});