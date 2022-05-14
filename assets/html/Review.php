<!--This is the Review.html page where customer can add reviews-->
<!DOCTYPE html>
<html>

<head>
    <title>Home</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../css/style_review.css">
	<script src= "../js/script_review.js" ></script>
</head>

<body style="background-image: url(../images/background.jpg);">
<!--include header file.-->

    <?php

    include("../../app/includes/headersection.php");

    ?>
    <hr style="border: 2px solid black; background-color: black;">

    
	
	<!--body-->
  
    <div class="table">
		<table  border = "1" width = "100%">
			<tr>
				<td>
				<!-- Review form -->	
				<form action = "submitReview.php" target = "_self" method = "POST" onsubmit = "return checkusername()">
					<fieldset>
							<label>Username:</label><br>
							<input type = "text" id = "fname1" name = "fname1" style = "width:600px;height:30px;" placeholder = "Ex:- Jhone99" required><br><br>
							<label>Re enter the username:</label><br>
							<input type = "text" id = "fname2" name = "fname2" style = "width:600px;height:30px;" placeholder = "Re enter to validate." required><br><br>
							<label>Email address:</label><br>
							<input type = "email" id = "mail" name = "mail" style = "width:600px;height:30px; pattern = "[a-zA-Z0-9@*#]+@[a-zA-Z]+/.[a-zA-Z]{2,3}"" placeholder = "tharushi99@gmail.com"required><br><br>
							<label>Contact Number:</label><br>
							<input type = "text" id = "contact" name = "contact" style = "width:600px;height:30px;" pattern = "[0-9]{10}" required><br><br>
							<label>Review:</label><br>
							<textarea input type = "text" id = "txt" name = "txt" style = "width:600px;height:30px;" rows = "10" cols = "60" placeholder = "Add review" required></textarea><br><br>
							<input type = "date" id = "Date" name = "Date" style = "width:600px;height:30px;" placeholder = "Ex:- Jhone99" required><br><br>
							<lable>Do you saticfy with our service?</lable><br>
							<input type = "radio" id = "confirm" name = "confirm" checked>yes
							<input type = "radio" id = "confirm" name = "confirm">no
							<br><br>
							<label>Accept privacy policy and terms</label><br>
							<input type = "checkbox" id = "accept" name = "accept"  onclick = "enableBtn()"><br><br>
							<input type = "submit" id = "btn1" name = "btn1" value = "Submit" disabled class = "bttn"  >
							<input type = "reset" id = "btn2" name = "btn2" value = "Reset" class = "bttn" >
					
					</fieldset>
				</form>
				</td>	
			</tr>
		</table><hr></div>


    <!--include footer file.-->
	<?php

    include("../../app/includes/footersection.php");

    ?>

	

</body>



</html>