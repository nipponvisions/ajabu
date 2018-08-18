<?php
if (!defined('SIGN_UP_form')) {
	exit('file not accessible directly');
}

?>
        <!-- NEW USER -->
        <!-- session set new user  --> 
           
<div id="form_containerup">
	<div class="form_div">

		<h3> New User SIGN UP </h3>

		<form id="signup" method="post" action="sign_up.php">
                Visitor_email : <input type="text" name="new_email" required> <br>
                Last Name: <input type="text" name="lastname"><br>
                First Name: <input type="text" name="firstname"><br>
            
 		<input id="sign_up" type="submit" value="SIGN UP"  >

		</form>

	</div>
</div><!--form_containerup -->