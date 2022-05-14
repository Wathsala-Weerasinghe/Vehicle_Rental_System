<!--This is page where query coded for the submition of the strike details form in the 'AdminPhp' page.-->

<!--link the configurationfile-->
<?php
	include_once'../../app/database/configuration.php';
?>
<?php
	//store the form values into variables
	$name1 = $_POST["fname1"];
	$name2 = $_POST["fname2"];
	$email = $_POST["mail"];
	$contct_number = $_POST["contact"];
	$addReview = $_POST["txt"];
	$date = $_POST["Date"];
	
	//query for insert data into strike_table
	$sql = "insert into strike_table(Strike_id, username1, Username2, Email, Contact_number, Review, Date)values('','$name1','$name2','$email','$contct_number','$addReview','$date')";

	if(mysqli_query($conn,$sql)){
		echo"<script>alert('Thanks for the submition.');</script>";//display message if the query is successful
		header("Location:Adminphp.php");
	}
		else{
			echo"<script>alert('Error in inserting recordings.')</script>";//display message if the query is unsuccessful
		}
	mysqli_close($conn);
?>