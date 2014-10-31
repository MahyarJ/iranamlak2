stateCombobox = document.getElementById 'state-combobox'

cityCombobox  = document.getElementById 'city-combobox'

zoneCombobox  = document.getElementById 'zone-combobox'

selectedState = 0

selectedCity  = 0

selectedZone  = 0

type = ''


$('.add-location-item#city').fadeOut("fast")

$('.add-location-item#zone').fadeOut("fast")


$('.add-location-collapser').click ->

	if $(this).hasClass 'rotated'

		$(this).removeClass 'rotated'

	else

		$(this).addClass 'rotated'

	$(this).siblings('.add-box').slideToggle()


# Inserting Location Items

$('#insert-state-submit').click ->

	type = 'state'

	$.ajax

		type: 'GET',
		url:  '../pages/ajax/insert-location.php',
		data: 'type=' + type + '&selected=' + selectedState + '&added-state-name=' + $('#added-state-name').val()

	.done (data) ->

		# $('.branch-list-items').html data

		# do branchOnClick

		console.log data

	.fail () ->

		console.log "Checkout Ajax Failed!"


$('#insert-city-submit').click ->

	type = 'city'

	$.ajax

		type: 'GET',
		url:  '../pages/ajax/insert-location.php',
		data: 'type=' + type + '&selected=' + selectedCity + '&state=' + selectedState + '&added-city-name=' + $('#added-city-name').val()

	.done (data) ->

		# $('.branch-list-items').html data

		# do branchOnClick

		console.log data

	.fail () ->

		console.log "Checkout Ajax Failed!"


$('#insert-zone-submit').click ->

	type = 'zone'

	$.ajax

		type: 'GET',
		url:  '../pages/ajax/insert-location.php',
		data: 'type=' + type + '&selected=' + selectedZone + '&state=' + selectedState + '&city=' + selectedCity + '&added-zone-name=' + $('#added-zone-name').val()

	.done (data) ->

		# $('.branch-list-items').html data

		console.log data

	.fail () ->

		console.log "Checkout Ajax Failed!"



# Load Location Items

stateCombobox.addEventListener 'change', =>

	selectedState = stateCombobox.value

	unless selectedState is "0" or selectedState is 0

		$('.add-location-item#city').fadeIn("slow")

		stateCombobox.parentNode.querySelector('.add-location-collapser').classList.add('goforedit')

		$('#added-state-name').val(stateCombobox.selectedOptions[0].innerHTML)

	else

		$('.add-location-item#zone').fadeOut("slow")

		$('.add-location-item#city').fadeOut("slow")

		stateCombobox.parentNode.querySelector('.add-location-collapser').classList.remove('goforedit')

		cityCombobox.parentNode.querySelector('.add-location-collapser').classList.remove('goforedit')

		zoneCombobox.parentNode.querySelector('.add-location-collapser').classList.remove('goforedit')

	$.ajax

		type: 'GET',
		url:  '../pages/ajax/load-city.php',
		data: 'state-id=' + selectedState

	.done (data) ->

		str = '<option value="0">-- شهر را انتخاب نمایید --</option>'

		temp = JSON.parse(data)

		for city in temp

			str = str + '<option value="' + city.id + '">' + city.name + '</option>'

		$('#city-combobox').html str


	.fail () ->

		console.log "Checkout Ajax Failed!"


cityCombobox.addEventListener 'change', =>

	selectedCity = cityCombobox.value

	unless selectedCity is "0" or selectedCity is 0

		$('.add-location-item#zone').fadeIn("slow")

		cityCombobox.parentNode.querySelector('.add-location-collapser').classList.add('goforedit')

		$('#added-city-name').val(cityCombobox.selectedOptions[0].innerHTML)

	else

		$('.add-location-item#zone').fadeOut("slow")

		cityCombobox.parentNode.querySelector('.add-location-collapser').classList.remove('goforedit')

		zoneCombobox.parentNode.querySelector('.add-location-collapser').classList.remove('goforedit')


	$.ajax

		type: 'GET',
		url:  '../pages/ajax/load-zone.php',
		data: 'state-id=' + selectedState + '&city-id=' + selectedCity

	.done (data) ->

		str = '<option value="0">-- منطقه را انتخاب نمایید --</option>'

		temp = JSON.parse(data)

		for zone in temp

			str = str + '<option value="' + zone.id + '">' + zone.name + '</option>'

		$('#zone-combobox').html str


	.fail () ->

		console.log "Checkout Ajax Failed!"


zoneCombobox.addEventListener 'change', =>

	selectedZone = zoneCombobox.selectedOptions[0].value

	unless selectedState is "0" or selectedState is 0

		zoneCombobox.parentNode.querySelector('.add-location-collapser').classList.add('goforedit')

		$('#added-zone-name').val(zoneCombobox.selectedOptions[0].innerHTML)

	else

		zoneCombobox.parentNode.querySelector('.add-location-collapser').classList.remove('goforedit')

