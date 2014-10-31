toggleTime = 0

rotateButtons = ->

	$("#submit-row").css

		webkitTransform: "perspective(800px) rotateX(#{360 * (-1 * (toggleTime % 2) + 1)}deg)"


$(document).ready ->

	$('#confirm-row').slideUp "slow"

	$('#name-row').slideUp "slow"

	$('#newuser').click ->

		do rotateButtons

		toggleTime++

		$('#confirm-row').slideToggle "slow"

		$('#name-row').slideToggle "slow", ->

			if toggleTime % 2 is 1

				$("#newuser").html "انصراف از ثبت نام"

				$("#user-login-submit").val "درج"

				$("#name-row input").removeAttr "disabled"

				$("#confirm-row input").removeAttr "disabled"

			else

				$("#newuser").html "ایجاد حساب کاربری جدید"

				$("#user-login-submit").val "ورود"

				$("#name-row input").attr "disabled", ""

				$("#confirm-row input").attr "disabled", ""

