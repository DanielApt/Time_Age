<?php

error_reporting(E_ALL);
ini_set('display_errors',
	True);

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

	//calculate the accuracy (in percentage); 0% being nonexistent/very fast; 100% being accurate; 200% being very slow;
	$accuracy = ($attempt1 + $attempt2 + $attempt3 + $attempt4 + $attempt5 + $attempt6)/$totalMs;

	//don't allow accuracy to go above 200%
	if($accuracy>2){
		$accuracy = 2;
	}

	$age = round(85 * $accuracy/2);

	if($age < 17){
		$description = 'Time is nice ‘n’ slow.';
		$video = 'http://iamapt.com/files/WinterTraffic.mp4';
	}
	if($age > 17 && $age < 34){
		$description = 'You\'re experiencing time a bit slower than it is.';
		$video  = 'http://iamapt.com/files/BirdsOnThePost.mp4';
	}
	if($age > 34 && $age < 51){
		$description = 'Seeing time exactly as it is. Pretty darn accurate';
		$video = 'http://iamapt.com/files/FroggerHighway.mp4';
	}
	if($age > 51 && $age < 68){
		$description = 'Time is starting to speed up.';
		$video = 'http://iamapt.com/files/NycTraffic.mp4';
	}
	if($age > 68){
		$description = 'Time moves fast for you, maybe you should try something new.';
		$video = 'http://iamapt.com/files/NightTraffic.mp4';
	}

	$results = array(
		'attempt-1' => $attempt1,
		'attempt-2' => $attempt2,
		'attempt-3' => $attempt3,
		'attempt-4' => $attempt4,
		'attempt-5' => $attempt5,
		'attempt-6' => $attempt6,
		'age' => $age,
		'description' => $description,
		'video' => $video
	);

	echo json_encode($results);

	die();
}else{

	die(	);
}
?>