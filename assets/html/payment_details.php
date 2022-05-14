<?php


if(isset($_POST["submit"]))
   
{


$ID=$_POST["ID"];
$cardname=$_POST["cardname"];
$paymenttype=$_POST["paymenttype"];
$customername=$_POST["customername"];
$email=$_POST["email"];
$address=$_POST["address"];
$cvv=$_POST["cvv"];
$cardnumber=$_POST["cardnumber"];
$date=$_POST["date"];


include_once "paymentdb.php";



$sql="INSERT INTO `payment`(`ID`, `cardname`, `paymenttype`, `customername`, `email`, `address`, `cvv`, `cardnumber`, `date`) VALUES ($ID,'$cardname','$paymenttype','$customername','$email','$address','$cvv','$cardnumber','$date')";





	if(mysqli_query($conn,$sql))
	{
		echo "thanks for servicess!!!!!";


	}
	else{
		echo"fail values";

	}

}

?>