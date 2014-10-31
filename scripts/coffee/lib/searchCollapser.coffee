$time = 0

defaultHeight = $('.search-content').css "height"

switcher = $('.search-content-tab')

switcher.click ->

	if $time is 0

		$('.search-content').css "height", 720

		$('.mini-search-btn').css {

			"opacity": 0,

			"visibility": "hidden"

		}

		$time = 1

		switcher.html 'جستجوی ساده'

	else

		$('.search-content').css "height", defaultHeight

		$('.mini-search-btn').css {

			"opacity": 1,

			"visibility": "visible"

		}

		$time = 0

		switcher.html 'جستجوی پیشرفته'


`
function getUrlParameter(sParam)
{
    var sPageURL = window.location.search.substring(1);
    var sURLVariables = sPageURL.split('&');
    for (var i = 0; i < sURLVariables.length; i++)
    {
        var sParameterName = sURLVariables[i].split('=');
        if (sParameterName[0] == sParam)
        {
            return sParameterName[1];
        }
    }
}
`

for div in $('[not-support-estate]')

	notSupportEstate = JSON.parse div.getAttribute 'not-support-estate'

	for notSupport in notSupportEstate

		if notSupport + '' is getUrlParameter('estate')

			$ div
			.fadeOut()