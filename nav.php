<div class="container nav">
	<div class="two columns">
		<h3 class="nav-link <?php if ($current_page=="profile") {echo "current";} ?>"><a href="profile.php" class="fade">Profile</a></h3>
	</div>
	<div class="two columns">
		<h3 class="nav-link <?php if ($current_page=="gallery") {echo "current";} ?>"><a href="gallery.php">Gallery</a></h3>
	</div>
	<div class="four columns">
		<h3><a href="index.php" class="index fade"><img class="logo-small" src="assets/logo-small@2x.png"></a></h3>
	</div>
	<div class="two columns">
		<h3 class="nav-link <?php if ($current_page=="events") {echo "current";} ?>"><a href="events.php" class="fade">Events</a></h3>
	</div>
	<div class="two columns">
		<h3 class="nav-link <?php if ($current_page=="contact") {echo "current";} ?>"><a href="contact.php" class="fade">Contact</a></h3>
	</div>
</div>

<!-- <script type="text/javascript">
	$(document).ready(function() {
  $('.logo-small').css('display', 'none');
  $('.logo-small').stop().delay(100).fadeTo(1000,1);
});
</script> -->