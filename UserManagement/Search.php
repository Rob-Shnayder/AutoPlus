<?php
require_once 'sqlConfig.php';

$Make = $_POST['make'];
$Model = $_POST['model'];
$Year = $_POST['year'];
$Color = $_POST['color'];

if($Make == ''){$Make = "NULL";}
if($Model == ''){$Model = "NULL";}
if($Year == ''){$Year = "NULL";}
if($Color == ''){$Color = "NULL";}

$Query1="call Search('$Make', '$Model', '$Year', '$Color')";

$res = $con->query("$Query1");
while($row = mysqli_fetch_array($res))
{	
	$result[] = $row;
}
echo json_encode($result);	



?>