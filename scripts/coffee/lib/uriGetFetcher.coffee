getFetcher = ->

	getParams = window.location.search.substring(1).split("&")

	for i in [0..getParams.length]

		getParams[i] = getParams[i].split("=")

	getParams

