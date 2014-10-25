<?php
require_once 'sqlConfig.php';

$getMake = $_POST['make'];
console.log($getMake);
$Query1="call GetModelsForDropDown('$getMake')";
console.log($getMake);
$res = $con->query("$Query1");
while($row = mysqli_fetch_array($res))
{
	 echo("</option><option value=". $row['title'] . ">". $row['title'] ."</option>");
}


?>