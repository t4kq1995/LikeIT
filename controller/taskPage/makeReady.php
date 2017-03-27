<?php
	/* Json Header */
	header('Content-type: application/json');
	/* Include DataBase */
	require_once($_SERVER['DOCUMENT_ROOT'].'/hakaton/model/bd.php');

	$task_id = $_POST['id_task'];

	/* Query */
	mysqli_set_charset($mysqli, "utf8");
	$query = "UPDATE `_tasks` SET `status` = '1' WHERE `id_task` = '$task_id'";
	$result = mysqli_query($mysqli, $query);

	echo json_encode(array('status' => $result));