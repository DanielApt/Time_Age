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

	$totalMs = 120000; //2 minutes

	//calculate the accuracy (in percentage); 0% being nonexistent/very fast; 100% being accurate; 200% being very slow;
	$accuracy = ($attempt1 + $attempt2 + $attempt3 + $attempt4 + $attempt5 + $attempt6)/$totalMs;

	//don't allow accuracy to go above 200%
	if($accuracy>2){
		$accuracy = 2;
	}

	$age = round(pow(2-$accuracy, 2)/0.04);

	if($age > 89){
		$age = 90;
	}
	if($age < 1){
		$age = 1;
	}

	$description = '';
	$video = '';

	if($age <= 8){
		$description = 'Time appears to barely be moving at all for you.';
		$video = 'http://iamapt.com/files/videos/Wheel-Slow.mp4';
	}
	if($age > 8 && $age <= 18){
		$description = 'Snail pace might be too generous an expression for how time seems to you.';
		$video  = 'http://iamapt.com/files/videos/Pages.mp4';
	}
	if($age > 18 && $age <= 23){
		$description = 'Time seems to be going by at a leisurely pace.';
		$video  = 'http://iamapt.com/files/videos/Elevator.mp4';
	}
	if($age > 23 && $age <= 27){
		$description = 'Nothing to report, you see time pretty much as it is.';
		$video = 'http://iamapt.com/files/videos/Walking.mp4';
	}
	if($age > 28 && $age <= 31){
		$description = 'Time is going past just a little faster than it should be.';
		$video = 'http://iamapt.com/files/videos/Escalator.mp4';
	}
	if($age > 31 && $age <= 51){
		$description = 'Time seems to be chugging away at quite a pace.';
		$video = 'http://iamapt.com/files/videos/Hub.mp4';
	}
	if($age > 51 && $age <= 68){
		$description = 'You seem to be experiencing life in the fast lane.';
		$video = 'http://iamapt.com/files/videos/Gearset.mp4';
	}
	if($age > 68 && $age < 88){
		$description = 'Bullet trains move slower than you, life appears to be whizzing past.';
		$video = 'http://iamapt.com/files/videos/LED-Type.mp4';
	}
	if($age > 89){
		$description = 'Life is a blur, you probably already read this ages ago.';
		$video = 'http://iamapt.com/files/videos/LED-Type.mp4';
	}

	$results = array(
		'accuracy' => $accuracy,
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