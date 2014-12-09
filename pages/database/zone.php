<?php

// include_once '../core/database.php';

function getZoneName($id)
{

	$query = "SELECT * FROM `zones` WHERE `id` = $id";

	$result = doquery($query);

	if ($result){

		$resultarray = fetch($result);

		return $resultarray['name'];

	}

	return "";

}

function getAllTheZones($cityID)
{

	$query = "SELECT * FROM `zones` WHERE `city_id` = $cityID";

	$zones_result = doquery($query);

	$resultarray = array();

	if ($zones_result){

		for ($i = 0; $i < mysqli_num_rows($zones_result); $i++){

			$resultarray[] = fetch($zones_result);

		}

	}

	return $resultarray;

}