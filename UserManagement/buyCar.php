<?php
require_once 'sqlConfig.php';

$manufacture = $_POST['buy_manufacture'];
$model =  $_POST['buy_model'];
$vinNum =  $_POST['vinNumber'];
$year =  $_POST['year'];
$color =  $_POST['color'];
$price =  $_POST['price'];


$firstname =  $_POST['firstname'];
$lastname =  $_POST['lastname'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$address = $_POST['address'];
$state = $_POST['state'];
$zip = $_POST['zip'];




$Query1="call InsertCustomer('$firstname', '$lastname', '$phone','$email', '$address', '$state', '$zip')";
$res = $con->query("$Query1");
if($res)
{

	$Query2="call InsertCar('$manufacture', '$model', '$vinNum', '$year', '$color')";
	$res2 = $con->query("$Query2");

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


	$Query4="call BuyCar('$getCarID', '$getCustomerID','$price')";
	$querySetup = $con->query("$Query4");
	if($querySetup) {
		mysql_close($con);
        header( 'Location: ../Success.php');
	}

}
else
{
  echo "Error occured in InsertCustomer";
  echo mysqli_errno($con);
}




?>