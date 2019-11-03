<?php
//prevent direct acces
if (!defined('SIGN_IN_form')) {
	exit("this file 'SIGN_IN_form' cant be accessed directly");
}



?>
<!-- EXISTING  USER  -->
<!-- session set sign in -->

<div id="form_containerin">
	
	<h3> Member  SIGN IN </h3>
        
	<form id="signin" method="post" action="sign_up.php">
		<ul>
			<li> Your Email: <input type="text" name="your_email" required>  </li>  
    <!--     	<li>  Last Name: <input type="text" name="lastname"></li> 
            <li> First Name: <input type="text" name="firstname"></li>  -->
     		<li>  <input id="sign_in" type="submit" value="SIGN IN"></li>	
		</ul>
     </form>  
          
</div><!--form_containerin -->
        