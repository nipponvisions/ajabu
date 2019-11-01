<?php
	include 'config.php';


		// FOR NEW USERs -  ADD RECORD 
		// SQL DETAILS  GOES HERE
		$New_email    = ( isset($_POST['new_email']) ) ? $_POST['new_email'] : '';
		$Lastname =  ( isset($_POST['lastname']) ) ? $_POST['lastname'] : '';
		$Firstname = ( isset($_POST['firstname']) ) ? $_POST['firstname'] : '';




		// check if user exists 
		// check if record exists 
$email_exists =   $_POST['your_email'];

//check db for record exist.
$sql = "SELECT Visitor_email FROM AJABU_VISITORS WHERE Visitor_email = '$email_exists'";

$result = $conn ->query($sql);

$row = mysqli_fetch_assoc($result);


var_dump($row);



if ($row ==!NULL){
	//if record exists

	echo 'record exists';
	//header("Location:welcome.php"); /* Redirect browser */
	//exit();

	

} else{
	// Stay on same page but java pulls up the signup form
	echo '  No records were found Please Sign UP : '.$email_exists;
}		
// free results				
mysqli_free_result($result);
$conn->close();





















			// $sql = "INSERT INTO AJABU_VISITORS ( Visitor_email, LastName, FirstName) VALUES ('$New_email', '$Lastname', '$Firstname')";

				
			// 	// 
			// 	// check if insertio was succes 
			// 	if (!$conn->query($sql) === TRUE) {

			// 		echo 'error <br>'.mysqli_error($conn);

			// 		} else {

			// 		// new record created  or 
			// 		// if record exists  
			// 		header("Location:welcome.php"); /* Redirect browser */
			// 	}	
			// 	$conn->close();