<?php
	/* Include DataBase */
	require_once($_SERVER['DOCUMENT_ROOT'].'/hakaton/model/bd.php');

	$access = $_SESSION['shared_future']['access'];

	/* Query */
	mysqli_set_charset($mysqli, "utf8");

	// If it is a user
	if ($access == 1) {
		$query = "SELECT * FROM `_tasks` INNER JOIN `_users` ON _tasks.user_id = _users.id_user WHERE _tasks.user_id = '".$_SESSION['shared_future']['id']."' ORDER BY _tasks.id_task DESC";
	} else {
		$query = "SELECT * FROM `_tasks` INNER JOIN `_users` ON _tasks.user_id = _users.id_user ORDER BY _tasks.id_task DESC";
	}

	$result = mysqli_query($mysqli, $query);