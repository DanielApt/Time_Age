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

	//calculate the accuracy
	$accuracy = round((1 - abs(1 - ($attempt1 + $attempt2 + $attempt3 + $attempt4 + $attempt5 + $attempt6)/120000)) * 100);
	if($accuracy < 0){
		$accuracy = 0;
	}

	echo $accuracy;

	die();
}else{

	die(	);
}
?>