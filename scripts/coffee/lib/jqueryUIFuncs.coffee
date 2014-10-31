# addCamma = (counter) ->

# 	num = "0123456789"

# 	txt = $(counter).val()

# 	for i in [0...txt.length]

# 		if num.indexOf( txt.substr(i, 1) ) is -1

# 			txt = txt.substr(0, i) + txt.substr(i+1)

# 	txt = ( isNaN(parseFloat(txt)) ? "" : parseFloat(txt).toString() )

# 	rx = /(\d+)(\d{3})/

# 	txt = txt.replace(/^\d+/, (w) ->

# 		while rx.test(w) is true

# 			w = w.replace(rx, '$1, $2')

# 		w

# 	$(counter).val(txt)



$(document).ready ->

	$.fn.numbermask = ->

		$(@).keyup ->

			addCamma @

		$(@).blur ->
			addCamma @




	priceRangeParams =

		range:  true
		min:    0
		max:    10000
		step:   50
		values: [200, 5000]
		slide: (event, ui) ->

			$("#price-range-field").val( ui.values[ 1 ] + " میلیون تومان    ــــــ    " + ui.values[ 0 ] + " میلیون تومان" )

			$("#price-range").val( "[" + ui.values[ 0 ] + ", " + ui.values[ 1 ] + "]" )

	$("#price-slider-range").slider priceRangeParams

	$("#price-range-field").val( $( "#price-slider-range" ).slider( "values", 1 ) + " میلیون تومان    ــــــ    " + $( "#price-slider-range" ).slider( "values", 0 ) + " میلیون تومان" )

	$("#price-range").val( "[" + priceRangeParams.values[ 0 ] + ", " + priceRangeParams.values[ 1 ] + "]" )


	areaRangeParams =

		range:  true
		min:    0
		max:    5000
		step:   50
		values: [100, 1000]
		slide: (event, ui) ->

			$("#area-range-field").val( ui.values[ 1 ] + " متر مربع    ــــــ    " + ui.values[ 0 ] + " متر مربع" )

			$("#area-range").val( "[" + ui.values[ 0 ] + ", " + ui.values[ 1 ] + "]" )

	$("#area-slider-range").slider areaRangeParams

	$("#area-range-field").val( $( "#area-slider-range" ).slider( "values", 1 ) + " متر مربع    ــــــ    " + $( "#area-slider-range" ).slider( "values", 0 ) + " متر مربع" )

	$("#area-range").val( "[" + areaRangeParams.values[ 0 ] + ", " + areaRangeParams.values[ 1 ] + "]" )


	roomRangeParams =

		range:  true
		min:    0
		max:    10
		step:   1
		values: [1, 3]
		slide: (event, ui) ->

			$("#room-range-field").val( ui.values[ 1 ] + " خوابه    ــــــ    " + ui.values[ 0 ] + " خوابه" )

			$("#room-range").val( "[" + ui.values[ 0 ] + ", " + ui.values[ 1 ] + "]" )

	$("#room-slider-range").slider roomRangeParams

	$("#room-range-field").val( $( "#room-slider-range" ).slider( "values", 1 ) + " خوابه    ــــــ    " + $( "#room-slider-range" ).slider( "values", 0 ) + " خوابه" )

	$("#room-range").val( "[" + roomRangeParams.values[ 0 ] + ", " + roomRangeParams.values[ 1 ] + "]" )


	ageRangeParams =

		range:  true
		min:    0
		max:    20
		step:   1
		values: [0, 10]
		slide: (event, ui) ->

			$("#age-range-field").val( ui.values[ 1 ] + " ساله    ــــــ    " + ui.values[ 0 ] + " ساله" )

			$("#age-range").val( "[" + ui.values[ 0 ] + ", " + ui.values[ 1 ] + "]" )

	$("#age-slider-range").slider ageRangeParams

	$("#age-range-field").val( $( "#age-slider-range" ).slider( "values", 1 ) + " ساله    ــــــ    " + $( "#age-slider-range" ).slider( "values", 0 ) + " ساله" )

	$("#age-range").val( "[" + ageRangeParams.values[ 0 ] + ", " + ageRangeParams.values[ 1 ] + "]" )

	# sliders parameters

	# areaSliderParams =

	# 	range: "min"
	# 	value: 150
	# 	min:   0
	# 	max:   5000
	# 	slide: (event, ui) ->

	# 		$("#area-field").val( ui.value + " مترمربع " )

	# $("#area-slider").slider areaSliderParams

	# $("#area-field").val( $("#area-slider").slider( "values", 0 )+ "متر مربع" )

