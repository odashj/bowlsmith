<div class="nav">
	<div class="container">
		<div class="two columns">
			<h3 class="nav-link <?php if ($current_page=="profile") {echo "current";} ?>"><a href="profile.php" class="fade">Profile</a></h3>
		</div>
		<div class="two columns">
			<h3 class="nav-link <?php if ($current_page=="gallery") {echo "current";} ?>"><a href="gallery.php">Gallery</a></h3>
		</div>
		<div class="four columns">
			<div class="logo" id="large-logo">
				<a href="index.php" class="index fade"><img src="assets/logo-large_desktop.png" class="logo-lg"></a>
			</div>
			<div class="logo" id="small-logo">
				<a href="index.php" class="index fade content"><img src="assets/logo-small.png" class="logo-sm"></a>
			</div>
			<p></p>
		</div>
		<div class="two columns">
			<h3 class="nav-link <?php if ($current_page=="events") {echo "current";} ?>"><a href="events.php" class="fade">Events</a></h3>
		</div>
		<div class="two columns">
			<h3 class="nav-link <?php if ($current_page=="contact") {echo "current";} ?>"><a href="contact.php" class="fade">Contact</a></h3>
		</div>
	</div>
</div>