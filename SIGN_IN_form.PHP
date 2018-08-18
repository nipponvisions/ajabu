<?php
//prevent direct acces
if (!defined('SIGN_IN_form')) {
	exit("this file cant be accessed directly");
}

?>
<!-- EXISTING  USER  -->
<!-- session set sign in -->

<div id="form_containerin" 
	<div class="form_div">
		<h3> Member  SIGN IN </h3>
        
		<form id="signin" method="post" action="sign_in.php">
				Your Email: <input type="text" name="your_email" required> <br>
            	Last Name: <input type="text" name="lastname"><br>
                First Name: <input type="text" name="firstname"><br>
         	<input id="sign_in" type="submit" value="SIGN IN"  >
         
         </form>  
    </div><!--form_div -->             
</div><!--form_containerin -->
        