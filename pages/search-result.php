<div class="result-item">

<?php

	include_once 'core/database.php';
	include_once 'post-data.php';
	include_once 'search-query.php';
	include_once 'database/states.php';
	include_once 'database/cities.php';
	include_once 'database/zone.php';
	include_once 'generate-estate-row.php';

	$state = getValue('state');
	$city = getValue('city');
	$zone = getValue('zone');

	$priceRange = getValue('price-range');
	$areaRange = getValue('area-range');
	$roomRange = getValue('room-range');
	$ageRange = getValue('age-range');

	$dealType = getValue('deal');
	$estateType = getValue('estate');

	$sortBy = getValue('sortby');
	$sort = '';
	if ($sortBy == false || $sortBy == 'date' || $sortBy == 'تاریخ')
	{
		$sort = 'insert_date';
	}
	else if ($sortBy == 'price' || $sortBy == 'قیمت')
	{
		$sort = 'total_price';
	}

	$order = getValue('order');
	$order = $order == false ? 'DESC' : $order;

	$checkboxGroup = array();

	$checkboxGroup[1] = getValue('shofaj') == 'on' ? '1' : '0';
	$checkboxGroup[2] = getValue('pakage') == 'on' ? '1' : '0';
	$checkboxGroup[3] = getValue('bokhari') == 'on' ? '1' : '0';
	$checkboxGroup[4] = getValue('kooler') == 'on' ? '1' : '0';
	$checkboxGroup[5] = getValue('split') == 'on' ? '1' : '0';
	$checkboxGroup[6] = getValue('chiler') == 'on' ? '1' : '0';
	$checkboxGroup[7] = getValue('fankoel') == 'on' ? '1' : '0';

	$checkboxGroup[8] = getValue('labi') == 'on' ? '1' : '0';
	$checkboxGroup[9] = getValue('hayat') == 'on' ? '1' : '0';
	$checkboxGroup[10] = getValue('hayatkhalvat') == 'on' ? '1' : '0';
	$checkboxGroup[11] = getValue('anbari') == 'on' ? '1' : '0';
	$checkboxGroup[12] = getValue('balkon') == 'on' ? '1' : '0';
	$checkboxGroup[13] = getValue('zirzamin') == 'on' ? '1' : '0';
	$checkboxGroup[14] = getValue('parking') == 'on' ? '1' : '0';
	$checkboxGroup[15] = getValue('pasio') == 'on' ? '1' : '0';

	$checkboxGroup[16] = getValue('open') == 'on' ? '1' : '0';
	$checkboxGroup[17] = getValue('asansor') == 'on' ? '1' : '0';
	$checkboxGroup[18] = getValue('mostakhdem') == 'on' ? '1' : '0';
	$checkboxGroup[19] = getValue('seraidar') == 'on' ? '1' : '0';
	$checkboxGroup[20] = getValue('pool') == 'on' ? '1' : '0';
	$checkboxGroup[21] = getValue('sona') == 'on' ? '1' : '0';
	$checkboxGroup[22] = getValue('jakoozi') == 'on' ? '1' : '0';

	$checkboxGroup[23] = getValue('donabsh') == 'on' ? '1' : '0';
	$checkboxGroup[24] = getValue('barmeidan') == 'on' ? '1' : '0';
	$checkboxGroup[25] = getValue('dakhelkuche') == 'on' ? '1' : '0';
	$checkboxGroup[26] = getValue('dakhelpasaj') == 'on' ? '1' : '0';

	$searchQuery = new SearchQuery('estate');

	if ($state)
	{

		$searchQuery->simple('state', $state);

	}

	if ($city)
	{

		$searchQuery->simple('city', $city);

	}

	if ($zone)
	{

		$searchQuery->simple('zone', $zone);

	}

	if ($dealType)
	{

		$searchQuery->simple('deal_type', $dealType);

	}

	if ($estateType)
	{

		$searchQuery->simple('estate_type', $estateType);

	}

	if ($checkboxGroup)
	{

		$searchQuery->like('options', $checkboxGroup);

	}

	if ($priceRange)
	{

		$priceRangeArr = json_decode($priceRange);

		$searchQuery->between('total_price', $priceRangeArr[0], $priceRangeArr[1]);

	}

	if ($areaRange)
	{

		$areaRangeArr = json_decode($areaRange);

		$searchQuery->between('zamin', $areaRangeArr[0], $areaRangeArr[1]);

	}

	if ($roomRange)
	{

		$roomRangeArr = json_decode($roomRange);

		$searchQuery->between('room', $roomRangeArr[0], $roomRangeArr[1]);

	}

	if ($ageRange)
	{

		$ageRangeArr = json_decode($ageRange);

		$searchQuery->between('age', $ageRangeArr[0], $ageRangeArr[1]);

	}

	$count = getValue('count');
	$page = getValue('page');

	$count = $count == false ? '10' : $count;
	$page = $page == false ? '1' : $page;

	$start = ($page - 1) * $count;

	$totalCount = doquery($searchQuery->buildCountQuery());

	$totalCountInt = (0 + ($totalCount->fetch_assoc()['count']));

	if ($start >= $totalCountInt)
	{
		$start = $totalCountInt - $count;
	}

	$query = $searchQuery->buildQuery();

	$query = $query . " ORDER BY `" . $sort . "` " . $order;

	if ($totalCountInt > $count)
	{

		$query = $query . " LIMIT " . $count . " OFFSET " . $start;

	}

	$result = doquery($query);

	if ($result)
	{

		for ($i = 0; $i < rows($result); $i++)
		{

			$resultarray = fetch($result);

			$date = substr($resultarray['insert_date'],0,4) . "/" . substr($resultarray['insert_date'],4,2) . "/" . substr($resultarray['insert_date'],6,2);

			echo generateEstateRow($resultarray['id'], $date, $resultarray['total_price'], $resultarray['zirbana'], $resultarray['unit_price'], getStateName($resultarray['state']), getCityName($resultarray['city']), getZoneName($resultarray['zone']), $resultarray['address']);

		}
	}


	echo "</div>";


	if ($totalCountInt > $count)
	{

		echo "<div class='pagination'>";

		for ($i = 0, $j = 1; $i < $totalCountInt; $j++, $i = $i + $count)
		{

			if ($j > ($start / $count) - 4 && $j <= ($start / $count) + 6)

				echo createPage($i, $j, $dealType, $estateType, $count, $sortBy, $order, $start);

		}

		echo "</div>";
	}

	function createPage($page, $number, $dealType, $estateType, $count, $sortBy, $order, $weAreAt)
	{

		if ($page == $weAreAt) return "<span class='pagination-wearehere-number'>" . $number . "</span>";

		return "<a class='pagination-number' href=?panel=search&deal=" . $dealType . "&estate=" . $estateType . "&page=" . $number . "&count=" . $count . "&sortby=" . $sortBy . "&order=" . $order . ">" . $number . "</a>";

	}