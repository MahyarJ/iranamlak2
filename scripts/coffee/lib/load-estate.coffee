do estateOnClick = ->

	$('.estate-item').click ->

		$('.estate-view').css

			'visibility': 'visible'


		$('.window').css

			'visibility': 'visible',

			'opacity': 1



	# $('.news-list-item').click ->

	# 	$('.news-list-item').removeClass 'selected'

	# 	$(this).addClass 'selected'

	# 	$('#news-id-textbox').val $(this).attr('id')

	# 	loadNews $(this).attr('id')

	# 	$('.news-insertion').css

	# 		'visibility': 'visible',

	# 	$('.window').css

	# 		'visibility': 'visible',

	# 		'opacity': 1


# Ajax Functions


loadEstate = (estateId) ->

	$.ajax

		url:  '../pages/ajax/estate/load-estate.php'
		type: 'GET',
		data: 'estate-id=' + estateId

	.done (data) ->

		temp = JSON.parse(data)

		# $('#news-title-fa-textbox').val temp.titleFa

		# $('#news-body-fa-textarea').val temp.bodyFa

	.fail () ->

		console.log "Checkout Ajax Failed!"


