<div class="news-box-content">

	<?php

		include_once 'core/database.php';

		$query = "SELECT * FROM `news` ORDER BY `date` DESC";

		$result = doquery($query);

		$index = 1;

		while ($row = fetch($result)) {

			echo '<div class="news-item">';

			echo '<div class="news-thumb"></div>';

			echo '<div class="news-date">' . $row['display_date'] . '</div>';

			echo '<div class="news-title">' . $row['title_fa'] . '</div>';

			echo '<div class="news-body">' . $row['body_fa'] . '</div>';

			echo '</div>';

		}

	?>

</div>

<script src="../scripts/js/lib/news.js"></script>