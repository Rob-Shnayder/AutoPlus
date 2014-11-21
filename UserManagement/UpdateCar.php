<?php
require_once 'sqlConfig.php';

$Make = $_POST['updateManufacture'];
$Model = $_POST['updateModel'];
$Vin = $_POST['updateVIN'];
$Year = $_POST['updateYear'];
$Color = $_POST['updateColor'];


$Query1="call UpdateCar('$Make', '$Model','$Vin', '$Year', '$Color')";


$res = $con->query("$Query1");
if($res)
{
		mysql_close($con);
        header( 'Location: ../Success.php');
}

?>