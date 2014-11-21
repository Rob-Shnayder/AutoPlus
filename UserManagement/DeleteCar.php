<?php
require_once 'sqlConfig.php';

$carID = $_GET['CarID'];


$Query1="Delete FROM Car Where CarID = '$carID'";

$res = $con->query("$Query1");
if($res)
{
		mysql_close($con);
        header( 'Location: ../Success.php');
}

?>