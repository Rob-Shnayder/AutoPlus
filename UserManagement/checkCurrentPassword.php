<?php
require_once 'sqlConfig.php';

$pass = $_POST['pass'];
session_start();
$username = $_SESSION['username'];

$Query1="SELECT * FROM users WHERE username = '$username' AND password = '$pass'";


$res = $con->query("$Query1");
$num_rows = 0;


while($row = mysqli_fetch_array($res))
{
	 $num_rows = $num_rows + 1;
}

if($num_rows == 1){ 
	echo '1';
}
else {
	echo '0';
}

?>