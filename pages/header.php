<?php

	// linking is up to PHP but highlighting is up to JS

	$estate = 'none';

	if (isset($_GET['estate']))

		$estate = $_GET['estate'];

?>



<div class="header">

	<div class="bg"></div>

	<div class="top-menu-bar">

		<ul class="top-menu">

			<a href="?panel=search&amp;deal=1&amp;estate=<?php echo $estate; ?>"><li <?php if (isset($_GET['deal']) && ($_GET['deal'] == 1) ) echo "class=\"selected\"" ?> >رهن و اجاره</li></a>
			<a href="?panel=search&amp;deal=2&amp;estate=<?php echo $estate; ?>"><li <?php if (isset($_GET['deal']) && ($_GET['deal'] == 2) ) echo "class=\"selected\"" ?> >خرید و فروش</li></a>
			<a href="?panel=search&amp;deal=3&amp;estate=<?php echo $estate; ?>"><li <?php if (isset($_GET['deal']) && ($_GET['deal'] == 3) ) echo "class=\"selected\"" ?> >پیش فروش</li></a>
			<a href="?panel=search&amp;deal=4&amp;estate=<?php echo $estate; ?>"><li <?php if (isset($_GET['deal']) && ($_GET['deal'] == 4) ) echo "class=\"selected\"" ?> >مشارکت</li></a>
			<a href="?panel=search&amp;deal=5&amp;estate=<?php echo $estate; ?>"><li <?php if (isset($_GET['deal']) && ($_GET['deal'] == 5) ) echo "class=\"selected\"" ?> >معاوضه</li></a>
			<!-- <a href="?panel=search&amp;deal=6&amp;estate="><li class="oca">اکـــازیون / فروش فوری</li></a> -->

		</ul>

	</div>

</div>