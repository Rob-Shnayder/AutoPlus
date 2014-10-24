<?php
require_once 'sqlConfig.php';

$manufacture = $_POST['manufacture'];
$model =  $_POST['model'];
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

	$Query2="call InsertCar('$manufacture', '$model', '$vinNum', '$year', '$color', ' ')";
	$res2 = $con->query("$Query2");

	if($res2) {
		  mysql_close($con);
   		  header( 'Location: ../Success.php');
	}
	else {
		echo "Error occured in InsertCar";
	}

}
else
{
  echo "Error occured in InsertCustomer";
  echo mysqli_errno($con);
}




?>