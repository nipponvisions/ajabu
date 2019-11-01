<?php
// prevent direct acces
if (!defined('SIGN_UP_form')) {
	exit('file "SIGN_UP_FORM " is not  accessible directly');
}

define('SIGN_IN_form', True);

?>

<!-- NEW USER -->
<!-- session set new user  -->           
<div id="form_containerup">

	<h3> New User SIGN UP </h3>

	<form id="signup" method="post" action="sign_up.php">
		<ul>
			<li>  Visitor_email : <input type="text" name="new_email" required>  </li>
			<li> Last Name: <input type="text" name="lastname"></li>
			<li> First Name: <input type="text" name="firstname"></li>
			<li> <input id="sign_up" type="submit" value="SIGN UP"></li>
		</ul>
	</form>
</div><!--form_containerup -->