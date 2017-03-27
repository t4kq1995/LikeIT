<?php
	/* Include DataBase */
	require_once($_SERVER['DOCUMENT_ROOT'].'/hakaton/model/bd.php');

	$user_list = array();

	/* Query */
	mysqli_set_charset($mysqli, "utf8");
	$query = "SELECT * FROM `_users` WHERE access = '1'";
	$users = mysqli_query($mysqli, $query);

	while($user = mysqli_fetch_assoc($users)) {
		array_push($user_list, array('username' => $user['username'], 'id_user' => $user['id_user']));
	}