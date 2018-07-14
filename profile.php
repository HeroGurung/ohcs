<?php 
/*include_once 'dbconn.php';
mysqli_select_db($conn,'healthcare');
$id = $_REQUEST['id'];
$get = mysqli_query($conn,"SELECT * FROM userdb WHERE id='$id'");
$get2 = mysqli_fetch_assoc($get);

$username = $get2['username'];*/
?>


 <!DOCTYPE html>
<html>
<head>
</head>
<body>
<?php 
session_start();
if(isset($_SESSION['username']))
				{
					echo '<a href="logout.php">Logout</a>';
					echo '<br>';
					echo '<a href="index.php">Go to home page</a>';
				}
				else
				{
					echo '<a href = "login.php">click here to login </a>';
				}
 ?>
</body>
</html>
