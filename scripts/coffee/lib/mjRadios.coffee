selectedIndexes = []

radios = document.querySelectorAll '.mj-radio'

domRadios = document.querySelectorAll '.dom-radio'


checkMJRadio = (index) ->

	radios[index].classList.add "selected"

	selectedIndexes[index] = 1

	domRadios[index].setAttribute "checked", ""


uncheckMJRadio = (index) ->

	radios[index].classList.remove "selected"

	selectedIndexes[index] = 0

	domRadios[index].removeAttribute "checked"


for i in [0...radios.length]

	if domRadios[i].getAttribute("checked")?

		selectedIndexes[i] = 1

	else

		selectedIndexes[i] = 0

	__i = i

	do (__i) =>

		radios[__i].addEventListener "click", (e) ->

			if radios[__i].parentNode.getAttribute('data-multi') is 'no'

				checkMJRadio __i

				for index in [0...selectedIndexes.length]

					if index isnt __i and radios[index].parentNode is radios[__i].parentNode

						uncheckMJRadio index


			else

				if selectedIndexes[__i] is 0

					checkMJRadio __i

				else

					uncheckMJRadio __i