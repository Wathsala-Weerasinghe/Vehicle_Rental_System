	
<?php


if (isset($_POST["SUBMIT"])) {


	$Name = $_POST["Name"];
	$Email = $_POST["Email"];
	$phonenumber = $_POST["phonenumber"];


	include_once "contact_usdb.php";



	$sql = "INSERT INTO `contact_us`(`Name`, `Email`, `phonenumber`) VALUES ('$Name','$Email','$phonenumber')";




	if (mysqli_query($conn, $sql)) {
		echo "THANKS FOR USING OUR SERVICE WE WILL CONTACT YOU ";
	} else {
		echo "fail values";
	}
}

?>











