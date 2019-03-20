
<?php
$current_page = 'gallery';
include "header.php";
include "nav.php";
?>
<div class="wrapper">
	<div class="container content">
		<div class="twelve columns padding-top">
			<div class="eight columns padding-bottom">
				<h2 class="left-text darkBrown mobile-name">Walnut</h2>
				<img src="assets/lightbox/walnut_05.jpg" class="large slides" id="img1">
<!-- 				<img src="assets/bowl-large2.jpg" class="large slides" id="img1">
				<img src="assets/bowl-large3.jpg" class="large slides" id="img1"> -->
			</div>
			<!-- <div class="arrows">
				<div class="eight columns">
					<button class="left-arrow" onclick="plusDivs(-1)"><img src="assets/left-button.svg"></button>
					<button class="right-arrow" onclick="plusDivs(+1)"><img src="assets/right-button.svg"></button>
				</div>
			</div> -->
			<div class="four columns offset-by-eight bowl-text">
				<div class="close-button">
					<a href="gallery.php" class="fade">
						<img src="assets/close-button-gallery.svg">
					</a>
				</div>
				<div class="decrease-padding padding-bottom">
					<h2 class="left-text darkBrown desktop-name">Walnut</h2>
					<h3 class="left-text darkBrown"><strong>Technique</strong><br>Wood Turning</h3>
					<h3 class="left-text darkBrown"><strong>Scale</strong><br>
						6" diameter<br>
					3 1/2" tall</h3>
					<p class="project-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
				</div>
			</div>
		</div>
	</div>
</div>

<?php
include "footer.php";
?>
<?php
include "scripts.php";
?>

<script>
	var slideIndex = 1;
	showDivs(slideIndex);

	function plusDivs(n) {
		showDivs(slideIndex += n);
	}

	function showDivs(n) {
		var i;
		var x = document.getElementsByClassName("slides");
		if (n > x.length) {
			slideIndex = 1
		}
		if (n < 1) {
			slideIndex = x.length
		};
		for (i = 0; i < x.length; i++) {
			x[i].style.opacity = 0;
		}
		x[slideIndex - 1].style.opacity = 1;
	}
</script>
