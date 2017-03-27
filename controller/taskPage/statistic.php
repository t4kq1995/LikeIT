<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
	/* Include DataBase */
	require_once($_SERVER['DOCUMENT_ROOT'].'/hakaton/model/bd.php');
	mysqli_set_charset($mysqli, "utf8");

	$answer = array();

	/* Users */
	array_push($answer, array('total_users' => getUser('', $mysqli)));
	array_push($answer, array('total_programmers' => getUser(1, $mysqli)));
	array_push($answer, array('total_team_leaders' => getUser(2, $mysqli)));
	array_push($answer, array('total_leaders' => getUser(3, $mysqli)));
	/* Tasks */
	array_push($answer, array('total_tasks' => getTasks('', $mysqli)));
	array_push($answer, array('total_finish_tasks' => getTasks(1, $mysqli)));

	function getUser($cause, $mysqli) {
		if ($cause != '') {
			$query = "SELECT COUNT(*) as 'total' FROM `_users` WHERE `access` = '$cause'";
		} else {
			$query = "SELECT COUNT(*) as 'total' FROM `_users`";
		}
		$result = mysqli_query($mysqli, $query);
		$data = mysqli_fetch_assoc($result);
		return $data['total'];
	}

	function getTasks($cause, $mysqli) {
		if ($cause != '') {
			$query = "SELECT COUNT(*) as 'total' FROM `_tasks` WHERE `status` = '$cause'";
		} else {
			$query = "SELECT COUNT(*) as 'total' FROM `_tasks`";
		}
		$result = mysqli_query($mysqli, $query);
		$data = mysqli_fetch_assoc($result);
		return $data['total'];
	}