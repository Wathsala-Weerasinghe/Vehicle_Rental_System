<!DOCTYPE html>
<html>

<head>
    <title>Home</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../css/style_review.css">
	<script src= "../js/script_review.js" type="text/javascript"></script>
</head>

<body style="background-image: url(../images/background.jpg);">
<!--include header file.-->
    <?php

    include("../../app/includes/headersection.php");//include connection object

    ?>
    <hr style="border: 2px solid black; background-color: black;">

    <br>
	<!-- body -->
		<button class = "button"><a href='Adminphp.php'>View Admin page</a></button><br><br>
	<?php
		include_once'../../app/database/configuration.php';//connect the configurationfile
	?>
	<?php
		$sql = "select* from strike_table";//select all the data from the strike_table
		$result = $conn->query($sql);//store those data into $result vaiable
				
//fetch data row by row and display them				
				if($result->num_rows>0){
					while($row=$result->fetch_assoc()){
						echo"<div id = 'review'>Id: ".$row["Strike_id"]."<br>username1: ".$row["username1"]."<br>Email: ".$row["Email"]."<br>Contact number: ".$row["Contact_number"]."<br>Review: ".$row["Review"]."<br>Date: ".$row["Date"]."<br>";
						echo"<button class= 'button'><a href ='deleteStrike.php?id=$row[Strike_id]'>Delete data from the strike page!!</a></button>";
												echo"</div><br><br>";						
								    }
											
										}
											else{
												echo"0 results";
											}
											
									
									$conn->close();//close the connection
									
									?>
    

<!--include footer file.-->
    <?php

    include("../../app/includes/footersection.php");

    ?>

</body>



</html>