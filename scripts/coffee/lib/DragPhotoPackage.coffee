
makeDropable = (packageEl, nextOne) =>

	img = packageEl.querySelector ".hole-image"

	if img.getAttribute("src")?

	else

		packageEl.children[0].innerText = 'تصویر را انتخاب کنید یا اینجا بیاندازید'

		if nextOne?

			$ nextOne
			.fadeOut(0)

	available = true

	packageEl.children[1].addEventListener "change", (event) =>

		packageEl.children[2].value = packageEl.children[2].getAttribute('name')

		return if packageEl.children[1].files.length is 0

		readFile packageEl.children[1].files[0], packageEl

		if nextOne?

			$ nextOne
			.fadeIn()

		packageEl.classList.remove 'dropHere'

		packageEl.children[0].innerText = 'در حال آپلود'


	packageEl.addEventListener "drop", (event) =>

		event.stopPropagation()
		event.preventDefault()

		files = event.dataTransfer.files

		data = event.dataTransfer.getData("URL")

		return if files.length is 0

		readFile files[0], packageEl

		if nextOne?

			$ nextOne
			.fadeIn()

		packageEl.classList.remove 'dropHere'

		packageEl.children[0].innerText = 'در حال آپلود'

		return

	packageEl.addEventListener "dragenter", (event) =>

		event.stopImmediatePropagation()
		event.preventDefault()

		packageEl.classList.add 'dropHere'

		packageEl.children[0].innerText = 'رها کنید'

		return

	packageEl.addEventListener "dragexit", (event) =>

		event.stopImmediatePropagation()
		event.preventDefault()

		unless img.getAttribute("src")?

			packageEl.classList.remove 'dropHere'

			packageEl.children[0].innerText = 'اینجا بیاندازید'

		else

			packageEl.children[0].innerText = ""

		return

	packageEl.addEventListener "dragleave", (event) =>

		event.stopImmediatePropagation()
		event.preventDefault()

		unless img.getAttribute("src")?

			packageEl.classList.remove 'dropHere'

			packageEl.children[0].innerText = 'اینجا بیاندازید'

		else

			packageEl.children[0].innerText = ""

		return

	packageEl.addEventListener "dragend", (event) =>

		event.stopImmediatePropagation()
		event.preventDefault()

		packageEl.classList.remove 'dropHere'

		packageEl.children[0].innerText = 'تصویر را انتخاب کنید یا اینجا بیاندازید'

		return

	packageEl.addEventListener "dragover", (event) =>

		event.stopImmediatePropagation()
		event.preventDefault()

		packageEl.classList.add 'dropHere'

		packageEl.children[0].innerText = 'رها کنید'

		return

readFile = (file, el) ->

	reader = new FileReader

	reader.readAsDataURL(file)

	console.log 'Reading File...'

	reader.onload = (evt) =>

		data = evt.target.result

		blob = dataURItoBlob data

		fd = new FormData()

		name = file.name.split('.')

		fd.append "image", blob, el.children[2].getAttribute('name') + '.' + name[1]

		el.children[2].value = el.children[2].getAttribute('name') + '.' + name[1]

		packageSendForm fd, data, el.children[2].getAttribute('name') + '.' + name[1], el

		return

dataURItoBlob = (dataURI) ->

	byteString = atob(dataURI.split(",")[1])

	mimeString = dataURI.split(",")[0].split(":")[1].split(";")[0]

	ab = new ArrayBuffer(byteString.length)
	ia = new Uint8Array(ab)

	i = 0

	while i < byteString.length

		ia[i] = byteString.charCodeAt(i)

		i++


	new Blob [ia]

packageSendForm = (fd, data, name, el) =>

	$ '[name=insert-submit]'
	.attr('disabled','disabled')

	$.ajax

		type: 'POST',
		# 	type: "multipart",

		url: '../pages/upload-image.php?name=' + name

		# data: $('#file').attr('files'),
		data: fd

		cache: false,

		# contentType: 'multipart/form-data',
		contentType: false,

		processData: false,


	.done (data) ->

		try

			dataObj = JSON.parse data

			if dataObj.url?

				el.children[0].innerText = ''

				if el.children[3]?

					el.children[3].src = dataObj.url

				else

					img = el.querySelector ".hole-image"

					img.src = dataObj.url

			$ '[name=insert-submit]'
			.removeAttr('disabled')

		catch e

			console.error e.toString(), data

			$ '[name=insert-submit]'
			.removeAttr('disabled')

	.fail () ->

		console.log "Checkout Ajax Failed!"

		$ '[name=insert-submit]'
		.removeAttr('disabled')


all = document.querySelectorAll '.add-pic'

makeDropable all[0], all[1]
makeDropable all[1], all[2]
makeDropable all[2]