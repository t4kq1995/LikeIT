<?php
	session_start();
	/* Json Header */
	header('Content-type: application/json');
	/* Include DataBase */
	require_once('../../model/bd.php');

	/* Get data */
	$username = $_POST["username"];
	$password = md5(md5($_POST["password"]));
	$email = $_POST["email"];

	/* Charset */
	mysqli_set_charset($mysqli, "utf8");

	/* Form data */
	$query = "INSERT INTO `_users` (`username`, `password`, `email`) VALUES ('$username', '$password', '$email')";
	$result = mysqli_query($mysqli, $query);
	$id_user = mysqli_insert_id($mysqli);

	if (isset($id_user)) {
		$_SESSION['shared_future']['id'] = $id_user;
		$_SESSION['shared_future']['username'] = $username;
		$_SESSION['shared_future']['email'] = $password;
		$_SESSION['shared_future']['image'] = 'user.jpg';
		$_SESSION['shared_future']['access'] = 1;

		echo json_encode(array('status' => 'true'));
	} else {
		echo json_encode(array('status' => 'false'));
	}