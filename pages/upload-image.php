<?php

	// require_once './core/database.php';

	// print_r($_FILES);

	// echo $_FILES["image"];

	// $filenameparts = explode(".", $_FILES["image"]["name"]);

	// $extension = end($filenameparts);

	$filename = $_GET['name'];

	// $filename = $_FILES["image"]["name"];

	session_start();

	$url = '../upld/' . $_SESSION['uid'] . '/';

	if (!file_exists($url)) {
	    mkdir($url, 0777, true);
	}

	if ($_FILES["image"]["error"] <= 0)

		if (!file_exists($url . $filename)) {

			move_uploaded_file($_FILES["image"]["tmp_name"], $url . $filename);

			// $uploaded = '1';
			// $title = $_POST['title'];
			// $content = $_POST['content'];
			// $date = $_POST['y'].convert_mounthname_to_number($_POST['m']).$_POST['d'];
			// $no = $_POST['no'];
			// $nokhbe_id = $_POST['nokhbe-id'];

			// $query = "INSERT INTO `letters` (`letter_no` , `nokhbe_id` , `title` , `content` , `date` , `filename`) VALUES ('$no','$nokhbe_id','$title','$content','$date','$filename')";

			// echo 'uploaded';
			// doquery($query);
	   		// header("Location: ../letters.php?fileup=1&id=" . $nokhbe_id);
		} else {

			unlink($url . $filename);

			move_uploaded_file($_FILES["image"]["tmp_name"], $url . $filename);

		}

		echo json_encode(array('url' => $url . $filename));

?>