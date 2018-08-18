<?php

			define('ajabu_links', true);
			define('SIGN_UP_form', TRUE);
			include 'config.php';


				//EXISTING USER
				// check if record exists 
				$email_exists =   $_POST['your_email'];

					//check db for record exist.
					$sql = "SELECT Visitor_email FROM AJABU_VISITORS WHERE Visitor_email = '$email_exists'";

						$result = $conn ->query($sql);

						$row = mysqli_fetch_assoc($result);

						if ($row ==!NULL){
							// redirect to signup.php mark you sign up has no form 
							header('Location:http://localhost/site/AJABU/sign_up.php');

							} else{

							echo '  No records were found Please Sign UP : '.$email_exists;
							// Stay on same page but java pulls up the signup form
						}		

					// free results				
					mysqli_free_result($result);

				$conn->close();


			include 'header.html';
			include "ajabu_links.php";
			?>


				<h1> Ajabu Africa Two </h1>

				<p id=""> 
					Ajabu the uber driver from Mangu <br>
					some litelrature here forever. and a history of Mwarimu<br>
					Ajabu the uber driver from Mangu <br>
					some litelrature here forever. and a history of Mwarimu<br>
					Ajabu the uber driver from Mangu <br>
					some litelrature here forever. and a history of Mwarimu<br>
				</p>

				<div id="caroldiv">
					<img id="carol" width="200px" src="carol.jpg" alt="carol_pic" onMouseDown="delta()">

				</div>

			<?php
			include 'SIGN_UP_form.php';
			?>

				 
	<script type="text/javascript">
				// self executing function here after page loads 
				//or document . load/ready 
		(function() {
				 document.getElementById("form_containerup").style.visibility ="visible";
				document.getElementById("caroldiv").style.opacity = " 0.4 ";
		})();		
	</script>

 </body>
</html>
