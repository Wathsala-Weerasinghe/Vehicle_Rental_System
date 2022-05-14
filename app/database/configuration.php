   <!-- this is the page which is used to connecct to the database -->
<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "vehicle_rental";
//The connection object
$conn = new mysqli($servername , $username, $password, $database );

//Check connection
	if($conn->connect_error)
	{
		die("connection failed:".$conn->connect_error);
	}
	echo"Connected successfully";
?>
