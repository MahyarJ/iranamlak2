<?php

function generateEstateRow($id, $date, $totalPrice, $zirbana, $gheimat, $state, $city, $zone, $address, $estateId, $dealId){

	$estateType = '';

	$dealType = '';

	switch ($estateId) {

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


	switch ($dealId) {


		case '1':

			$dealType = 'رهن/اجاره';
			break;

		case '2':

			$dealType = 'فروش';
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

	$data = "

		<div class=\"estate-item\" id=\"$id\">

		<div class=\"date\">$date</div>

		<div class=\"total-price\">$totalPrice</div>

		<div class=\"area\">$zirbana متر</div>

		<div class=\"unit-price\">$gheimat</div>

		<div class=\"address\">

			<div class=\"address-item\">$state</div>

			<div class=\"address-item\">$city</div>

			<div class=\"address-item\">$zone</div>

			<div class=\"address-item full-address\">$address</div>

		</div>

		<div class=\"types\">

			<div class=\"type-item\">$estateType</div>

			<div class=\"type-item\">$dealType</div>

		</div>

	</div>
	";

	return $data;

}