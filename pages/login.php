<?php

	session_start();

	require_once 'core/database.php';

	$error = "";

	// echo 'hi->';

	if (isset($_POST['username']))
	{

		// echo 'form submition->';

		if (isset($_POST['confirm']))

		{

			// signup mode

			// echo 'signup->';

			$username = $_POST['username'];

			$password = $_POST['password'];

			$confirm  = $_POST['confirm'];

			$name     = $_POST['name'];

			if ($password == $confirm)
			{

				// ready to signup

				// echo 'check equallity->';

				$password = md5($password);

				$query = "INSERT INTO `users` (`name`, `username`, `password`, `is_active`) VALUES ('$name', '$username', '$password', 1)";

				doquery($query);

				// echo $query;

			} else {

				$error = "رمز عیور و تکرار آن یکسان نیست";

			}

		} else {

			// login mode

			// echo "login mode";

			$query = "SELECT * FROM `users` WHERE `username`='" . $_POST['username'] . "' AND `password`='" . md5($_POST['password']) . "'";

			$result = doquery($query);

			if (rows($result) == 1)
			{

				$user = fetch($result);

				$_SESSION['uid'] = $user['id'];

				$_SESSION['username'] = $user['username'];

				$_SESSION['name'] = $user['name'];

				$_SESSION['type'] = $user['type'];

			} else {

				$error = "نام کاربری یا رمز عبور نادریت است.";

			}


		}

	}

	if ($user['type'] == '0')

		header("Location: index.php?signin=ok&panel=my-estates");

	else if ($user['type'] == '5')

		header("Location: index.php?signin=ok&panel=review");

?>
