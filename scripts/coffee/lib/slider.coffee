# define ['domReady'], (domReady) ->

slider = document.querySelector '.slider'

slides = document.querySelectorAll '.slide'

# slider is in the first slide
sliderLeft = 0

# slider width is the slide count muliply by this value
slideWidth = 850

for i in [0...slides.length]

	slides[i].style.left = -i * 850 + 'px'

$('.next').click ->

	sliderLeft += slideWidth

	slider.style.left = sliderLeft + 'px'

	if sliderLeft > 0

		$('.prev').css('opacity', 1)


$('.prev').click ->

	sliderLeft -= slideWidth

	slider.style.left = sliderLeft + 'px'

	if sliderLeft is 0

		$(this).css('opacity', 0)

$('.expander').click ->

	$('.expander').css('height', '40px')

	$(this).css('height', '200px')

$('.nothing').click ->

	$('.expander').css('height', '40px')



