<?php

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

//cars
function getRandomPackages($limit){
	$dbCon = getConection();

	$sqlQuery = "select * from sr_packages where pack_type='CAR' order by RAND() LIMIT " . $limit;
	$result = $dbCon->query($sqlQuery);
	return $result;
}

function getRandomCars($limit){
	$dbCon = getConection();
	
	$sqlQuery = "select * from sr_cars where Category='CAR' order by RAND() LIMIT " . $limit;
	$result = $dbCon->query($sqlQuery);
	return $result;
}

function getRandomCarsForDisplay(){
	$randomCars = [];
	
	$packages = getRandomPackages(2);
	foreach($packages as $package){
		array_push($randomCars, $package["image"]);
	}
		
	$cars = getRandomCars(4);
	foreach($cars as $car){
		array_push($randomCars, $car["image"]);
	}
	
	return $randomCars;
}

function getAllCars(){
	$dbCon = getConection();
	
	$sql = "select * from sr_cars where Category='CAR'";
	$result = $dbCon->query($sql);
	return $result;
}

function getAllCarsForDisplay(){
	return getAllCars();
}

//MPV
function getRandomPackagesMPV($limit){
	$dbCon = getConection();

	$sqlMPV = "select * from sr_packages where pack_type='MPV' order by RAND() LIMIT " . $limit;
	$resultMPV = $dbCon->query($sqlMPV);
	return $resultMPV;
}

function getRandomMPV($limit){
	$dbCon = getConection();
	
	$sqlMPV = "select * from sr_cars where Category='MPV' order by RAND() LIMIT " . $limit;
	$resultMPV = $dbCon->query($sqlMPV);
	return $resultMPV;
}

function getRandomMPVsForDisplay(){
	$randomMPV = [];
	
	$packagesMPV = getRandomPackagesMPV(2);
	foreach($packagesMPV as $packageMPV){
		array_push($randomMPV, $packageMPV["image"]);
	}
		
	$MPVs = getRandomMPV(4);
	foreach($MPVs as $MPV){
		array_push($randomMPV, $MPV["image"]);
	}
	
	return $randomMPV;
}

function getAllMPV(){
	$dbCon = getConection();
	
	$sqlMPV = "select * from sr_cars where Category='MPV'";
	$resultMPV = $dbCon->query($sqlMPV);
	return $resultMPV;
}

function getAllMPVsForDisplay(){
	return getAllMPV();
}

//MISC
function getRandomPackagesMISC($limit){
	$dbCon = getConection();

	$sqlMISC = "select * from sr_packages where pack_type='MISC' order by RAND() LIMIT " . $limit;
	$resultMISC = $dbCon->query($sqlMISC);
	return $resultMISC;
}

function getRandomMISC($limit){
	$dbCon = getConection();
	
	$sqlMISC = "select * from sr_cars where Category='MISC' order by RAND() LIMIT " . $limit;
	$resultMISC = $dbCon->query($sqlMISC);
	return $resultMISC;
}

function getRandomMISCsForDisplay(){
	$randomMISC = [];
	
	$packagesMISC = getRandomPackagesMISC(2);
	foreach($packagesMISC as $packageMISC){
		array_push($randomMISC, $packageMISC["image"]);
	}
		
	$MISCs = getRandomMISC(4);
	foreach($MISCs as $MISC){
		array_push($randomMISC, $MISC["image"]);
	}
	
	return $randomMISC;
}

function getAllMISC(){
	$dbCon = getConection();
	
	$sqlMISC = "select * from sr_cars where Category='MISC'";
	$resultMISC = $dbCon->query($sqlMISC);
	return $resultMISC;
}

function getAllMISCsForDisplay(){
	return getAllMISC();
}

//Transport
function getAllTransVehicles(){
	$dbCon = getConection();
	
	$sql = "select * from sr_transport";
	$result = $dbCon->query($sql);
	return $result;
}

function getAllTransVehiclesForDisplay(){
	return getAllTransVehicles();
}

function getAllPackages(){
	$dbCon = getConection();
	
	$sql = "select * from sr_packages";
	$result = $dbCon->query($sql);
	return $result;
}

function getAllCarsOthers(){
	$dbCon = getConection();
	
	$sql = "select * from sr_cars";
	$result = $dbCon->query($sql);
	return $result;
}

// Payment helpers
function getEntityDetails ($type, $id){
	$dbCon = getConection();
	
	$sql = "";
	switch ($type) {
		case 'package': 
			$sql = "select * from sr_packages ";
			break;
		case 'car': 
			$sql = "select * from sr_cars ";
			break;
		case 'transport': 
			$sql = "select * from sr_transport ";
			break;
		default:
			break;
	}
	
	$sql = $sql . "where id=" . $id;

	$result = $dbCon->query($sql);
	return $result;
}

?>