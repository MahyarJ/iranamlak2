<?php

	// linking is up to PHP but highlighting is up to JS

	$deal = 'none';

	$cur_uri = $_SERVER['REQUEST_URI'];

	if (isset($_GET['deal']))

		$deal = $_GET['deal'];

?>

<div class="right-pane">

	<div class="bg"></div>

	<a href="./?panel=home"><div class="logo"></div></a>

	<div class="login-opener">

		<?php

			if (isset($_SESSION['name']))
			{

				echo "<p>" . $_SESSION['name'] . "</p><p><a href=\"core/logout.php\">خروج</a></p>";

			}

			else

				echo "عضویت / ورود »";

		?>


	</div>

	<ul class="right-menu">

		<a href="?panel=search&amp;deal=<?php echo $deal; ?>&amp;estate=1"> <li <?php if (isset($_GET['estate']) && ($_GET['estate'] == 1) ) echo "class=\"selected\"" ?> >خانه | ویلا</li></a>
		<a href="?panel=search&amp;deal=<?php echo $deal; ?>&amp;estate=2"> <li <?php if (isset($_GET['estate']) && ($_GET['estate'] == 2) ) echo "class=\"selected\"" ?> >زمین</li></a>
		<a href="?panel=search&amp;deal=<?php echo $deal; ?>&amp;estate=3"> <li <?php if (isset($_GET['estate']) && ($_GET['estate'] == 3) ) echo "class=\"selected\"" ?> >آپارتمان</li></a>
		<a href="?panel=search&amp;deal=<?php echo $deal; ?>&amp;estate=4"> <li <?php if (isset($_GET['estate']) && ($_GET['estate'] == 4) ) echo "class=\"selected\"" ?> >اداری | مطب | دفتر</li></a>
		<a href="?panel=search&amp;deal=<?php echo $deal; ?>&amp;estate=5"> <li <?php if (isset($_GET['estate']) && ($_GET['estate'] == 5) ) echo "class=\"selected\"" ?> >تجاری | پاساژ | مغازه</li></a>
		<a href="?panel=search&amp;deal=<?php echo $deal; ?>&amp;estate=6"> <li <?php if (isset($_GET['estate']) && ($_GET['estate'] == 6) ) echo "class=\"selected\"" ?> >سوله | کارگاه | کارخانه</li></a>

		<a href="?panel=search&amp;deal=<?php echo $deal; ?>&amp;estate=8"> <li <?php if (isset($_GET['estate']) && ($_GET['estate'] == 8) ) echo "class=\"selected\"" ?> >باغ | زمین کشاورزی</li></a>
		<a href="?panel=search&amp;deal=<?php echo $deal; ?>&amp;estate=9"> <li <?php if (isset($_GET['estate']) && ($_GET['estate'] == 9) ) echo "class=\"selected\"" ?> >دامداری | دامپروری</li></a>

	</ul>

</div>