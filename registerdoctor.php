<?php
include_once('dbconn.php');
if(isset($_POST["button"]))
{

$Id=$_POST["Id"];
$FirstName=$_POST["FirstName"];
$LastName=$_POST["LastName"];
$Age=$_POST["Age"];
$Gender=$_POST["Gender"];
$Phone=$_POST["Phone"];
$Qualification=$_POST["Qualification"];
$WorkingDepart=$_POST["WorkingDepart"];
$Emailid=$_POST["Emailid"];
$username=$_POST["username"];
$password=$_POST["password"];
mysqli_query($conn,"INSERT INTO adddoctor(Id,FirstName,LastName,Age,Gender,Phone,Qualification,WorkingDepart,EmailId,username,password)VALUES('$Id','$FirstName','$LastName','$Age','$Gender','$Phone','$Qualification','$WorkingDepart','$Emailid','$username','$password')" );
echo "Data insert successfully";
return false;
}

?>

<?php
echo
'<form id="form1" name="form1" method="post" action="">
            <label>Id &nbsp;&nbsp;
            <input type="text" name="Id" id="textfield1"/>
            </label></br>
             <label>FirstName &nbsp;&nbsp;
            <input type="text" name="FirstName" id="textfield2"/>
            </label></br>
            <label>LastName &nbsp;&nbsp;
            <input type="text" name="LastName" id="textfield2"/>
            </label></br>
            <label>Age &nbsp;&nbsp;
            <input type="text" name="Age" id="textfield3"/>
            </label></br>
             <label>Gender &nbsp;&nbsp;
            <input type="text" name="Gender" id="textfield4"/>
            </label></br>
            <label>Phone &nbsp;&nbsp;
            <input type="text" name="Phone" id="textfield5"/>
            </label></br>
             <label>Qualification &nbsp;&nbsp;
            <input type="text" name="Qualification" id="textfield6"/>
            </label></br>
             <label>WorkingDepart &nbsp;&nbsp;
            <input type="text" name="WorkingDepart" id="textfield7"/>
            </label></br>
            <label>Emailid &nbsp;&nbsp;
            <input type="text" name="Emailid" id="textfield8"/>
            </label></br>
             <label>username &nbsp;&nbsp;
            <input type="text" name="username" id="textfield9"/>
            </label></br>
            <label>password &nbsp;&nbsp;
            <input type="text" name="password" id="textfield10"/>
            </label></br>
            <input type="submit" name="button" id="button" value="Submit"/>
            </form>';
            ?>
            
            
