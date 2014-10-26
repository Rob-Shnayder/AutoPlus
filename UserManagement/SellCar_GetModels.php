<?php
require_once 'sqlConfig.php';

$getMake = $_POST['make'];
$Query1="call GetInventoryModel('$getMake')";

$res = $con->query("$Query1");
while($row = mysqli_fetch_array($res))
{
	 echo("</option><option value=". $row['Model'] . ">". $row['Model'] ."</option>");
}


?>