<?php

$host = 'localhost';
$user = 'root';
$pass = '';
$db_name = 'vehicle_rental';

$conn = new mysqli($host, $user, $pass, $db_name);

$sql = "SELECT ID , link FROM  homepage_img_database";
