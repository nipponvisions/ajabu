<?php
define('SIGN_UP_form', TRUE);
define('ajabu_links', TRUE);

include 'config.php';

//EXISTING USER
// 
//get data from form
$email_exists =   $_POST['your_email'];

//check db for record exist.
$sql = "SELECT Visitor_email FROM AJABU_VISITORS WHERE Visitor_email = '$email_exists'";

$result = $conn ->query($sql);

$row = mysqli_fetch_assoc($result);



if ($row ==!NULL){
	//if record exists

	var_dump($row);


	//header('Location:http://localhost/site/AJABU/welcome.php');
	//exit();

} else{
	// Stay on same page but java pulls up the signup form
	echo '  No records were found Please Sign UP : '.$email_exists;

	 include 'SIGN_UP_form.php';

}		
// free results				
mysqli_free_result($result);
$conn->close();



		include 'header.html';
		include'ajabu_links.php';

		?>

		<h1> This is sign_in.php  </h1>

		<?php
		// include 'SIGN_UP_form.php';


		?>
		</div><!--main -->


		<script type="text/javascript">
		// self executing function here after page loads 
		//or document . load/ready 
		(function() {
			document.getElementById("links").style.pointerEvents = "none";
			document.getElementById("form_containerup").style.visibility ="visible";
			// document.getElementById("caroldiv").style.opacity = " 0.4 ";
		})();

		</script>

	</body>
</html>
