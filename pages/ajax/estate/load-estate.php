<?php

	include_once '../core/database.php';

	$properties = [];

	$query = "SELECT * FROM `estate` WHERE `id` = '" . $_GET['estate-id'] . "'";

	$result = doquery($query);

	while ($estate = fetch($result))

		array_push($estates, array(

			"id"      => $estate['id'],
			"state" => $estate['state'],
			"city" => $estate['city'],
			"zone" => $estate['zone'],
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

		));

	echo json_encode($estates);

?>










