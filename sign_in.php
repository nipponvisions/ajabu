<?php

// session_start();
define('ajabu_links', True);
define('SIGN_UP_form', true);

// define('SIGN_UP_form', True);


include 'config.php';
include 'ajabu_links.php';


			
			//EXISTING USER
			// check if record exists
	$email_exists =   $_POST['your_email'];

					//check db for record exist.
		$sql = "SELECT Visitor_email FROM AJABU_VISITORS WHERE Visitor_email = '$email_exists'";
				
				$result = $conn ->query($sql);
				
						$row = mysqli_fetch_assoc($result);
						
						If($row ==!NULL){
							// 
						  //echo $row['Visitor_email'];
						  header('Location:http://localhost/site/AJABU/sign_up.php');
						  
						} else{
							//if null
							// mysqli_error($conn);
							 echo '  No records were found Please Sign UP : '.$email_exists;
							 // header('Location:http://localhost/site/AJABU/AJABU_HOME.php');
						}		
						
		// free results				
	mysqli_free_result($result);
	
$conn->close();

?>


<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title> sign_in </title>
<link rel="stylesheet" type="text/css" href="ajabu.css">

</head>

<body>



	<div class="barner">

			<h1> Halo Ajabu </h1>
				</div>


<h1> Ajabu Africa Two </h1>

<p id="">  Ajabu the uber driver from Mangu <br>
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
