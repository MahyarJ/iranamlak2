<?php

function generateEstateRow($id, $date, $totalPrice, $zirbana, $gheimat, $state, $city, $zone, $address){

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

			<div class=\"type-item\">فروش</div>

			<div class=\"type-item\">آپارتمان</div>

		</div>

	</div>
	";

	return $data;

}