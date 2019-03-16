
<?php
$current_page = 'gallery';
include "header.php";
include "nav.php";
?>

<div class="container">
	<div class="twelve columns padding-top padding-bottom">
		<div class="eight columns">
			<img src="assets/bowl-large@2x.jpg" class="large">
			<img src="assets/bowl-large@2x.jpg" class="large">
			<img src="assets/bowl-large@2x.jpg" class="large">
		</div>
		<div class="arrows">
			<div class="eight columns">
				<img src="assets/left-button.svg" class="left-arrow">
				<img src="assets/right-button.svg" class="right-arrow">
			</div>
			</div>
		<div class="four columns">
			<div class="close-button">
				<a href="gallery.php">
					<img src="assets/close-button.svg">
				</a>
			</div>
			<div class="decrease-padding">
				<h2 class="left-text darkBrown">Bowlname</h2>
				<h3 class="left-text darkBrown"><strong>year</strong><br>2018</h3>
				<h3 class="left-text darkBrown"><strong>Scale</strong><br>
					6" diameter<br>
				3 1/2" tall</h3>
				<p class="project-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
			</div>
		</div>
	</div>
	
</div>

<?php
include "footer.php";
?>