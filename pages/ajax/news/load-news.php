<?php

	include_once '../../core/database.php';

	$query = "SELECT * FROM  `news` WHERE `id` = '" . $_GET['news-id'] . "'";

	$result = fetch(doquery($query));

	$arr = array(

		"id"      => $result['id'],
		"titleFa" => $result['title_fa'],
		"titleEn" => $result['title_en'],
		"bodyFa"  => $result['body_fa'],
		"bodyEn"  => $result['body_en']

	);

	echo json_encode($arr);
