$(document).foundation();

$(document).ready(function() {

	$(".services > div p").dotdotdot({
		after: 'span.more',
		watch: true
	});

});

$(document)
.on('open.fndtn.offcanvas', '[data-offcanvas]', function() {
  $('.burger').addClass('burger-animate');
})
.on('close.fndtn.offcanvas', '[data-offcanvas]', function() {
  $('.burger').removeClass('burger-animate');
});


$('.grid figure').click(function (event) {
	$(this).find('article').slideDown('slow');
});
