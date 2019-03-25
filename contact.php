
<?php
$current_page = 'contact';
include "header.php";
include "contact-header.php";
include "nav.php";
?>
<div class="wrapper">
	<div class="container content">
		<div class="six columns offset-by-three padding-top padding-bottom">
			<h2 class="darkBrown center-text">Want to reach out?</h2>
			<p class="center-text">For orders and general inquiries, please contact Jesse Smith: <a href="mailto:jesse@bowlsmith.com">jesse@bowlsmith.com</a></p>
		</div>
		<!-- <div class="five columns padding-top padding-bottom">  
			<div id="jcf">
				<form action="" method="post" id="contact_form">
					<input class="contact_name" type="text" name="name" id="name" placeholder="Name" />
					<input class="contact_email" type="email" name="email" id="email" placeholder="Email" />
					<input class="contact_subject" type="text" name="subject" id="subject" placeholder="Subject" />
					<textarea class="contact_message" name="message" id="message" placeholder="Write your message..."></textarea>
					<button class="submit" type="submit" id="send_message">Send</button>
				</form>
			</div>
		</div> -->
	</div>
</div>
<?php
include "footer.php";
?>
<?php
include "scripts.php";
?>