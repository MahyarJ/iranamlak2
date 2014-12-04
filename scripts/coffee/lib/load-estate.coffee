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

		temp = JSON.parse(data)

		$('#deal-type').html temp.dealType

		$('#estate-type').html temp.estateType

		$('#state').html temp.state

		$('#city').html temp.city

		$('#zone').html temp.zone

		$('#unit-price').html temp.unitPrice

		$('#total-price').html temp.totalPrice

		$('#room').html temp.room

		$('#zirbana').html temp.zirbana

		$('#floor').html temp.floor

		$('#kafpoosh').html temp.kafpoosh

		$('#nama').html temp.nama

		console.log temp

		$('#pic1').attr "src", temp.pic1

		$('#pic2').attr "src", temp.pic2

		$('#pic3').attr "src", temp.pic3

		items = ""

		for item in temp.heatOptions

			if items isnt ""

				items = items + " | "

			items = items + item

		$('#heat').html items

		items = ""

		for item in temp.areaExtentions

			if items isnt ""

				items = items + " | "

			items = items + item

		$('#area').html items

		items = ""

		for item in temp.khuneOptions

			if items isnt ""

				items = items + " | "

			items = items + item

		$('#khune').html items

		items = ""

		for item in temp.maghazeOptions

			if items isnt ""

				items = items + " | "

			items = items + item

		$('#maghaze').html items


		divs = $('[data-not-support-estate]')
		for div in divs

				notSupportEstate = JSON.parse div.getAttribute 'data-not-support-estate'

				notFound = true

				for notSupport in notSupportEstate

					if notSupport + '' is temp.estateTypeId

						$ div
						.fadeOut()

						notFound = false

				if notFound is true

					$ div
					.fadeIn()

	.fail () ->

		console.log "Checkout Ajax Failed!"


