<?php

$host = 'localhost';
$user = 'root';
$pass = '';
$db_name = 'vehicle_rental';

$conn = new mysqli($host, $user, $pass, $db_name);


if ($conn->connect_error) {
    die('databse connection error' . $conn->connect_error);
} else {
    // echo "db connected";
}
