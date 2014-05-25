<?php
function get_header($title){
	if($title==''){
		$title='What is your time perception age?';
	}
	echo <<<HERE

<!doctype html>
<html>
<head>
	<title>$title</title>
	<link rel="stylesheet" href="css/bootstrap-theme.min.css"/>
	<link rel="stylesheet" href="css/bootstrap.min.css"/>
	<link rel="stylesheet" href="css/bigvideo.css"/>
	<link rel="stylesheet" href="css/style.css"/>
	<script src="js/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/video.js"></script>
	<script src="js/bigvideo.js"></script>
	<script src="js/waypoints.min.js"></script>
	<script src="js/script.js"></script>
	<meta name="viewport" content="width=device-width">
</head>
<body>


HERE;
}

function get_footer(){
	echo <<<HERE

</body>
</html>

HERE;
}