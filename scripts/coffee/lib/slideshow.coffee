slideshowSlides = document.querySelectorAll '.slideshow-slide'

# rightNav = document.querySelector '.slideshow-nav-right'

# leftNav = document.querySelector '.slideshow-nav-left'


slideshowSlidesPositions = []


for slide, i in slideshowSlides

	slide.style.transform = 'translateX(' + (i - Math.floor(slideshowSlides.length / 2)) * -785 + 'px)'

	slideshowSlidesPositions[i] = 785 * (Math.floor(slideshowSlides.length / 2) - i)


leftBorder = slideshowSlidesPositions[i - 1]

rightBorder = slideshowSlidesPositions[0]


$('.slideshow-nav-right').click ->

	for slide, i in slideshowSlides

		slide.style.zIndex = 100

		slideshowSlidesPositions[i] += 785

		if slideshowSlidesPositions[i] > rightBorder

			slide.style.zIndex = 99

			slideshowSlidesPositions[i] = leftBorder

		slide.style.transform = 'translateX(' + slideshowSlidesPositions[i] + 'px)'



$('.slideshow-nav-left').click ->

	for slide, i in slideshowSlides

		slide.style.zIndex = 100

		slideshowSlidesPositions[i] -= 785

		if slideshowSlidesPositions[i] < leftBorder

			slide.style.zIndex = 99

			slideshowSlidesPositions[i] = rightBorder

		slide.style.transform = 'translateX(' + slideshowSlidesPositions[i] + 'px)'
