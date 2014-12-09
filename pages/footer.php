<div class="footer" <?php if (isset($_GET['signin'])) echo "style=\"bottom: 0\""; ?> >

	<div class="bg">

		<div class="footer-tab">عضویت / ورود </div>

	</div>

	<?php

		if (isset($_SESSION['username']))

			require_once 'user-menu.php';

		else

			require_once 'login-pane.php';

	?>

</div>

