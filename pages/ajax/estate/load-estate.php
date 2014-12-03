<?php

	include_once '../../core/database.php';
	include_once '../../database/states.php';
	include_once '../../database/cities.php';
	include_once '../../database/zone.php';

	$properties = [];

	$query = "SELECT * FROM `estate` WHERE `id` = '" . $_GET['estate-id'] . "'";

	$estate = fetch(doquery($query));

	$estateType = '';

	$dealType = '';

	switch ($estate['estate_type']) {

		case '1':

			$estateType = 'خانه | ویلا';
			break;

		case '2':

			$estateType = 'زمین';
			break;

		case '3':

			$estateType = 'آپارتمان';
			break;

		case '4':

			$estateType = 'اداری | مطب | دفتر';
			break;

		case '5':

			$estateType = 'تجاری | پاساژ | مغازه';
			break;

		case '6':

			$estateType = 'سوله | کارگاه | کارخانه';
			break;

		case '7':

			$estateType = 'چهاردیواری';
			break;

		case '8':

			$estateType = 'باغ | زمین کشاورزی';
			break;

		case '9':

			$estateType = 'دامداری | دامپروری';
			break;

	}


	switch ($estate['deal_type']) {


		case '1':

			$dealType = 'رهن و اجاره';
			break;

		case '2':

			$dealType = 'هرید و فروش';
			break;

		case '3':

			$dealType = 'پیش فروش';
			break;

		case '4':

			$dealType = 'مشارکت';
			break;

		case '5':

			$dealType = 'معاوضه';
			break;

	}


	$properties = array(

		"id"      => $estate['id'],
		"state" => getStateName($estate['state']),
		"city" => getCityName($estate['city']),
		"zone" => getZoneName($estate['zone']),
		"address" => $estate['address'],
		"estateType" => $estateType,
		"dealType" => $dealType,
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










