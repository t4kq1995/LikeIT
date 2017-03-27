<?php

function createTask($task, $mysqli) {
	/* Json Header */
	header('Content-type: application/json');

	mysqli_set_charset($mysqli, "utf8");

	/* Get current team leader */
	$query = "SELECT * FROM `_users` WHERE `access` = '2' LIMIT 0,1";
	$result = mysqli_query($mysqli, $query);
	$data = mysqli_fetch_assoc($result);

	if (isset($data['id_user'])) {
		$user = $data['id_user'];
	} else {
		$user = $_SESSION['shared_future']['id'];
	}

	/* Form data */
	$query = "INSERT INTO `_tasks` (`name_task`, `user_id`, `date_creation`) VALUES ('$task', '$user', '".date("Y-m-d")."')";
	$result = mysqli_query($mysqli, $query);
	$id_task = mysqli_insert_id($mysqli);
}