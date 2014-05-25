<?php 
require_once('templates/template-files.php');

get_header();?>

<div class="intro jumbotron screen">
	<div class="content">
		<h1>Discover your age</h1>
		<p>We all perceive time in a different way lorem ipsum conspecetur.</p>
		<a class="btn btn-lg btn-line btn-round" href="#instructions"><span class="glyphicon glyphicon-chevron-down"></span></a>
	</div>
</div>

<div id="instructions" class="instructions jumbotron screen">
	<div class="content">
		<p>You will be asked to press a button <em>every 20 seconds</em>.</p>
		<p>In total you will pres this button <em>6 times</em>.</p>
		<p>Use your intuition, not a clock, watch or phone.</p>
		<p>Good luck</p>
		<p><a href="#test" id="start-test" class="btn btn-lg btn-line">Start test</a></p>
	</div>
</div>

<div id="test" class="test jumbotron screen">
	<div class="content">
		<button id="test-btn" class="btn btn-lg btn-line">I think 20 seconds have passed</button>
		<div class="dots">
			<span class="dot dot-empty"></span>
			<span class="dot dot-empty"></span>
			<span class="dot dot-empty"></span>
			<span class="dot dot-empty"></span>
			<span class="dot dot-empty"></span>
			<span class="dot dot-empty"></span>
		</div>
	</div>
</div>

<?php get_footer();