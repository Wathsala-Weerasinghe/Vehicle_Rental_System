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

	<?php
	include 'database/sr_database_service.php';

	$resultMPV = getAllMPVsForDisplay();
	$resultMISC = getAllMISCsForDisplay();
	?>
</head>

<body style="background-image: url(../images/background.jpg);" onload="showSlidesMPV(1); showSlidesMISC(1);">
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
					<h1 class="sr_h1cars">MULTI PURPOSE</h1>
				</td>
			</tr>
		</table>
		<table style="margin:auto">
			<tr>
				<td>
					<div class="sr_slide-container">
						<?php
						foreach ($resultMPV as $row) {
							echo '<div class="sr_slide-itemMPV">
									<img class="sr_blimage1" src="' . $row["image"] . '" style="width:100%" />
									<img class="sr_image1" src="' . $row["image"] . '" onclick="rentVehicleMPV()" />
									<input type="hidden" class="item-name" value="' . $row["name"] . '" />
									<input type="hidden" class="item-description" value="' . $row["description"] . '" />
									<input type="hidden" class="item-price" value="' . $row["price"] . '" />
									<input type="hidden" class="item-id" value="' . $row["id"] . '" />
								</div>';
						}
						?>

						<button class="sr_prev" onclick="changeSlidesMPV(-1)">Prev</button>
						<button class="sr_next" onclick="changeSlidesMPV(1)">Next</button>
					</div>
					<div>
						<label id="sr_info1" class="sr_infoLabel" onclick="hideInfoMPV('off')" style="display:none;height:380px;"></label>
					</div>
				</td>
			</tr>
			<tr>
				<td align="center">
					<br /><br />
					<button id="sr_b5" class="sr_button" onclick="displayInfoMPV()" style="margin-right:20px">INFO</button>
					<button id="sr_b6" class="sr_button" onclick="rentVehicleMPV()">RENT</button>
				</td>
			</tr>
		</table>
		<table width="100%">
			<tr>
				<td colspan=2 align="center">
					<h1 class="sr_h1cars">Miscellanious</h1>
				</td>
			</tr>
		</table>
		<table style="margin:auto">
			<tr>
				<td>
					<div class="sr_slide-container">
						<?php
						foreach ($resultMISC as $row) {
							echo '<div class="sr_slide-itemMISC">
									<img class="sr_blimage2" src="' . $row["image"] . '" style="width:100%" />
									<img class="sr_image2" src="' . $row["image"] . '" onclick="rentVehicleMISC()" />
									<input type="hidden" class="item-name" value="' . $row["name"] . '" />
									<input type="hidden" class="item-description" value="' . $row["description"] . '" />
									<input type="hidden" class="item-price" value="' . $row["price"] . '" />
									<input type="hidden" class="item-id" value="' . $row["id"] . '" />
								</div>';
						}
						?>

						<button class="sr_prev" onclick="changeSlidesMISC(-1)">Prev</button>
						<button class="sr_next" onclick="changeSlidesMISC(1)">Next</button>
					</div>
					<div>
						<label id="sr_info2" class="sr_infoLabel" onclick="hideInfoMISC('off')" style="display:none;height:380px;"></label>
					</div>
				</td>
			</tr>
			<tr>
				<td align="center">
					<br /><br />
					<button id="sr_b5" class="sr_button" onclick="displayInfoMISC()" style="margin-right:20px">INFO</button>
					<button id="sr_b6" class="sr_button" onclick="rentVehicleMISC()">RENT</button>
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