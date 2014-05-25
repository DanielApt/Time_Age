<?php 
require_once('templates/template-files.php');

get_header();?>

<div class="intro jumbotron screen">
	<div class="content">
		<h1>Discover your age</h1>
		<p>We all perceive time in a different way lorem ipsum conspecetur.</p>
		<a class="btn btn-lg btn-line btn-round" href="#test"><span class="glyphicon glyphicon-chevron-down"></span></a>
	</div>
</div>

<div id="test" class="test jumbotron screen">
	<div class="content">
		<p>You will be asked to press a button <em>every 20 second</em>.</p>
		<p>In total you will pres this button <em>6 times</em>.</p>
		<p>Use your intuition, not a clock, watch or phone.</p>
		<p>Good luck</p>
	</div>
</div>

<?php get_footer();