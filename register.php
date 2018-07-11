<?php

include_once 'dbconn.php';

if(isset($_POST["button"]))
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
<!DOCTYPE html>
<html>
<body>
<h1>REGISTER FORM</h1>
<form id="form1" name="form1" method="post" action="">
            
             <label>FirstName </label>
            <input type="text" name="FirstName" id="textfield2"/>
            </label></br>
            <label>LastName </label>
            <input type="text" name="LastName" id="textfield2"/>
            </label></br>
            <label>Age </label>
            <input type="text" name="Age" id="textfield3"/>
            </label></br>
             <label>Weight </label>
            <input type="text" name="Weight" id="textfield4"/>
            </label></br>
            <label>Gender </label>
            <input type="text" name="Gender" id="textfield5"/>
            </label></br>
             <label>Height &</label>
            <input type="text" name="Height" id="textfield6"/>
            </label></br>
             <label>Phone </label>
            <input type="text" name="Phone" id="textfield7"/>
            </label></br>
            <label> EmailId </label>
            <input type="text" name="EmailId" id="textfield8"/>
            </label></br>
             <label>username </label>
            <input type="text" name="username" id="textfield9"/>
            </label></br>
            <label>password </label>
            <input type="text" name="password" id="textfield10"/>
            </label></br>
            <input class="registerbtn"  type="submit" name="button" id="button" value="Submit"/>
            </form>
</body>
</html>
