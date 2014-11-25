<?php
require_once 'sqlConfig.php';

$pass = $_POST['newPass'];
session_start();
$username = $_SESSION['username'];

$Query1="UPDATE users SET password = '$pass' WHERE username = '$username'";

$res = $con->query("$Query1");

if($res){
	session_destroy();
	mysql_close($con);
	header( 'Location: ../ChangedPasswordSuccess.php');
}

?>