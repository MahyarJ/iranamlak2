<?php

// include_once '../core/database.php';

function getStateName($id)
{

	$query = "SELECT * FROM `states` WHERE `id` = $id";

	$result = doquery($query);

	if ($result){

		$resultarray = fetch($result);

		return $resultarray['name'];

	}

	return "";

}

function getAllTheStates()
{

	$query = "SELECT * FROM `states`";

	$state_result = doquery($query);

	$resultarray = array();

	if ($state_result){

		for ($i = 0; $i < rows($state_result); $i++){

			$resultarray[] = fetch($state_result);

		}

	}

	return $resultarray;

}