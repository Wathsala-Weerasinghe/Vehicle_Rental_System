<?php

//$sr_p_name = $_POST['sr_p_name'];

// echo $_GET['sr_op_type']; 

if ($_GET['sr_op_type'] == "CP"){
	createPackage($_POST['sr_p_id'], $_POST['sr_p_name'], $_POST['sr_p_price'], $_POST['sr_p_image'], $_POST['sr_p_description'], $_POST['sr_p_type']);
} else if ($_GET['sr_op_type'] == "DP"){
	deletePackage($_GET['sr_p_id']);
} else if ($_GET['sr_op_type'] == "CC"){
	createCars($_POST['sr_c_id'], $_POST['sr_c_name'], $_POST['sr_c_price'], $_POST['sr_c_type'], $_POST['sr_c_description'], $_POST['sr_c_image']);
} else if ($_GET['sr_op_type'] == "DC"){
	deleteCars($_GET['sr_c_id']);
} else if ($_GET['sr_op_type'] == "CT"){
	createTransport($_POST['sr_t_id'], $_POST['sr_t_name'], $_POST['sr_t_price'], $_POST['sr_t_capacity'], $_POST['sr_t_description'], $_POST['sr_t_image']);
} else if ($_GET['sr_op_type'] == "DT"){
	deleteTransport($_GET['sr_t_id']);
}

header("Location: ../ManageVehicles.php"); 
exit();

//database connection
function getConection() {
	// create database connection
	$dbCon = new mysqli("localhost", "root", null, "vehicle_rental");
	// Check connection
	if (!$dbCon) {
	  die("Connection failed: " . mysqli_connect_error());
	}
	
	return $dbCon;
}	

function createPackage($sr_p_id, $sr_p_name, $sr_p_price, $sr_p_image, $sr_p_description, $sr_p_type){
	$dbCon = getConection();
	
	$sqlQuery = "INSERT INTO `sr_packages` (`id`, `name`, `price`, `image`, `description`, `pack_type`) VALUES
		(" . $sr_p_id . ", '"  . $sr_p_name . "', " . $sr_p_price . ", '" . $sr_p_image . "', '" . $sr_p_description . "', '" . $sr_p_type . "')";
		
	$dbCon->query($sqlQuery);
}

function deletePackage($sr_p_id){
	$dbCon = getConection();
	$sqlQuery = "DELETE FROM `sr_packages` where id=" . $sr_p_id;
	$dbCon->query($sqlQuery);
}

function createCars($sr_c_id, $sr_c_name, $sr_c_price, $sr_c_type, $sr_c_description, $sr_c_image){
	$dbCon = getConection();
	
	$sqlQuery = "INSERT INTO `sr_cars` (`id`, `name`, `price`, `Category`, `description`, `image`) VALUES
		(" . $sr_c_id . ", '"  . $sr_c_name . "', " . $sr_c_price . ", '" . $sr_c_type . "', '" . $sr_c_description . "', '" . $sr_c_image . "')";
		
	$dbCon->query($sqlQuery);
}

function deleteCars($sr_c_id){
	$dbCon = getConection();
	$sqlQueryCars = "DELETE FROM `sr_cars` where id=" . $sr_c_id;
	$dbCon->query($sqlQueryCars);
}

function createTransport($sr_t_id, $sr_t_name, $sr_t_price, $sr_t_capacity, $sr_t_description, $sr_t_image){
	$dbCon = getConection();
	
	$sqlQuery = "INSERT INTO `sr_transport` (`id`, `name`, `price`, `tran_percentage`, `description`, `image`) VALUES
		(" . $sr_t_id . ", '"  . $sr_t_name . "', " . $sr_t_price . ", '" . $sr_t_capacity . "', '" . $sr_t_description . "', '" . $sr_t_image . "')";
		
	$dbCon->query($sqlQuery);
}

function deleteTransport($sr_t_id){
	$dbCon = getConection();
	$sqlQueryTrans = "DELETE FROM `sr_transport` where id=" . $sr_t_id;
	$dbCon->query($sqlQueryTrans);
}

?>