<div class="result-item">

<?php

	include_once 'core/database.php';
	include_once 'post-data.php';
	include_once 'search-query.php';
	include_once 'database/states.php';
	include_once 'database/cities.php';
	include_once 'database/zone.php';

	$state = getValue('state');
	$city = getValue('city');
	$zone = getValue('zone');

	$priceRange = getValue('price-range-field');
	// print_r($priceRange);

	// die();

	$areaRange = getValue('area-range-field');
	$roomRange = getValue('room-range-field');
	$ageRange = getValue('age-range-field');

	$dealType = getValue('deal');
	$estateType = getValue('estate');


	$searchQuery = new SearchQuery('estate');

	if ($state){

		$searchQuery->simple('state', $state);

	}

	if ($city){

		$searchQuery->simple('city', $city);

	}

	if ($zone){

		$searchQuery->simple('zone', $zone);

	}

	if ($dealType){

		$searchQuery->simple('deal-type', $dealType);

	}

	if ($estateType){

		$searchQuery->simple('estate-type', $estateType);

	}

	// if ($checkboxGroup){

	// 	$searchQuery->like('options', $checkboxGroup);

	// }

	if ($priceRange){

		$searchQuery->between('total-price', $priceRange[0], $priceRange[1]);

	}

	if ($areaRange){

		$searchQuery->between('zamin', $areaRange[0], $areaRange[1]);

	}

	if ($roomRange){

		$searchQuery->between('room', $roomRange[0], $roomRange[1]);

	}

	// if ($ageRange){

	// 	$searchQuery->between('age', $ageRange[0], $ageRange[1]);

	// }

	// print_r($searchQuery->buildQuery());

	// die();

	// $result = doquery($searchQuery->buildQuery());

	// if ($result){

	// 	for ($i = 0; $i < rows($result); $i++){

	// 		$resultarray = fetch($result);

	// 		generateData("امروز", $resultarray['total-price'], $resultarray['zirbana'], $resultarray['unit-price'], getStateName($resultarray['state']), getCityName($resultarray['city']), getZoneName($resultarray['zone']), $resultarray['address']);

	// 	}
	// }


	function generateData($date, $totalPrice, $zirbana, $gheimat, $state, $city, $zone, $address){

		$data = "

			<div class=\"estate-item\">

			<div class=\"date\">$date</div>

			<div class=\"total-price\">$totalPrice</div>

			<div class=\"area\">$zirbana مترمربع</div>

			<div class=\"unit-price\">$gheimat</div>

			<div class=\"address\">

				<div class=\"address-item\">$state</div>

				<div class=\"address-item\">$city</div>

				<div class=\"address-item\">$zone</div>

				<div class=\"address-item\">$address</div>

			</div>

			<div class=\"types\">

				<div class=\"type-item\">فروش</div>

				<div class=\"type-item\">آپارتمان</div>

			</div>

		</div>
		";

		echo $data;

	}

?>

</div>