<?php
require_once 'sqlConfig.php';


$vinNum =  $_POST['sellCarVIN'];
$price =  $_POST['SellCar_price'];


$firstname =  $_POST['SellCar_firstname'];
$lastname =  $_POST['SellCar_lastname'];
$phone = $_POST['SellCar_phone'];
$email = $_POST['SellCar_email'];
$address = $_POST['SellCar_address'];
$state = $_POST['SellCar_state'];
$zip = $_POST['SellCar_zip'];




$Query1="call InsertCustomer('$firstname', '$lastname', '$phone','$email', '$address', '$state', '$zip')";
$res = $con->query("$Query1");
if($res)
{
	$Query2 = "SELECT CustomerID FROM customer WHERE firstname = '$firstname' AND lastname = '$lastname' ";	
	$querySetup = $con->query("$Query2");	 
	while($rowss = mysqli_fetch_array($querySetup)) {
		$getCustomerID =  $rowss['CustomerID'];
	}

	$Query3 = "SELECT CarID FROM car WHERE VIN = '$vinNum' ";
	$querySetup = $con->query("$Query3");	 
	while($rowss = mysqli_fetch_array($querySetup)) {
		$getCarID =  $rowss['CarID'];
	}


	$Query4="call InsertSale('$getCarID', '$price', '$getCustomerID')";
	$querySetup = $con->query("$Query4");
	if($querySetup) {
		mysql_close($con);
        header( 'Location: ../Success.php');
	}
}
else
{
  	printf("Error: %s\n", mysqli_error($con));
	exit();
}




?>