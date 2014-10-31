fetchLocation = (type, id) ->

	`$.ajax({

		type: 'GET',
		url:  'backstage/location-teller.php',
		data: 'type=' + type

	}).done(function(data){

		locationSelectTag.innerHTML = data

	}).fail(function(){

		console.log("Checkout Ajax Failed!");

	})`


$('.add-location-collapser').click ->

	if $(this).hasClass 'rotated'

		$(this).removeClass 'rotated'

	else

		$(this).addClass 'rotated'

	$(this).siblings('.add-box').slideToggle()


$('.location-select').change ->

	if $(this).val() is '1'

		$(this).siblings('.form-rename-btn').css

			"padding"   : 0,
			"width"     : 0,
			"visibility": "hidden"


	else

		$(this).siblings('.form-rename-btn').css

			"padding": "6px 10px",
			"width": "auto"
			"visibility": "visible"