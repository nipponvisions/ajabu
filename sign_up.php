<?php
//https://www.w3schools.com/php/php_mysql_insert.asp
include 'config.php';

// FOR NEW USERS 
//get values from signup form
$New_email = ( isset($_POST['new_email']) ) ? $_POST['new_email'] : '';
$Lastname =  ( isset($_POST['lastname']) ) ? $_POST['lastname'] : '';
$Firstname = ( isset($_POST['firstname']) ) ? $_POST['firstname'] : '';

// 1ST CHECK IF EMAIL EXISTS
$sql ="	SELECT `Visitor_email` FROM `ajabu_visitors` WHERE Visitor_email = '$New_email'";

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
 ?><pre><?php  var_dump($email_exists);  ?></pre> <?php 

if($email_exists == NULL){ 	/* null means email doesnt exist */

	//  insert the data into the dB
	$sql = "INSERT INTO `ajabu_visitors`(`visitor_email`, `LastName`, `FirstName`) VALUES
		('$New_email', '$Lastname', '$Firstname' )";

	// check sql errors
	if($conn->query($sql)===!TRUE){
		echo "Error: <br>"  . $conn->error;
		exit();
	}
	else{
		echo "New record created successfully".$New_email;
	}

}
else{

	echo "RECORD EXISTS ".$New_email;
}

//end connection
$conn->close();