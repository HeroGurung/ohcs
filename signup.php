<?php

include_once 'dbconn.php';

if(isset($_POST["submit"]))
{
//$Id=$_POST["Id"];
$FirstName=$_POST["FirstName"];
$LastName=$_POST["LastName"];
$Age=$_POST["Age"];
$Weight=$_POST["Weight"];
$Gender=$_POST["Gender"];
$Height=$_POST["Height"];
$Phone=$_POST["Phone"];
$EmailId=$_POST["EmailId"];
$username=$_POST["username"];
$password=$_POST["password"];

$query = "INSERT INTO adduser(FirstName,LastName,Age,Weight,Gender,Height,Phone,EmailId,username,password)VALUES('$FirstName','$LastName','$Age','$Weight','$Gender','$Height','$Phone','$EmailId','$username','$password')";

mysqli_query($conn,$query);
echo 'Data insert successfully';
header('Location: login.php');
return false;
}

?>
<!doctype html>
<html>
<body>
	<div class="container">
	<div class="signup">
		<div class="container">
		<form action="">
		<div class="container">
			<h2>Register form</h2>
			<label ><b>First Name</b></label>
			<input type="text" placeholder="Enter first name" name="FirstName" required><br><br>
			<label ><b>Last Name</b></label>		
			<input type="text" placeholder="Enter last name" name="LastName" required><br><br>
			<label ><b>Age</b></label>
		    <input type="text" placeholder="Enter age" name="age" required><br><br>
		    <label ><b>Weignt</b></label>
		    <input type="text" placeholder="Enter weight in kg" name="Weight" required><br><br>
		    <label ><b>Gender</b></label>
		    <input type="text" placeholder="Enter m or f" name="Gender" required><br><br>
		    <label ><b>Height</b></label>
		    <input type="text" placeholder="Enter height in ft" name="Height" required><br><br>
		    <label ><b>Phone no</b></label>
		    <input type="text" placeholder="Enter phone no" name="Phone" required><br><br>
		    <label ><b>Email id</b></label>
		    <input type="text" placeholder="Enter email" name="EmailId" required><br><br>
		    <label ><b>Username</b></label>
		    <input type="text" placeholder="Enter Username" name="username" required><br><br>
		    <label ><b>Password</b></label>
		    <input type="password" placeholder="Enter Password" name="password" required><br><br>
		    <button type="submit">Login</button>
		    <label>
		      <input type="checkbox" checked="checked" name="remember"> Remember me
		    </label>
  			</div>
			</form>
		</div>
	</div>
</div>
</body>
</html>