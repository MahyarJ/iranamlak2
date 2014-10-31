<?php

	include_once '../core/database.php';

	$cities = [];

	$query = "SELECT * FROM `cities` WHERE `state_id` = '" . $_GET['state-id'] . "'";

	$result = doquery($query);

	while ($city = fetch($result))

		array_push($cities, array(

			"id"      => $city['id'],
			"stateID" => $city['state_id'],
			"name"    => $city['name']

		));

	echo json_encode($cities);

?>