<?php 
session_start();
if(isset($_SESSION['username']))
{
    header('Location: index.php');
}

$mysqli = new mysqli("localhost", "root", "", "healthcare");
//include('dbconn.php');
if(isset($_POST['submit'])){
    $username=$_POST['username'];
    $password=$_POST['password'];

   $query = "select * from adduser where username='". $username ."' and password='".$password."'";
    $result = mysqli_query($mysqli,$query);
    $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
    $count = mysqli_num_rows($result);

    if($count >= 1) 
      {
        $_SESSION['username'] = $row['username'];
        header("location: index.php");
        
      }
      else 
      {
         echo "Your Login Name or Password is invalid";
      }
}
?>
<!DOCTYPE html>
<html>
<head>
<link href="login-css.css" rel="stylesheet" type="text/css"/>
</head>
<body>
  <div class="container">
    <form action=""  method="POST">
    <div class="login-container">
    <div class="imgcontainer">
    <a href="index.php"><img src="logo.jpg" alt="Untitled" class="untitled"></a>
    </div>
    <label for="uname"><b>Username</b></label>
    <input type="text" placeholder="Enter Username" name="username" required><br>
    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="password" required>
    <button type="submit" name="submit">Login</button><br>
    <label><input type="checkbox" checked="checked" name="remember"> Remember me</label><br>
    <a href="index.php"> <button type="button" class="cancelbtn">Cancel</button></a>
    <!--<span class="psw">Forgot <a href="#">password?</a></span>-->
  </div>
  </form>
  </div>
  
</body>

</html>
