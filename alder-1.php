
<?php
$current_page = 'gallery';
include "header.php";
include "nav.php";
?>
<div class="wrapper">
	<div class="container content">
		<div class="twelve columns padding-top">
			<div class="eight columns padding-bottom">
				<h2 class="left-text darkBrown mobile-name">Alder</h2>
				<img src="assets/lightbox/alder_01.jpg" class="large slides" id="img1">
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
					<h2 class="left-text darkBrown desktop-name">Alder</h2>
					<h3 class="left-text darkBrown"><strong>Technique</strong><br>Laminated Wood</h3>
					<h3 class="left-text darkBrown"><strong>Approximate Scale</strong><br>
						11" width<br>
					4" height</h3>
					<h3 class="left-text darkBrown"><strong>Availability</strong><br>Sold</h3>
					<p class="project-description"></p>
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
