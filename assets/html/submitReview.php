<!-- this is the page where the query is coded for the submition of the form in the 'Review.html'page. -->
   
   <!--link the configuration file-->
<?php
	include_once'../../app/database/configuration.php';
?>
<?php
	//store values into these variables
	$name1 = $_POST["fname1"];
	$name2 = $_POST["fname2"];
	$email = $_POST["mail"];
	$contct_number = $_POST["contact"];
	$addReview = $_POST["txt"];
	$date = $_POST["Date"];
	
	//query for insert data into review_table
	$sql = "insert into review_table(review_id,username1, Username2, Email, Contact_number, review, date)values('','$name1','$name2','$email','$contct_number','$addReview','$date')";

	if(mysqli_query($conn,$sql)){
		echo"<script>alert('Thanks for the submition.');</script>";//display message if the query is successfull
		header("Location:Review.php");
	}
		else{
			echo"<script>alert('Error in inserting recordings.')</script>";//display message if the query is unsuccessfull
		}
	mysqli_close($conn);//close connection
?>