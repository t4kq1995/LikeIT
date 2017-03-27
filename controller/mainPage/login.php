<?php
	session_start();
	/* Json Header */
	header('Content-type: application/json');
	/* Include DataBase */
	require_once('../../model/bd.php');

	$username = $_POST["username"];
	$password = md5(md5($_POST["password"]));
	$answer = array();

	/* Query */
	mysqli_set_charset($mysqli, "utf8");
	$query = "SELECT * FROM `_users` WHERE `username`='$username' AND `password`='$password'";
	$result = mysqli_query($mysqli, $query);
	$data = mysqli_fetch_assoc($result);
	if (isset($data["id_user"])) {
		$_SESSION['shared_future']['id'] = $data['id_user'];
		$_SESSION['shared_future']['username'] = $data['username'];
		$_SESSION['shared_future']['email'] = $data['email'];
		$_SESSION['shared_future']['image'] = $data['img'];
		$_SESSION['shared_future']['access'] = $data['access'];

		$answer["status"] = true;
 	} else {
 		$answer["status"] = false;
 	}

	echo json_encode($answer);