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
		$description = 'Time is nice ‘n‘ slow.';
		$video = 'http://pdl.vimeocdn.com/10747/502/255631400.mp4?token2=1401149435_97c6c166238d149f9311c4b7f3da3b0a&aksessionid=bd30123490fab414';
	}
	if($age > 17 && $age < 34){
		$description = 'You\'re experiencing time a bit slower than it is.';
		$video = 'http://pdl.vimeocdn.com/33065/710/255798136.mp4?token2=1401149527_1da26d5fe2d29edfe94fa1c9f0dffd03&aksessionid=deb2d9f6fc46f9e5';
	}
	if($age > 34 && $age < 51){
		$description = 'Seeing time exactly as it is. Pretty darn accurate';
		$video = 'http://pdl.vimeocdn.com/47549/489/256348222.mp4?token2=1401149518_9d035d2ed6b076e15b164c61cdc8ca7d&aksessionid=fdce7c32c002f7d0';
	}
	if($age > 51 && $age < 68){
		$description = 'Time is starting to speed up.';
		$video = 'http://pdl.vimeocdn.com/55697/388/251600588.mp4?token2=1401149606_0f2c61ad76fe1502cb7ac79ead12d5a1&aksessionid=2fe5a911799120f1';
	}
	if($age > 68){
		$description = 'Time is fast like a rollercoaster.';
		$video = 'http://pdl.vimeocdn.com/37591/911/152995785.mp4?token2=1401150866_79971f4350c52b53eec4d596ccd9a27e&aksessionid=7ae6187e03dc06a0';
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