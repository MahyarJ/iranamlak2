<?php

	session_start();

	include_once 'core/database.php';
	require_once 'core/PostData.php';

	if (getValue('insert-submit')) $type = 'insert-estate';

	switch ($type) {

		case 'insert-estate' :

			include_once 'core/new-estate-query.php';

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

			$newEstateQuery = new NewEstateQuery('estate');

			if ($state){

				$newEstateQuery->add('state', $state);

			}

			if ($city){

				$newEstateQuery->add('city', $city);

			}

			if ($zone){

				$newEstateQuery->add('zone', $zone);

			}

			if ($address){

				$newEstateQuery->add('address', $address);

			}

			if ($dealType){

				$newEstateQuery->add('deal-type', $dealType);

			}

			if ($estateType){

				$newEstateQuery->add('estate-type', $estateType);

			}

			if ($checkboxGroup){

				$serialized = "";

				foreach ($checkboxGroup as $key => $value)
				{

					$serialized = $serialized . "$value";

				}

				$newEstateQuery->add('options', $serialized);

			}

			if ($floor){

				$newEstateQuery->add('floor', $floor);

			}

			if ($kafpoosh){

				$newEstateQuery->add('kafpoosh', $kafpoosh);

			}

			if ($nama){

				$newEstateQuery->add('nama', $nama);

			}

			if ($room){

				$newEstateQuery->add('room', $room);

			}

			if ($totalPrice){

				$newEstateQuery->add('total-price', $totalPrice);

			}

			if ($unitPrice){

				$newEstateQuery->add('unit-price', $unitPrice);

			}

			if ($zamin){

				$newEstateQuery->add('zamin', $zamin);

			}

			if ($zirbana){

				$newEstateQuery->add('zirbana', $zirbana);

			}

			if ($_SESSION['uid']){

				$newEstateQuery->add('uid', $_SESSION['uid']);

			}

			$result = doquery($newEstateQuery->buildQuery());


			if ($result){

				$id = getId();

				if ($filename1)

					if ($filename1 != '')

						// create folder $id inside user move it to folder named this $id
						echo '1';

				if ($filename2)

					if ($filename1 != '')

						// create folder $id inside user move it to folder named this $id
						echo "2";

				if ($filename3)

					if ($filename1 != '')

						// create folder $id inside user move it to folder named this $id
						echo '3';

			// 	## redirect to success page

			}
	}

	// header("Location: ../?panel=add-content");