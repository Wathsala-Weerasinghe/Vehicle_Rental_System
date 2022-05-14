<?php
if(isset($_POST["submit"]))
{
$ID=$_POST["ID"];
$cardname=$_POST["cardname"];
$paymenttype=$_POST["paymenttype"];
$customername=$_POST["customername"];
$email=$_POST["email"];
$cardnumber=$_POST["cardnumber"];


	
	
	include_once"paymentdb.php";
	
	$sql="UPDATE payment set ID='$ID', cardname='$cardname', paymenttype='$paymenttype', customername='$customername'  , email='$email' , cardnumber='$cardnumber' WHERE ID='$ID'";

if(mysqli_query($conn,$sql))
	{
		

echo "updated!!!!!!!!!";

	}
	else
	{
		echo "fail values";






	}
	
}	
	
?>
