# Preparing window objects to use:

siteWindow = document.querySelector ".window"

siteWindowClose = document.querySelector ".window-close"


$('.estate-item').click ->

	siteWindow.style.visibility = "visible"

	siteWindow.style.opacity = 1


# Window Close

siteWindowClose.addEventListener "click", (e) ->

	siteWindow.style.opacity = 0

	siteWindow.style.visibility = "hidden"


