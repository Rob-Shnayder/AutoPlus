<?php
require_once 'sqlConfig.php';

$getDetails = $_POST['vin'];
$Query1="call GetDetailsFromVin('$getDetails')";


$res = $con->query("$Query1");
while($row = mysqli_fetch_array($res))
{
	 echo $row['Year'];
	 //echo $row['Color'];
	 //console.log($Color = $row['Color']);
}


?>