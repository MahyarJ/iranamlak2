# Preparing window objects to use:

siteWindow = document.querySelector ".window"

siteWindowContent =	document.querySelector ".window-content-box-ajax-load"

siteWindowClose = document.querySelector ".window-close"


$('.estate-item').click ->

	siteWindow.style.visibility = "visible"

	siteWindowContent.innerHTML = ""

	siteWindow.style.opacity = 1



# Window Close

siteWindowClose.addEventListener "click", (e) ->

	siteWindow.style.opacity = 0

	siteWindowContent.innerHTML = ""

	siteWindow.style.visibility = "hidden"
