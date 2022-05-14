<?php
include("../../app/controllers/users.php");
?>
<html>

<head>
	<title>
		Vehicle Rental System
	</title>
	<link rel="stylesheet" href="../css/showroom.css" />
	<script src="../js/showroom_transport.js"></script>

	<?php
	include 'database/sr_database_service.php';

	$result = getAllTransVehiclesForDisplay();
	?>
</head>

<body style="background-image: url(../images/background.jpg);" onload="showSlides(1)">
	<?php
	include("../../app/includes/headersection.php");
	?>

	<hr style="border: 2px solid black; background-color: black;">

	<br>
	<br><br>
	<hr>

	<main>
		<table style="margin:auto">
			<tr>
				<td>
					<div class="sr_slide-container">
						<?php
						
						$slideCount = 1;
						foreach ($result as $row) {
							echo '<div class="sr_slide-item">
									<div class="sr_numbertext">' . $slideCount . '/6</div>
									<img src="' . $row["image"] . '" style="width:100%; height:360px;" onclick="rentVehicle()" />
									<input type="hidden" class="item-name" value="' . $row["name"] . '" />
									<input type="hidden" class="item-description" value="' . $row["description"] . '" />
									<input type="hidden" class="tran-capacity" value="' . $row["tran_percentage"] . '" />
									<input type="hidden" class="item-price" value="' . $row["price"] . '" />
									<input type="hidden" class="item-id" value="' . $row["id"] . '" />
								</div>';
								
								$slideCount++;
						}
						?>

						<button class="sr_prev" onclick="changeSlides(-1)">Prev</button>
						<button class="sr_next" onclick="changeSlides(1)">Next</button>
					</div>
					<div>
						<label id="sr_info" class="sr_infoLabel" onclick="hideInfo('off')" style="display:none;height:360px;"></label>
					</div>
				</td>
			</tr>
			<tr>
				<td>
					<div id="sr_progress-bar">
						<div id="sr_progress-bar-inner"></div>
					</div>
					<br /><br />
					<div id="sr_rent-value-container">
						Rs: 0 /-
					</div>
				</td>
			</tr>
			<tr>
				<td>
					<div style="border:2px solid #fff; padding:20px; margin-top:20px;">
						<!--<input class="sr_destination" type="text" name="startpoint" placeholder="Choose starting point">
							<br/><br/>
							<input class="sr_destination" type="text" name="destination" placeholder="Choose destination">/-->
						<table>
							<tr>
								<td>
									<input class="sr_distanceKM" type="text" id="distanceKM" placeholder="Enter distance(KM)">
								</td>
								<td>
									<button onclick="calculatePaymentPerDistance()" style="border-radius:25%;">
										<img src="../images/icons/addicon.png" width="25px" height="25px">
									</button>
								</td>
							</tr>
							<tr>
								<td colspan="2" style="padding-left:5px;">
									<br />
									<span style="color:white;">Distance :</span>
									<span style="color:white;" id="Distance">
										0KM
									</span>
									<br /><br />
									<span style="color:white;">Payment :</span>
									<span style="color:white;" id="Payment">
										Rs: 0/-
									</span>
								</td>
							</tr>
						</table>



						<!--<input id="duration" type="hidden" value="100">
							<input id="fullPayment" type="hidden" value="1000">/-->


					</div>
				</td>
			</tr>
			<tr>
				<td align="center">
					<br /><br />
					<button id="sr_b5" class="sr_button" onclick="displayInfo()" style="margin-right:20px">INFO</button>
					<button id="sr_b6" class="sr_button" onclick="rentVehicle()">RENT</button>
				</td>
			</tr>
		</table>


		<table style="margin:auto">
			<br /><br />
			<tr>
				<td>

				</td>
				<td>
					<div style="width:100px;"></div>
				</td>
			</tr>
		</table>
	</main>
	</br></br>
	<?php
	include("../../app/includes/footersection.php");
	?>
</body>

</html>