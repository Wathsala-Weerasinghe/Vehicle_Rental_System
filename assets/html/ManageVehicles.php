<html>
	<head>
		<title>
			Vehicle Rental System
		</title>
		<link rel="stylesheet" href="../css/showroom.css" />
		<?php 
		include 'database/sr_database_service.php';

		$resultPackages = getAllPackages();
		$resultCars = getAllCarsOthers();
		$resultTransport = getAllTransVehicles();
		?>

		<script>
		function deletePackageById(id){
			location.href = 'database/sr_database_admin_service.php?sr_op_type=DP&sr_p_id=' + id;
		}
		function deleteCarsById(id){
			location.href = 'database/sr_database_admin_service.php?sr_op_type=DC&sr_c_id=' + id;
		}
		function deleteTransportById(id){
			location.href = 'database/sr_database_admin_service.php?sr_op_type=DT&sr_t_id=' + id;
		}
		</script>
	</head>
	<body style="background-image: url(../images/background.jpg);")>
		<?php
		include("../../app/includes/headersection.php");
		?>
		
		<hr style="border: 2px solid black; background-color: black;">

		<br>
		<br><br>
		<hr>
		
		<main>
			<fieldset class="sr_fieldset">
				<legend class="sr_legend_heading">Packages</legend>
					<table style="margin-top: 20px;">
					<tr><td style="vertical-align: top">
						<form action="database/sr_database_admin_service.php?sr_op_type=CP" method="POST">
							<table class="sr_admin_main_tab">
								<tr>
									<td>ID: </td>
									<td><input type="text" name="sr_p_id" /></td>
								</tr>
								<tr>
									<td>Name: </td>
									<td><input type="text" name="sr_p_name" /></td>
								</tr>
								<tr>
									<td>Price: </td>
									<td><input type="text" name="sr_p_price" /></td>
								</tr>
								<tr>
									<td>Image: </td>
									<td><input type="text" name="sr_p_image" style="width:412px;" /></td>
								</tr>
								<tr>
									<td>Description: </td>
									<td><textarea name="sr_p_description" rows="4" cols="50">
								</textarea></td>
								</tr>
								<tr>
									<td>Type: </td>
									<td><select name="sr_p_type">
									<option value="CAR">CAR</option>
									<option value="MPV">MPV</option>
									<option value="MISC">MISC</option>
								</select></td>
								</tr>
								<tr>
									<td colspan="2" style="padding-top:20px;">
										<input type="submit" value="Create" name="submitP" class="sr_form-btn" style="background-color: #337ab7;" />
										<input type="reset" value="Clear" name="resetP" class="sr_form-btn" style="background-color: #505050;" />
									</td>
								</tr>
							</table>
						</form>
					 </td>
					 <td width="50px"></td>
					 <td>
					<table class="sr_admin_main_tab sr_tb-border" cellspacing = "0" width="700px">
						<tr>
							<th>Id</th>
							<th>Name</th>
							<th>Type</th>
							<th>Price</th>
							<th style="width:30px;"></th>
						</tr>
						<?php 
							foreach($resultPackages as $row){
								echo '<tr>
										<td>' . $row["id"] . '</td>
										<td>' . $row["name"] . '</td>
										<td>' . $row["pack_type"] . '</td>
										<td>' . $row["price"] . '</td>
										<td style="width:30px;"><input type="button" value="Delete" name="deleteP" onclick="deletePackageById(' . $row["id"] . ')" class="sr_form-btn" style="background-color: #d9534f;"></td>
									 </tr>';
							}
						?>
						
					  </table>
					</td></tr>
					</table>
				</legend>
			</fieldset >
			<br />
			<br />
			<fieldset class="sr_fieldset">
				<legend class="sr_legend_heading">CARS and Others</legend>
					<table style="margin-top: 20px;">
					<tr><td style="vertical-align: top">
						<form action="database/sr_database_admin_service.php?sr_op_type=CC" method="POST">
							<table class="sr_admin_main_tab">
								<tr>
									<td>ID: </td>
									<td><input type="text" name="sr_c_id" /></td>
								</tr>
								<tr>
									<td>Name: </td>
									<td><input type="text" name="sr_c_name" /></td>
								</tr>
								<tr>
									<td>Price: </td>
									<td><input type="text" name="sr_c_price" /></td>
								</tr>
								<tr>
									<td>Category: </td>
									<td><select name="sr_c_type">
									<option value="CAR">CAR</option>
									<option value="MPV">MPV</option>
									<option value="MISC">MISC</option>
									</select></td>
								</tr>
								<tr>
									<td>Description: </td>
									<td><textarea name="sr_c_description" rows="4" cols="50">
								</textarea></td>
								</tr>
								<tr>
									<td>Image: </td>
									<td><input type="text" name="sr_c_image" style="width:412px;" /></td>
								</tr>
								<tr>
									<td colspan="2" style="padding-top:20px;">
										<input type="submit" value="Create" name="submitC" class="sr_form-btn" style="background-color: #337ab7;" />
										<input type="reset" value="Clear" name="resetC" class="sr_form-btn" style="background-color: #505050;" />
									</td>
								</tr>
							</table>
						</form>
					 </td>
					 <td width="50px"></td>
					 <td>
					<table class="sr_admin_main_tab sr_tb-border" cellspacing = "0" width="700px">
						<tr>
							<th>Id</th>
							<th>Name</th>
							<th>Price</th>
							<th>Category</th>
							<th style="width:30px;"></th>
						</tr>
						<?php 
							foreach($resultCars as $row){
								echo '<tr>
										<td>' . $row["id"] . '</td>
										<td>' . $row["name"] . '</td>
										<td>' . $row["price"] . '</td>
										<td>' . $row["Category"] . '</td>
										<td style="width:30px;"><input type="button" value="Delete" name="deleteC" onclick="deleteCarsById(' . $row["id"] . ')" class="sr_form-btn" style="background-color: #d9534f;"></td>
									 </tr>';
							}
						?>
						
					  </table>
					</td></tr>
					</table>
				</legend>
			</fieldset>
			<br />
			<br />
			<fieldset class="sr_fieldset">
				<legend class="sr_legend_heading">Transport</legend>
					<table style="margin-top: 20px;">
					<tr><td style="vertical-align: top">
						<form action="database/sr_database_admin_service.php?sr_op_type=CT" method="POST">
							<table class="sr_admin_main_tab">
								<tr>
									<td>ID: </td>
									<td><input type="text" name="sr_t_id" /></td>
								</tr>
								<tr>
									<td>Name: </td>
									<td><input type="text" name="sr_t_name" /></td>
								</tr>
								<tr>
									<td>Price: </td>
									<td><input type="text" name="sr_t_price" /></td>
								</tr>
								<tr>
									<td>Tran_Capacity: </td>
									<td><input type="text" name="sr_t_capacity" /></td>
								</tr>
								<tr>
									<td>Description: </td>
									<td><textarea name="sr_t_description" rows="4" cols="50">
								</textarea></td>
								</tr>
								<tr>
									<td>Image: </td>
									<td><input type="text" name="sr_t_image" style="width:412px;" /></td>
								</tr>
								<tr>
									<td colspan="2" style="padding-top:20px;">
										<input type="submit" value="Create" name="submitT" class="sr_form-btn" style="background-color: #337ab7;" />
										<input type="reset" value="Clear" name="resetT" class="sr_form-btn" style="background-color: #505050;" />
									</td>
								</tr>
							</table>
						</form>
					 </td>
					 <td width="50px"></td>
					 <td>
					<table class="sr_admin_main_tab sr_tb-border" cellspacing = "0" width="700px">
						<tr>
							<th>Id</th>
							<th>Name</th>
							<th>Price</th>
							<th>Tran_Capacity</th>
							<th style="width:30px;"></th>
						</tr>
						<?php 
							foreach($resultTransport as $row){
								echo '<tr>
										<td>' . $row["id"] . '</td>
										<td>' . $row["name"] . '</td>
										<td>' . $row["price"] . '</td>
										<td>' . $row["tran_percentage"] . '</td>
										<td style="width:30px;"><input type="button" value="Delete" name="deleteT" onclick="deleteTransportById(' . $row["id"] . ')" class="sr_form-btn" style="background-color: #d9534f;"></td>
									 </tr>';
							}
						?>
						
					  </table>
					</td></tr>
					</table>
				</legend>
			</fieldset>
			<br />
			<br />
		</main>
		</br></br>
		<?php
		include("../../app/includes/footersection.php");
		?>
	</body>
</html>