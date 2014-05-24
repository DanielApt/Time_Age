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
	<script src="js/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
</head>
<body>
	<div class="container">


HERE;
}

function get_footer(){
	echo <<<HERE

	</div><!--end container-->
</body>
</html>

HERE;
}