<?php

	include_once 'core/database.php';

	if (isset($_GET['submit-state'])) $type = 'state';

	if (isset($_GET['submit-city']))  $type = 'city';

	if (isset($_GET['submit-zone']))  $type = 'zone';

	switch ($type) {

		case 'state' :

			$query = "INSERT INTO `states` (`name`) VALUES ('" . $_GET['added-state-name'] . "')";

			break;

		case 'city' :

			$query = "INSERT INTO `cities` (`state_id`, `name`) VALUES (" . $_GET['state'] . ", '" . $_GET['added-city-name'] . "')";

			break;

		case 'zone' :

			$query = "INSERT INTO `zones` (`state_id`, `city_id`, `name`)  VALUES (" . $_GET['state'] . ", " .  $_GET['city'] . ", '" . $_GET['added-zone-name'] . "')";

			break;

	}

	$result = doquery($query);

	header("Location: ../?panel=add-location");

?>
