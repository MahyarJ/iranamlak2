do newsOnClick = ->

	$('.news-list-item').click ->

		$('.news-list-item').removeClass 'selected'

		$(this).addClass 'selected'

		$('#news-id-textbox').val $(this).attr('id')

		loadNews $(this).attr('id')

		$('.news-insertion').css

			'visibility': 'visible',


		$('.window').css

			'visibility': 'visible',

			'opacity': 1


# Ajax Functions

editNews = (id, titleFa, bodyFa) ->

	$.ajax

		type: 'POST',
		url:  '../pages/ajax/news/edit-news.php',
		data: 'news-id=' + id + '&title-fa=' + titleFa + '&body-fa=' + bodyFa

	.done (data) ->

		$('.news-list-items').html data

		do newsOnClick

	.fail () ->

		console.log "Checkout Ajax Failed!"


appendNews = ->

	$.ajax

		url:  '../pages/ajax/news/append-news.php'

	.done (data) ->

		$('.news-list-items').html data + $('.news-list-items').html()

		do newsOnClick

	.fail () ->

		console.log "Checkout Ajax Failed!"



loadNews = (newsId) ->

	$.ajax

		url:  '../pages/ajax/news/load-news.php'
		type: 'GET',
		data: 'news-id=' + newsId

	.done (data) ->

		temp = JSON.parse(data)

		$('#news-title-fa-textbox').val temp.titleFa

		$('#news-body-fa-textarea').val temp.bodyFa

	.fail () ->

		console.log "Checkout Ajax Failed!"



# Ajax Runners

$('#append-news').click ->

	console.log 'appended'

	do appendNews



$('#edit-news').click ->

	editNews $('#news-id-textbox').val(), $('#news-title-fa-textbox').val(), $('#news-body-fa-textarea').val()

	$('.window').css

		'opacity': 0,
		'visibility': 'hidden'



