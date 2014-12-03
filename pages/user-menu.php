<div class="content">

	<div class="footer-close"></div>

	<?php

		if ($_SESSION['type'] == 0):

	?>

	<div class="footer-close"></div>

	<div class="user-menu">

		<ul class="user-menu-column">

			<li><a href="./?panel=add">سپردن آگهی ملک</a></li>
			<li><a href="./?panel=ad-make-wizard">درج تبلیغات در سایت</a></li>
			<li><a href="">تغییر مشخصات</a></li>
			<li><a href="core/logout.php">خروج</a></li>

		</ul>

		<ul class="user-menu-column">

			<li><a href="./?panel=my-estates">آگــهی هــای من</a></li>


		</ul>

	</div>

	<?php

		elseif ($_SESSION['type'] == 5):

	?>

	<div class="user-menu">

		<ul class="user-menu-column">

			<li><a href="?panel=review">تایید آگهی های تایید نشده</a></li>
			<li><a href="">بررسی آگهی های ثبت شده</a></li>
			<li><a href="">وضعیت پرداخت ها</a></li>
			<li><a href="">تنظیمات</a></li>

		</ul>

		<ul class="user-menu-column">

			<li><a href="?panel=add-location">افزودن نواحی جدید</a></li>
			<li><a href="?panel=news-management">مدیریت اخبار</a></li>
			<li><a href="core/logout.php">خروج</a></li>


		</ul>


	</div>

	<?php

		endif;

	?>

</div>