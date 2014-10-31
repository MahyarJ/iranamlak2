<?php

	include_once '../core/database.php';

	$zones = [];

	$query = "SELECT * FROM `zones` WHERE `state_id` = '" . $_GET['state-id'] . "' AND `city_id` = '" . $_GET['city-id'] . "'";

	$result = doquery($query);

	while ($zone = fetch($result))

		array_push($zones, array(

			"id"      => $zone['id'],
			"stateID" => $zone['state_id'],
			"cityiD"  => $zone['city_id'],
			"name"    => $zone['name']

		));

	echo json_encode($zones);

?>