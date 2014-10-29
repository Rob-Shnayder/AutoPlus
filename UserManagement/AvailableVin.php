<?php

require_once 'UserManagement/sqlConfig.php';

// username and password sent from form 
$vin=$_POST['vin']; 

$sql = "SELECT * FROM $Car WHERE Vin='$vin'";
$result = mysql_query($sql);

// Mysql_num_row is counting table row
$count=mysql_num_rows($result);

// Checks if there are any other records with that username
if($count == 0){
	echo '1';
}
else
{
	echo '0';
}