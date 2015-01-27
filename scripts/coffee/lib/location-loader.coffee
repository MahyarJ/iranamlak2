stateCombobox = document.getElementById 'state-combobox'

cityCombobox  = document.getElementById 'city-combobox'

zoneCombobox  = document.getElementById 'zone-combobox'

selectedState = 0

selectedCity  = 0

selectedZone  = 0

type = ''

if $('#city-combobox').children(0).val() is "none"

	$('#city-combobox').fadeOut("fast")

if $('#zone-combobox').children(0).val() is "none"

	$('#zone-combobox').fadeOut("fast")



# Load Location Items

stateCombobox.addEventListener 'change', =>

	selectedState = stateCombobox.value

	unless selectedState is "none"

		$('#city-combobox').fadeIn("slow")

	else

		$('#city-combobox').fadeOut("slow")

		$('#zone-combobox').fadeOut("slow")



	$.ajax

		type: 'GET',
		url:  '../pages/ajax/load-city.php',
		data: 'state-id=' + selectedState

	.done (data) ->

		str = '<option value="none">-- همه شهرها --</option>'

		temp = JSON.parse(data)

		for city in temp

			str = str + '<option value="' + city.id + '">' + city.name + '</option>'

		$('#city-combobox').html str


	.fail () ->

		console.log "Checkout Ajax Failed!"


cityCombobox.addEventListener 'change', =>

	selectedCity = cityCombobox.value

	unless selectedCity is "none"

		$('#zone-combobox').fadeIn("slow")

	else

		$('#zone-combobox').fadeOut("slow")

	$.ajax

		type: 'GET',
		url:  '../pages/ajax/load-zone.php',
		data: 'state-id=' + selectedState + '&city-id=' + selectedCity

	.done (data) ->

		str = '<option value="none">-- همه مناطق --</option>'

		temp = JSON.parse(data)

		for zone in temp

			str = str + '<option value="' + zone.id + '">' + zone.name + '</option>'

		$('#zone-combobox').html str


	.fail () ->

		console.log "Checkout Ajax Failed!"


