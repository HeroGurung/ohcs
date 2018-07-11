<?php
$dbhost="localhost";
$dbuser="root";
$dbpassword="";
$db="healthcare";
$conn=mysqli_connect($dbhost,$dbuser,$dbpassword,$db);
if(!$conn)
{
	die("Error to connect:".mysqli_error());
}
?>