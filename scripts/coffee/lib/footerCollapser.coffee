$('.footer-tab').click ->

	$('.footer').css "bottom", 0

$('.footer-close').click ->

	$('.footer').css "bottom", -290

$('.login-opener').click ->

	$('.footer').css "bottom", 0

	event.stopPropagation()

$('html').click =>

	$('.footer').css "bottom", -290

$('.footer').click (event) =>

	event.stopPropagation()