<?php
require_once 'sqlConfig.php';

$getColor = $_POST['vin'];
$Query1="SELECT Color FROM Car WHERE VIN = '$getColor'";


$res = $con->query("$Query1");
while($row = mysqli_fetch_array($res))
{
	 echo $row['Color'];
	 //echo $row['Color'];
	 //console.log($Color = $row['Color']);
}


?>