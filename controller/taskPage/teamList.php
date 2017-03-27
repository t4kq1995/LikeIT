<?php
	/* Include DataBase */
	require_once($_SERVER['DOCUMENT_ROOT'].'/hakaton/model/bd.php');
	/* Query */
	mysqli_set_charset($mysqli, "utf8");
	$query = "SELECT * FROM `_users`";
	$result = mysqli_query($mysqli, $query);