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

			$dealType = 'رهن‌و‌اجاره';
			break;

		case '2':

			$dealType = 'فروش';
			break;

		case '3':

			$dealType = 'پیش&zwnjفروش';
			break;

		case '4':

			$dealType = 'مشارکت';
			break;

		case '5':

			$dealType = 'معاوضه';
			break;

	}

	$heatOptions = array();
	$areaExtentions = array();
	$khuneOptions = array();
	$maghazeOptions = array();

	if ($estate['options'][0] == '1') $heatOptions[] = 'شوفاژ';
	if ($estate['options'][1] == '1') $heatOptions[] = 'پکیج';
	if ($estate['options'][2] == '1') $heatOptions[] = 'بخاری';
	if ($estate['options'][3] == '1') $heatOptions[] = 'کولر';
	if ($estate['options'][4] == '1') $heatOptions[] = 'اسپیلت';
	if ($estate['options'][5] == '1') $heatOptions[] = 'چیلر';
	if ($estate['options'][6] == '1') $heatOptions[] = 'فن کوئل';

	if ($estate['options'][7] == '1') $areaExtentions[] = 'لابی';
	if ($estate['options'][8] == '1') $areaExtentions[] = 'حیاط';
	if ($estate['options'][9] == '1') $areaExtentions[] = 'حیاط خلوت';
	if ($estate['options'][10] == '1') $areaExtentions[] = 'انباری';
	if ($estate['options'][11] == '1') $areaExtentions[] = 'بالکن';
	if ($estate['options'][12] == '1') $areaExtentions[] = 'زیرزمین';
	if ($estate['options'][13] == '1') $areaExtentions[] = 'پارکینگ';
	if ($estate['options'][14] == '1') $areaExtentions[] = 'پاسیو';

	if ($estate['options'][15] == '1') $khuneOptions[] = 'آشپزخانه اوپن';
	if ($estate['options'][16] == '1') $khuneOptions[] = 'آسانسور';
	if ($estate['options'][17] == '1') $khuneOptions[] = 'مستخدم';
	if ($estate['options'][18] == '1') $khuneOptions[] = 'سرایدار';
	if ($estate['options'][19] == '1') $khuneOptions[] = 'استخر';
	if ($estate['options'][20] == '1') $khuneOptions[] = 'سونا';
	if ($estate['options'][21] == '1') $khuneOptions[] = 'جکوزی';

	if ($estate['options'][22] == '1') $maghazeOptions[] = 'دونبش';
	if ($estate['options'][23] == '1') $maghazeOptions[] = 'بر میدان';
	if ($estate['options'][24] == '1') $maghazeOptions[] = 'داخل کوچه';
	if ($estate['options'][25] == '1') $maghazeOptions[] = 'داخل پاساژ';

	$properties = array(

		"id"      => $estate['id'],
		"state" => getStateName($estate['state']),
		"city" => getCityName($estate['city']),
		"zone" => getZoneName($estate['zone']),
		"address" => $estate['address'],
		"estateTypeId" => $estate['estate_type'],
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
		"heatOptions" => $heatOptions,
		"areaExtentions" => $areaExtentions,
		"khuneOptions" => $khuneOptions,
		"maghazeOptions" => $maghazeOptions,
		"uid" => $estate['uid'],
		"insertDate" => $estate['insert_date'],

	);

	for ($i=1; $i <= 3 ; $i++) {

		$url = '../upld/' . $estate['uid'] . '/' . $estate['id'] . '/filename' . $i . '.jpg';

		if (file_exists('../../' . $url)) $properties['pic' . $i] = $url;

	}

	echo json_encode($properties);
