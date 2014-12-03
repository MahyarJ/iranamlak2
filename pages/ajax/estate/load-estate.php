<?php

	include_once '../../core/database.php';
	include_once '../../database/states.php';
	include_once '../../database/cities.php';
	include_once '../../database/zone.php';

	$properties = [];

	$query = "SELECT * FROM `estate` WHERE `id` = '" . $_GET['estate-id'] . "'";

	$estate = fetch(doquery($query));

	$properties = array(

		"id"      => $estate['id'],
		"state" => getStateName($estate['state']),
		"city" => getCityName($estate['city']),
		"zone" => getZoneName($estate['zone']),
		"address" => $estate['address'],
		"estateType" => $estate['estate_type'],
		"dealType" => $estate['deal_type'],
		"nama" => $estate['nama'],
		"unitPrice" => $estate['unit_price'],
		"totalPrice" => $estate['total_price'],
		"zamin" => $estate['zamin'],
		"zirbana" => $estate['zirbana'],
		"floor" => $estate['floor'],
		"room" => $estate['room'],
		"kafpoosh" => $estate['kafpoosh'],
		"options" => $estate['options'],
		"uid" => $estate['uid'],
		"insertDate" => $estate['insert_date'],

	);

	echo json_encode($properties);

?>










