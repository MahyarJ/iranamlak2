<div class="result-item">

	<div class="result-item-my-estates">تمام آگهی های تایید نشده</div>

	<?php

		include_once 'core/database.php';
		include_once 'post-data.php';
		include_once 'search-query.php';
		include_once 'database/states.php';
		include_once 'database/cities.php';
		include_once 'database/zone.php';
		include_once 'generate-estate-row.php';

		$searchQuery = new SearchQuery('estate');

		$searchQuery->simple('approved', '0');

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

		$query = $query . " ORDER BY `insert_date` DESC";

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

			if ($totalCountInt > $start + $count - 1)
			{
				echo createPage(-1, $page + 1, "«", $count, 0);
				echo createPage(-1, ceil($totalCountInt / $count), "‹", $count, 0);
			}

			for ($i = 0, $j = 1; $i < $totalCountInt; $j++, $i = $i + $count)
			{

				if ($j > ($start / $count) - 4 && $j <= ($start / $count) + 6)

					echo createPage($i, $j, $j, $count, $start);

			}

			if (1 < $page)
			{

				echo createPage(-1, 1, "›", $count, 0);
				echo createPage(-1, $page-1, "»", $count, 0);

			}
			echo "</div>";

		}

		function createPage($page, $number, $text, $count, $weAreAt)
		{

			if ($page == $weAreAt) return "<span class='pagination-wearehere-number'>" . $text . "</span>";

			return "<a class='pagination-number' href=?panel=review&page=" . $number . "&count=" . $count . ">" . $text . "</a>";

		}