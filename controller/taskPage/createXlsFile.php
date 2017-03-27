<?php
	session_start();
	/* Json Header */
	header('Content-type: application/json');
	/* Include DataBase */
	require_once('../../model/bd.php');
	require_once('createTask.php');

	$answer = array();

	/* Get data */
	$sourcePath = $_FILES['tasks']['tmp_name'];
	$targetPath = "../../upload/".$_FILES['tasks']['name'];
	if (move_uploaded_file($sourcePath, $targetPath)) {
		chmod($targetPath, 0777);
		require_once('../php-excel-reader/excel_reader2.php');
		require_once('spread/SpreadsheetReader.php');

		$Reader = new SpreadsheetReader($targetPath);

		foreach ($Reader as $row) {
			createTask($row[0], $mysqli);
		}

		$answer['status'] = true;
	} else {
		$answer['status'] = false;
	}

	echo json_encode($answer);