# Preparing window objects to use:

siteWindow = document.querySelector ".window"

siteWindowClose = document.querySelector ".window-close"

$('.bg').click =>

	siteWindow.style.opacity = 0

	siteWindow.style.visibility = "hidden"

	$('.estate-view').css

		'visibility': 'hidden'

	$('.news-insertion').css

		'visibility': 'hidden'

# $('.estate-item').click ->

# 	siteWindow.style.visibility = "visible"

# 	siteWindow.style.opacity = 1

# 	$('.estate-view').css

# 		'visibility': 'visible'


# Window Close

siteWindowClose.addEventListener "click", (e) ->

	siteWindow.style.opacity = 0

	siteWindow.style.visibility = "hidden"

	$('.estate-view').css

		'visibility': 'hidden'

	$('.news-insertion').css

		'visibility': 'hidden'

