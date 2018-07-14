<?php

include_once 'dbconn.php';

if(isset($_POST["button"]))
{

//$Id=$_POST["Id"];
$FirstName=$_POST["FirstName"];
$LastName=$_POST["LastName"];
$EmailId=$_POST["EmailId"];
$username=$_POST["username"];
$password=$_POST["password"];

$query = "INSERT INTO userdb(FirstName,LastName,EmailId,username,password)VALUES('$FirstName','$LastName','$EmailId','$username','$password')";

mysqli_query($conn,$query);
echo 'Data insert successfully';
header('Location: login.php');
return false;
}

?>
<!DOCTYPE html>
<html>
<body>
<h1>REGISTER FORM</h1>
<form id="form1" name="form1" method="post" action="">
            
             <label>First Name </label>
            <input type="text" name="FirstName" id="textfield2"/><br>
            </label><br>
            <label>Last Name </label>
            <input type="text" name="LastName" id="textfield2"/><br>
            </label><br>
            <label> Email Id </label>
            <input type="text" name="EmailId" id="textfield8"/><br>
            </label><br>
             <label>Username </label>
            <input type="text" name="username" id="textfield9"/><br>
            </label><br>
            <label>Password </label>
            <input type="text" name="password" id="textfield10"/><br>
            </label><br>
            <input class="registerbtn"  type="submit" name="button" id="button" value="Submit"/>
            </form>
</body>
</html>
