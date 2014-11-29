<?php

	// error_reporting(E_ERROR | E_WARNING | E_PARSE | E_NOTICE);
	// http://php.net/manual/en/function.error-reporting.php
	include_once '../../core/database.php';

	$news_id = $_POST['news-id'];

	$title_fa = $_POST['title-fa'];

	$body_fa = $_POST['body-fa'];

	$update_query = "UPDATE `news` SET `title_fa` = '$title_fa', `body_fa` = '$body_fa' WHERE `id` = '$news_id'";

	$res = doquery($update_query);

	$query = "SELECT * FROM `news` ORDER BY `id` DESC";

	$result = doquery($query);

	$index = 1;

	$str = "";

	while ($row = fetch($result)) {

		$top = 50 * $index;

		$str .= "<div class=\"news-list-item\" id=\"" . $row['id'] . "\">" .

			 	"<div class=\"news-id\">" . (int)$row['id'] . "</div>" .

			 	"<div class=\"news-summery\">" . $row['display_date'] . '<br>' . $row['title_fa'] . "</div> " .

			 	// "<div class=\"news-date\">" . $row['title_fa'] . " - " . substr($row['body_fa'], 0, 20) . '...' . "</div> " .

			 "</div>";

		$index++;

	}

	echo $str;

?>