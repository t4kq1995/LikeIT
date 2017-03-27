<?php
	/* Json Header */
	header('Content-type: application/json');
	/* Include DataBase */
	require_once($_SERVER['DOCUMENT_ROOT'].'/hakaton/model/bd.php');

	$id_user = $_POST['id_user'];
	$id_task = $_POST['id_task'];

	/* Query */
	mysqli_set_charset($mysqli, "utf8");
	$query = "UPDATE `_tasks` SET `user_id` = '$id_user' WHERE `id_task` = '$id_task'";
	$result = mysqli_query($mysqli, $query);

	echo json_encode(array('status' => $result));