<?php 
require_once('templates/template-files.php');

get_header();?>

<div class="intro jumbotron screen">
	<div class="content">
		<h1>Discover your age</h1>
		<p>We all perceive time in a different way lorem ipsum conspecetur.</p>
		<p><a href="#test"><span class="glyphicon glyphicon-chevron-down"></span></a></p>
	</div>
</div>

<div id="test" class="test jumbotron screen">
	<div class="content">
		<p>Tap the button whenever you think 20 seconds has past.</p>
		<p>Please don't use a phone, watch, or other time-telling devices.</p>
		<p>Still 6 remaining.</p>
	</div>
</div>

<?php get_footer();