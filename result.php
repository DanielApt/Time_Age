<?php

error_reporting(E_ALL);
ini_set('display_errors', True);

if(
	isset($_POST['starting-time']) &&
	isset($_POST['attempt-1']) &&
	isset($_POST['attempt-2']) &&
	isset($_POST['attempt-3']) &&
	isset($_POST['attempt-4']) &&
	isset($_POST['attempt-5']) &&
	isset($_POST['attempt-6'])
){
	//store our variables
	$attempt1 = intval($_POST['attempt-1']) - intval($_POST['starting-time']);
	$attempt2 = intval($_POST['attempt-2']) - intval($_POST['attempt-1']);
	$attempt3 = intval($_POST['attempt-3']) - intval($_POST['attempt-2']);
	$attempt4 = intval($_POST['attempt-4']) - intval($_POST['attempt-3']);
	$attempt5 = intval($_POST['attempt-5']) - intval($_POST['attempt-4']);
	$attempt6 = intval($_POST['attempt-6']) - intval($_POST['attempt-5']);

	$totalMs = 12000; //2 minutes

	//calculate the accuracy (in factor (e.g 0.2)); 0 being nonexistent/very fast; 1 being accurate; 2 being very slow;
	$accuracy = ($attempt1 + $attempt2 + $attempt3 + $attempt4 + $attempt5 + $attempt6)/$totalMs;

	//don't allow accuracy to go above 200%
	if($accuracy>200){
		$accuracy = 2;
	}

	$results = array(
		'attempt-1' => $attempt1,
		'attempt-2' => $attempt2,
		'attempt-3' => $attempt3,
		'attempt-4' => $attempt4,
		'attempt-5' => $attempt5,
		'attempt-6' => $attempt6,
		'accuracy' => $accuracy
	);

	echo json_encode($results);

	die();
}else{

	die(	);
}
?>