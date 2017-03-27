<?php
	/* Session start */
	session_start();

	/* Include DB and create task function */
	require_once('../../model/bd.php');
	require_once('createTask.php');

	createTask($_POST['task'], $mysqli);

	echo json_encode(array('status' => 'true'));