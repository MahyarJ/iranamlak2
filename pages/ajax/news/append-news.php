<?php

	include_once '../../core/jdf.php';

	include_once '../../core/database.php';

	$insdate = jdate('Ymd');

	$dispdate = jdate('l d F Y');

	$insert_query = "INSERT INTO `news` (`date`, `display_date`) VALUES ('$insdate', '$dispdate')";

	$res = doquery($insert_query);

	$query = "SELECT * FROM  `news` WHERE id = ( SELECT MAX( id ) FROM  `news` )";

	$res = fetch(doquery($query));

	$str = "<div class=\"news-list-item\" id=\"" . $res['id'] . "\">" .

		      "<div class=\"news-id\">" . (int)$res['id'] . "</div>" .

		      "<div class=\"news-date\">" . $res['display_date'] . "</div>" .

		    "</div>";

	echo $str;

?>