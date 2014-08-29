<?php

define('DB_HOST', 'localhost');
define('DB_NAME', 'autoplus');
define('DB_USER','root');
define('DB_PASSWORD','');

$con=mysql_connect(DB_HOST,DB_USER,DB_PASSWORD) or die("Failed to connect to MySQL: " .     mysql_error());
if(!$con) die('Could not connect: ' . mysql_error());
{
  $db = mysql_select_db(DB_NAME, $con) or die("Failed to connect to MySQL: " . mysql_error());
}

// username and password sent from form 
$username=$_POST['name']; 
$password=$_POST['pwd']; 


$username = stripslashes($username);
$password = stripslashes($password);
$username = mysql_real_escape_string($username);
$password = mysql_real_escape_string($password);

$sql = "SELECT * FROM users WHERE username='$username' and password='$password'";
$result = mysql_query($sql, $con) or die(mysql_error());
$row = mysql_fetch_assoc($result);
$num_rows = mysql_num_rows($result);


if($num_rows==1)
{
	echo '1';
    session_start();
    $_SESSION['loggedin'] = true;    
	$username = strtolower($username);
    $_SESSION['username'] = $username;    
}
else
{
	echo '0';
	//header( 'Location: ../404.php?info=The System Couldnt Log You On');
}

 mysql_close($con);


?>