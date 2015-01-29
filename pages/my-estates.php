<div class="result_item">

	<div class="result-item-my-estates">آگـــهـــی هـــای من</div>

	<?php

		include_once 'core/database.php';
		include_once 'search-query.php';
		include_once 'database/states.php';
		include_once 'database/cities.php';
		include_once 'database/zone.php';
		include_once 'generate-estate-row.php';

		$searchQuery = new SearchQuery('estate');

		if ($_SESSION['uid']){

			$searchQuery->simple('uid', $_SESSION['uid']);

		}

		$result = doquery($searchQuery->buildQuery());

		if ($result){

			for ($i = 0; $i < rows($result); $i++){

				$resultarray = fetch($result);

				$date = substr($resultarray['insert_date'],0,4) . "/" . substr($resultarray['insert_date'],4,2) . "/" . substr($resultarray['insert_date'],6,2);

				echo generateEstateRow($resultarray['id'], $date, $resultarray['total_price'], $resultarray['zirbana'], $resultarray['unit_price'], getStateName($resultarray['state']), getCityName($resultarray['city']), getZoneName($resultarray['zone']), $resultarray['address'], $resultarray['estate_type'], $resultarray['deal_type'], true);

			}
		}


	?>

</div>