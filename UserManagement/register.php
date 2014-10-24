<?php

require_once 'sqlConfig.php';

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
  session_start();
    $_SESSION['loggedin'] = true;
    $_SESSION['username'] = $username;
    $_SESSION['firstname'] = $firstname;

   mysql_close($con);
   header( 'Location: ../Dashboard.php');
}
else
{
  echo "nothing";
}




?>