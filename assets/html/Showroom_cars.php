<?php
include("../../app/controllers/users.php");

?>
<html>

<head>
	<title>
		Vehicle Rental System
	</title>
	<link rel="stylesheet" href="../css/showroom.css" />
	<script src="../js/showroom.js"></script>
	<script src="../js/showroom_cars.js"></script>

	<?php
	include 'database/sr_database_service.php';

	$result = getAllCarsForDisplay();
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
		<table width="100%">
			<tr>
				<td colspan=2 align="center">
					<h1 class="sr_h1cars">CARS</h1>
				</td>
			</tr>
		</table>

		<table style="margin:auto">
			<tr>
				<td>
					<div class="sr_slide-container">
						<?php
						foreach ($result as $row) {
							echo '<div class="sr_slide-item">
									<img class="sr_blimage" src="' . $row["image"] . '" style="width:100%" />
									<img class="sr_image" src="' . $row["image"] . '" onclick="rentVehicle()" />
									<input type="hidden" class="item-name" value="' . $row["name"] . '" />
									<input type="hidden" class="item-description" value="' . $row["description"] . '" />
									<input type="hidden" class="item-price" value="' . $row["price"] . '" />
									<input type="hidden" class="item-id" value="' . $row["id"] . '" />

								</div>';
						}
						?>

						<button class="sr_prev" onclick="changeSlides(-1)">Prev</button>
						<button class="sr_next" onclick="changeSlides(1)">Next</button>
					</div>
					<div>
						<label id="sr_info" class="sr_infoLabel" onclick="hideInfo('off')" style="display:none;height:380px;"></label>
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
	</main>
	</br></br>
	<?php
	include("../../app/includes/footersection.php");
	?>
</body>

</html>