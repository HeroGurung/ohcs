<?php
session_start();
if(isset($_SESSION['username']))
{
	echo $_SESSION['username'];
}else{
	header('Location: loggin.php');
}
?>
<a href="logout.php">Log out</a>