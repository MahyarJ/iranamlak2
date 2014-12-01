<div class="news-box-content">

	<?php

		  // $arabic_indic_digits = array(
		  //   "\xD9\xA0",
		  //   "\xD9\xA1",
		  //   "\xD9\xA2",
		  //   "\xD9\xA3",
		  //   "\xD9\xA4",
		  //   "\xD9\xA5",
		  //   "\xD9\xA6",
		  //   "\xD9\xA7",
		  //   "\xD9\xA8",
		  //   "\xD9\xA9",
		  // );
		  // $number = 1234.56;
		  // $formatted_number = format_number($number, 2);
		  // $arabic_number = str_replace(array_keys($arabic_indic_digits), $arabic_indic_digits, $formatted_number);

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