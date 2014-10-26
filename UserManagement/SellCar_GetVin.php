<?php
require_once 'sqlConfig.php';

$getModel = $_POST['model'];
$Query1="call GetCarVin('$getModel')";

$res = $con->query("$Query1");
while($row = mysqli_fetch_array($res))
{
	 echo("</option><option value=". $row['VIN'] . ">". $row['VIN'] ."</option>");
}


?>