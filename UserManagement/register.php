<?php

define('DB_HOST', 'localhost');
define('DB_NAME', 'autoplus');
define('DB_USER','root');
define('DB_PASSWORD','');

$con=mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD) or die("Failed to connect to MySQL: " .     mysql_error());
if(!$con) die('Could not connect: ' . mysql_error());
{
  $db = mysqli_select_db($con, DB_NAME) or die("Failed to connect to MySQL: " . mysql_error());
}

$username = $_POST['username'];
$username = strtolower($username);
$password =  $_POST['password'];
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$email = $_POST['email'];



$Query1="call RegisterUser('$username', '$password', '$firstname','$email', '$lastname')";
$res = $con->query("$Query1");
if($res)
{
  echo $res;
}
else
{
  echo "nothing";
}

 //mysqli_close($con);


?>