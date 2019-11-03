

		<?php
		//https://www.w3schools.com/php/php_mysql_insert.asp
		include 'config.php';


		// FOR ALL USERS
		//get values from THE FORMS
		$New_email = ( isset($_POST['new_email']) ) ? $_POST['new_email'] : '';
		$Your_email = ( isset($_POST['your_email']) ) ? $_POST['your_email'] : '';
		$Lastname =  ( isset($_POST['lastname']) ) ? $_POST['lastname'] : '';
		$Firstname = ( isset($_POST['firstname']) ) ? $_POST['firstname'] : '';
		
		// 1ST CHECK IF EMAIL EXISTS FOR ALL USERS
		$sql ="	SELECT `Visitor_email` FROM `ajabu_visitors` WHERE Visitor_email = '$New_email' OR Visitor_email = '$Your_email'";
		
		// check sql error
		if ($conn ->query($sql) == !TRUE) {
			# code...
			echo "Error: <br>" . $conn->error;
			// prevent further execution
			exit();
		}

		// 
		$result = $conn ->query($sql);
		$email_exists = mysqli_fetch_assoc($result);

		//deburg
		?><pre><?php   var_dump($email_exists);  ?></pre> <?php 


		if($email_exists == !NULL){ /*null means email doesnt exist  */
			echo "RECORD EXISTS ".$New_email .$Your_email;
			header("location:welcome.php");
			exit();
		}
		else{
			if($New_email){
				//  insert the data into the dB
				$sql = "INSERT INTO `ajabu_visitors`(`visitor_email`, `LastName`, `FirstName`) VALUES
				('$New_email', '$Lastname', '$Firstname' )";
				// check sql errors
				if($conn->query($sql)===!TRUE){
					echo "Error: <br>"  . $conn->error;
					exit();
				}
				else{
					echo"new email created  succsessfully".$New_email;
					header("location:welcome.php");
					exit();
				}
			}
			if ($Your_email) {
			// Stay on this page and bring up the signup form 
			echo " The email is new please sign up";
			}
		}
		//end connection
		$conn->close();

		define('ajabu_links', True);
		define('SIGN_UP_form', True);

		include 'header.html';
		include 'ajabu_links.php';
		?>
			<!-- NEW USER -->
			<!-- session set new user  -->           
			<div id="form_containerup">

				<h3> New User SIGN UP </h3>

				<form id="signup" method="post" action="sign_up.php">
					<ul>
						<li>  Visitor_email : <input type="text" name="new_email" required>  </li>
						<li> Last Name: <input type="text" name="lastname" ></li>
						<li> First Name: <input type="text" name="firstname" ></li>
						<li> <input id="sign_up" type="submit" value="SIGN UP"></li>
					</ul>
				</form>
			</div><!--form_containerup -->


			<script type="text/javascript">

			//self executing
			(function  () {
				// 
					document.getElementById("form_containerup").style.visibility = "visible";

			}());

		</script>

	</body>
</HTML>