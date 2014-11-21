<div class="result-item">

	<div class="result-item-my-estates">تمام آگهی های من</div>

<?php

	include_once 'core/database.php';
	include_once 'search-query.php';
	include_once 'database/states.php';
	include_once 'database/cities.php';
	include_once 'database/zone.php';

	$searchQuery = new SearchQuery('estate');

		if ($_SESSION['uid']){

			$searchQuery->simple('uid', $_SESSION['uid']);

		}

	$result = doquery($searchQuery->buildQuery());

	if ($result){

		for ($i = 0; $i < rows($result); $i++){

			$resultarray = fetch($result);

			generateData("امروز", $resultarray['total-price'], $resultarray['zirbana'], $resultarray['unit-price'], getStateName($resultarray['state']), getCityName($resultarray['city']), getZoneName($resultarray['zone']), $resultarray['address']);

		}
	}


	function generateData($date, $totalPrice, $zirbana, $gheimat, $state, $city, $zone, $address){

		$data = "

			<div class=\"estate-item\">

			<div class=\"date\">$date</div>

			<div class=\"total-price\">$totalPrice</div>

			<div class=\"area\">$zirbana متر</div>

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