<?php

include_once 'core/database.php';

function getCityName($id)
{

	$query = "SELECT * FROM `cities` WHERE `id` = $id";

	$result = doquery($query);

	if ($result){

		$resultarray = fetch($result);

		return $resultarray['name'];

	}

	return "";

}

function getAllTheCities($stateID)
{

	$query = "SELECT * FROM `cities` WHERE `state_id` = $stateID";

	$cities_result = doquery($query);

	$resultarray = [];

	if ($cities_result){

		for ($i = 0; $i < mysqli_num_rows($cities_result); $i++){

			$resultarray[] = fetch($cities_result);

		}

	}

	return $resultarray;

}