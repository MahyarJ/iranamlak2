<div class="news-list"> -->

	<div class="appender" id="append-news">+</div>

	<div class="news-list-items">

		<?php

			$query = "SELECT * FROM `news` ORDER BY `id` DESC";

			$result = doquery($query);

			$index = 1;

			while ($row = fetch($result)) {

				$top = 50 * $index;

				echo "<div class=\"news-list-item\" id=\"" . $row['id'] . "\">" .

					 	"<div class=\"news-id\">" . (int)$row['id'] . "</div>" .

					 	"<div class=\"news-summery\">" . $row['display_date'] . "<br>" . $row['title_fa'] . "</div> " .

					 	// "<div class=\"news-news\">" . $row['title_fa'] . "</div> " .

					 "</div>";

				$index++;

			}

		?>

	</div>

</div>

<script src="../scripts/js/lib/manage-news.js"></script>