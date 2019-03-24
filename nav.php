<div class="nav">
	<div class="container">
		<div class="two columns">
			<h3 class="nav-link <?php if ($current_page=="about") {echo "current";} ?>"><a href="about.php" class="fade">About</a></h3>
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
<div class="mobile-nav">
	<div class="container">
		<div class="logo" id="large-logo-mobile">
			<a href="index.php" class="index fade"><img src="assets/logo-large_desktop.png" class="logo-lg"></a>
		</div>
		<div class="logo" id="small-logo-mobile">
			<a href="index.php" class="index fade content"><img src="assets/logo-small.png" class="logo-sm"></a>
		</div>
		<div class="menu" id="showMenu">
			<img src="assets/mobile-menu.svg">
		</div>
	</div>
</div>
<div class="menu-open" style="display: none;">
	<div class="close" id="hideMenu">
		<img src="assets/close-button.svg">
	</div>
	<div class="container">
		<div class="mobile-nav-items padding-top padding-bottom">
			<h1 class="padding-top padding-bottom offWhite mobile-nav-link <?php if ($current_page=="home") {echo "current";} ?>"><a href="index.php" class="offWhite fade">Home</a></h1>
			<h1 class="padding-bottom offWhite mobile-nav-link <?php if ($current_page=="about") {echo "current";} ?>"><a href="about.php" class="offWhite fade">About</a></h1>
			<h1 class="padding-bottom offWhite mobile-nav-link <?php if ($current_page=="gallery") {echo "current";} ?>"><a href="gallery.php" class="offWhite fade">Gallery</a></h1>
			<h1 class="padding-bottom offWhite mobile-nav-link <?php if ($current_page=="events") {echo "current";} ?>"><a href="events.php" class="offWhite fade">Events</a></h1>
			<h1 class="mobile-nav-link <?php if ($current_page=="contact") {echo "current";} ?>"><a href="contact.php" class="offWhite fade">Contact</a></h1>
		</div>
	</div>
</div>



