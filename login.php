
<!DOCTYPE html>
<html>
<head>
<link href="login-css.css" rel="stylesheet" type="text/css"/>
</head>
<body>
  <div class="container">
    <form action=""  method="POST">
    <div class="login-container">
      <img class="login-avatar" src="logo.jpg" alt="login-avatar" height="100px" ><br>
    <label for="uname"><b>Username</b></label>
    <input type="text" placeholder="Enter Username" name="username" required><br>
    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="password" required>
    <button type="submit" name="submit">Login</button><br>
    <label><input type="checkbox" checked="checked" name="remember"> Remember me</label><br>
    <a href="index.php"> <button type="button" class="cancelbtn">Cancel</button></a><br><br><br>
  <?php 
session_start();
if(isset($_SESSION['username']))
{
    header('Location: index.php');
}

include('dbconn.php');
if(isset($_POST['submit']))
{
    $username=$_POST['username'];
    $password=$_POST['password'];


    /*$get = mysqli_query($conn,"SELECT* FROM userdb where username='$username' AND password='$password'");
    $get2 = mysqli_fetch_assoc($get);
    $id = $get2['id'];
    $num = mysqli_num_rows($get);*/

   $query = "select * from userdb where username='". $username ."' and password='".$password."'";
    $result = mysqli_query($conn,$query);
    $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
    //$id = $row['id'];
    $count = mysqli_num_rows($result);
    if($count >= 1) 
      {
        //echo $id;
        //if user exists
        
        $_SESSION['username'] = $row['username'];
        //header("location: profile.php?id=$id");
        header("location: index.php");
        
      }
      else 
      { 
        //echo $id;
        echo $row['username'];
        //if username doesnt exists
         echo "Your Username or Password is invalid";
      }
}
?>
  </div>
  </form>
  </div>
  
</body>

</html>
