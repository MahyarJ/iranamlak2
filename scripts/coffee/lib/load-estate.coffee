do estateOnClick = ->

	$('.estate-item').click ->

		loadEstate $(this).attr('id')

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

		url:  '../pages/ajax/estate/load-estate.php',
		type: 'GET',
		data: 'estate-id=' + estateId

	.done (data) ->

		# console.log data

		temp = JSON.parse(data)

		$('#deal-type').html temp.dealType

		$('#state').html temp.state

		$('#city').html temp.city

		$('#zone').html temp.zone

		$('#address').html temp.address

	.fail () ->

		console.log "Checkout Ajax Failed!"


