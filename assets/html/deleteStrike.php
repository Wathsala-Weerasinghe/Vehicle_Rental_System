<?php
//include the configuration file
include_once'../../app/database/configuration.php';

//get id from the url to delete that customer
$id = $_GET['id'];

//Delete the user from the page according to the given id
$result = mysqli_query($conn,"DELETE FROM strike_table WHERE Strike_id=$id");

//after deleting redirect to the strike page
header("Location:Strike.php");
?>