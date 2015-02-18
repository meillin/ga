$(document).foundation();

$(document).ready(function() {

	$(".services > div p").dotdotdot({
		after: 'span.more',
		watch: true
	});

});