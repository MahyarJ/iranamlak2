<?php

session_start();
require_once 'core/PostData.php';
include_once 'core/database.php';
include_once 'core/jdf.php';

function storeEstate($estateQuery, $update=false)
{

	$insdate = jdate('Ymd');

	$id = getValue('id');

	$state = getValue('state');

	$city = getValue('city');
	$zone = getValue('zone');
	$address = getValue('address');

	$dealType = getValue('deal-type');
	$estateType = getValue('estate-type');

	$floor = getValue('floor');
	$kafpoosh = getValue('kafpoosh');
	$nama = getValue('nama');
	$room = getValue('room');

	$totalPrice = getValue('total-price');
	$unitPrice = getValue('unit-price');
	$zamin = getValue('zamin');
	$zirbana = getValue('zirbana');

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

	$filename1 = getValue('filename1');
	$filename2 = getValue('filename2');
	$filename3 = getValue('filename3');

	if ($state){

		$estateQuery->add('state', $state);

	}

	if ($city){

		$estateQuery->add('city', $city);

	}

	if ($zone){

		$estateQuery->add('zone', $zone);

	}

	if ($address){

		$estateQuery->add('address', $address);

	}

	if ($dealType){

		$estateQuery->add('deal_type', $dealType);

	}

	if ($estateType){

		$estateQuery->add('estate_type', $estateType);

	}

	if ($checkboxGroup){

		$serialized = "";

		foreach ($checkboxGroup as $key => $value)
		{

			$serialized = $serialized . "$value";

		}

		$estateQuery->add('options', $serialized);

	}

	if ($floor){

		$estateQuery->add('floor', $floor);

	}

	if ($kafpoosh){

		$estateQuery->add('kafpoosh', $kafpoosh);

	}

	if ($nama){

		$estateQuery->add('nama', $nama);

	}

	if ($room){

		$estateQuery->add('room', $room);

	}

	if ($totalPrice){

		$estateQuery->add('total_price', $totalPrice);

	}

	if ($unitPrice){

		$estateQuery->add('unit_price', $unitPrice);

	}

	if ($zamin){

		$estateQuery->add('zamin', $zamin);

	}

	if ($zirbana){

		$estateQuery->add('zirbana', $zirbana);

	}

	if ($_SESSION['uid']){

		$estateQuery->add('insert_date', $insdate);

		if ($update) {

			$x = $estateQuery->buildQuery($_SESSION['uid'], $id);

			$result = doquery($x);

		} else {

			$estateQuery->add('uid', $_SESSION['uid']);

			$result = doquery($estateQuery->buildQuery());

		}


		if ($result){

			$id = getId();

			if ($filename1){

				$oldUrl = '../upld/' . $_SESSION['uid'] . '/';

				$url = $oldUrl . $id . '/';

				if (!file_exists($url)) {
				    mkdir($url, 0777, true);
				}

				rename(($oldUrl . $filename1), ($url . $filename1));

			}

			if ($filename2){

				$oldUrl = '../upld/' . $_SESSION['uid'] . '/';

				$url = $oldUrl . $id . '/';

				if (!file_exists($url)) {
				    mkdir($url, 0777, true);
				}

				rename(($oldUrl . $filename2), ($url . $filename2));

			}

			if ($filename3){

				$oldUrl = '../upld/' . $_SESSION['uid'] . '/';

				$url = $oldUrl . $id . '/';

				if (!file_exists($url)) {
				    mkdir($url, 0777, true);
				}

				rename(($oldUrl . $filename3), ($url . $filename3));

			}

		}

	}
}


if (getValue('insert-submit')) $type = 'insert-estate';
if (getValue('update-submit')) $type = 'update-estate';

if ($type == "insert-estate"){

	include_once 'core/new-estate-query.php';

	$newEstateQuery = new NewEstateQuery('estate');

	storeEstate($newEstateQuery);

} else if ($type == "update-estate"){

	include_once 'core/update-estate-query.php';

	$updateEstateQuery = new UpdateEstateQuery('estate');

	storeEstate($updateEstateQuery, true);

}



header("Location: ./?panel=my-estates");