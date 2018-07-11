<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1"> 
	<title>
		Online Health Care System
	</title>
	<link href="index.css" rel="stylesheet" type="text/css"/>
</head>
<body>
<div class="container">
	<header>
		<ul class="reg">
				<a href="index.php">
					<img src="logo.jpg" alt="logo" class="logo">
				</a>
			<li>
				
				<?php 

				if(isset($_SESSION['username']))
				{
					echo '<a href="logout.php">Logout</a>';
				}
				else
				{
					echo '<a href="login.php">Login</a>';
				}
				?>
			</li>
			<li><a href="register.php">Signup</a></li>
		</ul>
		<div class="nav">
		<ul class = "menu">
			<li> <a href ="#">Home</a></li> 
			<li> <a class="health" href ="login.html">My health</a></li>
			<li> <a href ="#">Services</a></li>
			<li> <a href ="#">Sources</a></li>
			<li> <a href ="#">Fitness</a></li>
			<li> <a href ="#">Contact</a></li>
			<li> <a href ="#">About</a></li>
		</ul>	
		</div>
	</header>
	<div class="banner">
		<img src="record.jpg" alt="photo">
	</div>
	<div class="content">
		<!--<p>THIS IS THE CONTENT</p>-->
		<div class="intro">
		<h7>
			<h3>What is our website for ?</h3><br>
Online health care system introduces tracking and recording of our health and maintaining it in a convenient way. The main feature provided by using online health care system is that we can record our health condition and update it accordingly. It is very difficult to record our health condition in paper or any notes and even worse to calculate numerical values. So, online health care system fills the requirement in today’s world. 
</h7> 
		</div>
	</div>
		<div class="copyright">
			<p>copyright2018<p>
		</div>
</div>
</body>
</html>