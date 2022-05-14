<?php
//include the configuration file
include_once'../../app/database/configuration.php';

//get id from the url to delete that customer
$id = $_GET['id'];

//Delete the user from the page according to the given id
$result = mysqli_query($conn,"DELETE FROM review_table WHERE review_id=$id");

//after deleting redirect to the Adminphp page
header("Location:Adminphp.php");
?>