<div class="result-item">

	<div class="result-item-my-estates">تمام آگهی های تایید نشده</div>

<?php

	include_once 'core/database.php';
	include_once 'search-query.php';
	include_once 'database/states.php';
	include_once 'database/cities.php';
	include_once 'database/zone.php';
	include_once 'generate-estate-row.php';

	$searchQuery = new SearchQuery('estate');

	$searchQuery->simple('approved', '0');

	$result = doquery($searchQuery->buildQuery());

	if ($result){

		for ($i = 0; $i < rows($result); $i++){

			$resultarray = fetch($result);

			echo generateEstateRow("امروز", $resultarray['total-price'], $resultarray['zirbana'], $resultarray['unit-price'], getStateName($resultarray['state']), getCityName($resultarray['city']), getZoneName($resultarray['zone']), $resultarray['address']);

		}
	}

?>

</div>