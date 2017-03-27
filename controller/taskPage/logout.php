<?php
	session_start();
	/* Json Header */
	header('Content-type: application/json');

	unset($_SESSION['shared_future']['id']);
	$answer = array("status" => true);

	echo json_encode($answer);