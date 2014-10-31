upDowns = document.querySelectorAll ".numeric-up-down"

ups = []

downs = []

fields = []

realField = []

for i in [0...upDowns.length]

	ups[i] = upDowns[i].querySelector ".numeric-up"

	downs[i] = upDowns[i].querySelector ".numeric-down"

	fields[i] = upDowns[i].querySelector ".numeric-field"

	realField[i] = upDowns[i].querySelector ".numeric-field-real-text"

	__i = i

	do (__i) =>

		ups[__i].addEventListener "click", (e) ->

			value = parseInt(fields[__i].innerHTML) + 1

			fields[__i].innerHTML = value

			realField[__i].value = value



		downs[__i].addEventListener "click", (e) ->

			value = parseInt(fields[__i].innerHTML) - 1

			if value isnt 0

				fields[__i].innerHTML = value

				realField[__i].value = value
