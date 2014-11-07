divs = $('[data-not-support-estate]')

select = $ '#estate-kind'
select.change (data) =>

	for div in divs

		notSupportEstate = JSON.parse div.getAttribute 'data-not-support-estate'

		notFound = true

		for notSupport in notSupportEstate

			if notSupport + '' is select.val()

				$ div
				.fadeOut()

				notFound = false

		if notFound is true

			$ div
			.fadeIn()
