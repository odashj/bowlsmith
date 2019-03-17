<?php
$current_page = 'gallery';
include "header.php";
include "nav.php";
?>
<div class="wrapper">
	<div class="container content">
		<div class="twelve columns padding-top">
			<div class="four columns">
				<a href="project.php" class="fade">
					<div class="thumbnail">
						<div class="thumbnail-parent">
							<div class="thumbnail-text">
								<h2 class="center-text offWhite">Bowlname</h2>
								<h3 class="center-text offWhite decrease-padding"><strong>Wood</strong></h3>
							</div>
						</div>
						<img src="assets/bowl-thumbnail1.jpg" class="thumbnail-img">
					</div>
				</a>
			</div>
			<div class="four columns">
				<a href="project.php" class="fade">
					<div class="thumbnail">
						<div class="thumbnail-parent">
							<div class="thumbnail-text">
								<h2 class="center-text offWhite">Bowlname</h2>
								<h3 class="center-text offWhite decrease-padding"><strong>Wood</strong></h3>
							</div>
						</div>
						<img src="assets/bowl-thumbnail1.jpg" class="thumbnail-img">
					</div>
				</a>
			</div>
			<div class="four columns">
				<a href="project.php" class="fade">
					<div class="thumbnail">
						<div class="thumbnail-parent">
							<div class="thumbnail-text">
								<h2 class="center-text offWhite">Bowlname</h2>
								<h3 class="center-text offWhite decrease-padding"><strong>Wood</strong></h3>
							</div>
						</div>
						<img src="assets/bowl-thumbnail1.jpg" class="thumbnail-img">
					</div>
				</a>
			</div>
		</div>
		<div class="twelve columns padding-grid">
			<div class="four columns">
				<a href="project.php" class="fade">
					<div class="thumbnail">
						<div class="thumbnail-parent">
							<div class="thumbnail-text">
								<h2 class="center-text offWhite">Bowlname</h2>
								<h3 class="center-text offWhite decrease-padding"><strong>Wood</strong></h3>
							</div>
						</div>
						<img src="assets/bowl-thumbnail1.jpg" class="thumbnail-img">
					</div>
				</a>
			</div>
			<div class="four columns">
				<a href="project.php" class="fade">
					<div class="thumbnail">
						<div class="thumbnail-parent">
							<div class="thumbnail-text">
								<h2 class="center-text offWhite">Bowlname</h2>
								<h3 class="center-text offWhite decrease-padding"><strong>Wood</strong></h3>
							</div>
						</div>
						<img src="assets/bowl-thumbnail1.jpg" class="thumbnail-img">
					</div>
				</a>
			</div>
			<div class="four columns">
				<a href="project.php">
					<div class="thumbnail">
						<div class="thumbnail-parent">
							<div class="thumbnail-text">
								<h2 class="center-text offWhite">Bowlname</h2>
								<h3 class="center-text offWhite decrease-padding"><strong>Wood</strong></h3>
							</div>
						</div>
						<img src="assets/bowl-thumbnail1.jpg" class="thumbnail-img">
					</div>
				</a>
			</div>
		</div>
		<div class="twelve columns padding-bottom padding-grid">
			<div class="four columns">
				<a href="project.php" class="fade">
					<div class="thumbnail">
						<div class="thumbnail-parent">
							<div class="thumbnail-text">
								<h2 class="center-text offWhite">Bowlname</h2>
								<h3 class="center-text offWhite decrease-padding"><strong>Wood</strong></h3>
							</div>
						</div>
						<img src="assets/bowl-thumbnail1.jpg" class="thumbnail-img">
					</div>
				</a>
			</div>
			<div class="four columns">
				<a href="project.php" class="fade">
					<div class="thumbnail">
						<div class="thumbnail-parent">
							<div class="thumbnail-text">
								<h2 class="center-text offWhite">Bowlname</h2>
								<h3 class="center-text offWhite decrease-padding"><strong>Wood</strong></h3>
							</div>
						</div>
						<img src="assets/bowl-thumbnail1.jpg" class="thumbnail-img">
					</div>
				</a>
			</div>
			<div class="four columns">
				<a href="project.php" class="fade">
					<div class="thumbnail">
						<div class="thumbnail-parent">
							<div class="thumbnail-text">
								<h2 class="center-text offWhite">Bowlname</h2>
								<h3 class="center-text offWhite decrease-padding"><strong>Wood</strong></h3>
							</div>
						</div>
						<img src="assets/bowl-thumbnail1.jpg" class="thumbnail-img">
					</div>
				</a>
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

<script type="text/javascript" src="js/jquery-1.3.2.js"></script>
<script type="text/javascript">

	$(document).ready(function(){
		$(".thumbnail-parent").hover(
			function () {
				$(this).addClass("show", 300);
			},
			function () {
				$(this).removeClass("show", 300);
			}
			);
	});
</script>