<?php

	include_once '../core/database.php';

	if ($_GET['selected'] == 0)

		switch ($_GET['type']) {

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

	else

		switch ($_GET['type']) {

			case 'state' :

				$query = "UPDATE `states` SET `name`='" . $_GET['added-state-name'] . "' WHERE `id`='" . $_GET['selected'] . "'";

				break;

			case 'city' :

				$query = "UPDATE `cities` SET `name`='" . $_GET['added-city-name'] . "' WHERE `id`='" . $_GET['selected'] . "'";

				break;

			case 'zone' :

				$query = "UPDATE `zones` SET `name`='" . $_GET['added-zone-name'] . "' WHERE `id`='" . $_GET['selected'] . "'";

				break;

		}

	$result = doquery($query);

	// $query

	echo $query;

?>
