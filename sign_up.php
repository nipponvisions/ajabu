<?php

session_start();
define('ajabu_links', True);

	include 'config.php';


		// FOR NEW USERs -  ADD RECORD 
		// SQL DETAILS  GOES HERE
		$New_email    = ( isset($_POST['new_email']) ) ? $_POST['new_email'] : '';
		$Lastname =  ( isset($_POST['lastname']) ) ? $_POST['lastname'] : '';
		$Firstname = ( isset($_POST['firstname']) ) ? $_POST['firstname'] : '';

			$sql = "INSERT INTO AJABU_VISITORS ( Visitor_email, LastName, FirstName) VALUES ('$New_email', '$Lastname', '$Firstname')";

				// if the form was submitted successfully then run the code below
				if ($conn->query($sql) === TRUE) {

					echo '  New record has been created : '.$New_email;

					} else {
					// $conn->error. $New_email;
					echo  ' <div id="feedbackdiv"> Record Exists </div>';
				}	

				$conn->close();


	include 'header.html';
	include  'ajabu_links.php';

?>

	<!-- activate the links -->
	<script> 
        document.getElementById("links").style.pointerEvents = "all";    
    </script>



    	<!-- rest of the HTML continues  -->
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

	</body>
</html>



