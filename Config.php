<?php
/* template name: config.php
author: moses mathenge
description:  logging credentials to the mysql database Ajabu

*/

//data base
$servername = "localhost";
$username = "root";
$password ="cecilia4teddy" ;
$dbname  = "ajabu";


// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) { 
	die("Connection failed: " . $conn->connect_error);
}		
?>