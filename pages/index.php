<?php

	session_start();

	error_reporting(E_ALL);

	ini_set('display_errors', 1);

	include_once 'core/database.php';

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

<head>

	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

	<title>ایران املاک</title>

	<link rel="stylesheet" type="text/css" href="../styles/css/main.css">

	<script src="../scripts/vendor/jquery-1.9.1.min.js"></script>

	<link rel="stylesheet" href="../scripts/vendor/jquery-ui-1.10.3/themes/base/jquery-ui.css">

	<script src="../scripts/vendor/jquery-ui-1.10.3/ui/jquery-ui.js"></script>

</head>

<body>

	<?php include_once 'header.php' ?>


	<!-- middle of the page -->

	<div class="mid">

		<div class="main">

			<div class="bg"></div>

			<!-- Main content of website shows here by needs -->

			<div class="main-content">

				<?php

					if (isset($_GET['panel']))

						switch ($_GET['panel'])
						{

							case 'add':

								include_once 'add-content.php';

								break;

							case 'search':

								include_once 'search-content.php';

								include_once 'search-result.php';

								break;

							case 'add-location':

								include_once 'add-location.php';

								break;

							case 'ad-make-wizard':

								include_once 'ad-make-content.php';

								break;

							case 'news-management':

								include_once 'news-management.php';

								break;

							case 'my-estates':

								include_once 'my-estates.php';

								break;

							case 'review':

								include_once 'admin-review.php';

								break;

							case 'home':

								include_once 'slideshow.php';

								include_once 'news.php';

						}

					if (isset($_GET['search-submit']))
					{

						include_once 'search-content.php';

						include_once 'search-result.php';

					}

				?>

			</div>


			<!-- Side ads shows here -->

			<?php include_once 'ads.php' ?>

		</div>

		<?php include_once 'rightpane.php' ?>

	</div>


	<!-- footer and user part of page -->

	<?php include_once 'footer.php' ?>

	<?php include_once 'window.php'; ?>

</body>

<script src="../scripts/js/lib/loginCollapser.js"></script>

<script src="../scripts/js/lib/mjRadios.js"></script>

<script src="../scripts/js/lib/mjNumericUpDown.js"></script>

<script src="../scripts/js/lib/jqueryUIFuncs.js"></script>

<script src="../scripts/js/lib/footerCollapser.js"></script>

<script src="../scripts/js/lib/uriGetFetcher.js"></script>

<script src="../scripts/js/lib/searchCollapser.js"></script>

<script src="../scripts/js/lib/slider.js"></script>

<script src="../scripts/js/lib/showWindow.js"></script>

<script src="../scripts/js/lib/news.js"></script>

</html>