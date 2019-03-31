
<?php
$current_page = 'contact';
include "header.php";
include "contact-header.php";
include "nav.php";
?>
<div class="wrapper">
	<div class="container content">
		<div class="five columns offset-by-one padding-top">
			<h2 class="darkBrown left-text">Want to reach out?</h2>
			<p class="left-text">For orders and general inquiries, please complete the form or contact Jesse Smith directly: <a href="mailto:jesse@bowlsmith.com">jesse@bowlsmith.com</a></p>
		</div>
 		<div class="five columns padding-top padding-bottom">  
			<div id="jcf">
				<form name="contactform" method="post" action="send_form_email.php">
					<label for="first_name">First Name</label>
					<input  type="text" name="first_name" maxlength="50" size="30">
					<label for="last_name">Last Name</label>
					<input  type="text" name="last_name" maxlength="50" size="30">
					<label for="email">Email Address</label>
					<input  type="text" name="email" maxlength="80" size="30">
					<label for="comments">Message</label>
					<textarea  name="comments" maxlength="1000" cols="25" rows="6"></textarea>
					<input type="submit" id="send-button" value="Send">
				</form>
			</div>
		</div>
	
	<!-- <form name="contactform" method="post" action="send_form_email.php">
		<table width="450px">
			<tr>
				<td valign="top">
					<label for="first_name">First Name *</label>
				</td>
				<td valign="top">
					<input  type="text" name="first_name" maxlength="50" size="30">
				</td>
			</tr>
			<tr>
				<td valign="top">
					<label for="last_name">Last Name *</label>
				</td>
				<td valign="top">
					<input  type="text" name="last_name" maxlength="50" size="30">
				</td>
			</tr>
			<tr>
				<td valign="top">
					<label for="email">Email Address *</label>
				</td>
				<td valign="top">
					<input  type="text" name="email" maxlength="80" size="30">
				</td>
			</tr>
			<tr>
				<td valign="top">
					<label for="telephone">Telephone Number</label>
				</td>
				<td valign="top">
					<input  type="text" name="telephone" maxlength="30" size="30">
				</td>
			</tr>
			<tr>
				<td valign="top">
					<label for="comments">Comments *</label>
				</td>
				<td valign="top">
					<textarea  name="comments" maxlength="1000" cols="25" rows="6"></textarea>
				</td>
			</tr>
			<tr>
				<td colspan="2" style="text-align:center">
					<input type="submit" value="Submit"> 
				</td>
			</tr>
		</table>
	</form> -->
</div>
</div>
<?php
include "footer.php";
?>
<?php
include "scripts.php";
?>