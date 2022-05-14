
 <?php
  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "vehicle_rental";


  $conn = new mysqli($servername, $username, $password, $dbname);

  if (!$conn) {


    die("connection_Error" . mysql_connect_error());
  }



  ?>