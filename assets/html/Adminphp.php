    <!-- this is the Admin page which can add data to the strike page andalso can view all the reviews which had entered by customers.-->
<!DOCTYPE html>
<html>

<head>
    <title>Home</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../css/style_review.css">
	<script src= "../js/script_review.js" type="text/javascript"></script>
	<script>
	  alert("You are loged into Admin page.");
	</script>
</head>

<body style="background-image: url(../images/background.jpg);">
 <!--include header file.-->
    <?php

    include("../../app/includes/headersection.php");

    ?>
    <hr style="border: 2px solid black; background-color: black;">

    <!-- this is the query which can retriew data from the review_table -->
	
    
		<div class="table">
			<table  border = "1" width = "100%">
				<tr><td>
							<!--button to visit strike page-->
							<button class = "button"><a href='Strike.php'>View Strike page</a></button><br><br>
							
							<!--button to visit ManageVehicles page-->
							<button class = "button"><a href='ManageVehicles.php'>View ManageVehicles page</a></button><br>
							
							<h2>Latest Reviews</h2>
								
									<?php
										include_once'../../app/database/configuration.php';//connect the configuration file
									?>
									<?php
										$sql = "select* from review_table";//select data from the review_table 
										$result = $conn->query($sql);//store data to the variable
										
										//fetch all the data of the database and display row by row
										if($result->num_rows>0){
											while($row=$result->fetch_assoc()){
												echo"<div id = 'review'>Id: ".$row["review_id"]."<br>username1: ".$row["username1"]."<br>Email: ".$row["Email"]."<br>Contact number: ".$row["Contact_number"]."<br>Review: ".$row["review"]."<br>Date: ".$row["date"]."<br>";
												echo"<button class= 'button'><a href ='delete.php?id=$row[review_id]'>Delete data if added to strike page!!</a></button>";
												echo"</div><br><br>";
												
												
												}
											
										}
											else{
												echo"0 results";//display results =0 if there ara no results in the database
											}
											
									
									$conn->close();//close the connection object
									
									?>
									
								
					</td>		
					<td>
						  <!-- heading of the form-->
							<p class="para"> Send data to strike page!!</p>
						  <!-- form  to add data to strike table-->	
							<form action = "../html/submitStrike.php" target = "_self" method = "POST" onsubmit = "return checkusername()">
							<fieldset>
							<label>Username:</label><br>
							<input type = "text" id = "fname1" name = "fname1" style = "width:600px;height:30px;" placeholder = "Ex:- Jhone99" required><br><br>
							<label>Re entered the username:</label><br>
							<input type = "text" id = "fname2" name = "fname2" style = "width:600px;height:30px;" placeholder = "Re enter to validate." required><br><br>
							<label>Email address:</label><br>
							<input type = "email" id = "mail" name = "mail" style = "width:600px;height:30px; pattern = "[a-zA-Z0-9@*#]+@[a-zA-Z]+/.[a-zA-Z]{2,3}"" placeholder = "tharushi99@gmail.com"required><br><br>
							<label>Contact Number:</label><br>
							<input type = "text" id = "contact" name = "contact" style = "width:600px;height:30px;" pattern = "[0-9]{10}" required><br><br>
							<label>Review:</label><br>
							<textarea input type = "text" id = "txt" name = "txt" style = "width:600px;height:30px;" rows = "10" cols = "60" placeholder = "Add review" required></textarea><br><br>
							<label>User entered date:</label><br>
							<input type = "date" id = "Date" name = "Date" style = "width:600px;height:30px;" placeholder = "Ex:- Jhone99" required><br><br>
							<label>Confirm to send data to strike table in database.</label><br>
							<input type = "checkbox" id = "confirm" name = "confirm"  onclick = "activeBtn()"><br><br>
							<input type = "submit" id = "btn1" name = "btn1" value = "Submit" disabled  class = "bttn" >
							<input type = "reset" id = "btn2" name = "btn2" value = "Reset" class = "bttn" >
							
							</fieldset>
							</form>
							
							
							<!-- vehicle views bar chart-->	
						<p class="para"> Vehicle Views Bar Chart</p>
						<div class="bar">
						<div class="color" style="height:20px;width:50%">Lorry 50%</div>
						</div>
						
						<div class="bar">
						<div class="color" style="height:20px;width:70%">Car 70%</div>
						</div>
						
						<div class="bar">
						<div class="color" style="height:20px;width:80%">Van 80%</div>
						</div>
						
						<div class="bar">
						<div class="color" style="height:20px;width:90%">Wedding car 90%</div>
						</div>
		
		

					</td>
				</tr>
		</table><hr></div>

<!--include footer file.-->
   <?php

    include("../../app/includes/footersection.php");

    ?>

</body>



</html>