<!DOCTYPE html>
<head>
<link href="css.css" type="text/css" rel="stylesheet"/>
<link href="index.css" type="text/css" rel="stylesheet"/>
<title> Delete book</title>
<style>
div.x
{
  margin-top: 200px;
  margin-left: 600px;
  margin-right: 650px;
    
}
</style>
</head>
<header>
   <?php
  session_start();
  if(isset($_SESSION['login_user'])) {
    $user = $_SESSION['login_user'];
} 
?>
<a href="operationsadmin.php" method="post"><img src="back.jpg" alt="Back" align="left" style="width: 30px"></a>
<a href="operationsadmin.php" method="post"><img src="home.jpg" alt="Home" align='left' style="width: 30px"></a>
<a href="logout.php" method="post"><img src="SignOut.jpg" alt="Sign Out" align="right" style="width: 30px"></a>
<h1>Eugene McDermot Library</h1>
</header>
<body>
<div class="header"></div>
<?php 
$servername = "localhost";
$username = "root";
$password = "root";
$database = "wpl";
$conn = mysqli_connect($servername, $username, $password, $database);
$q=$_SESSION['isbn'];
$_SESSION['isbn']=$s;

$sql1= "UPDATE book set availability=0 where isbn ='$q'";
$result=mysqli_query($conn,$sql1);
if(mysqli_query($conn,$sql1)) 
  {
    echo "<div class='x'>";
    echo "<strong>Book deleted successfully</strong>";
     echo "</div>";
  }
  else {echo "Error: " . $sql . "<br>" . mysqli_error($conn);}
mysqli_close($conn);
?>
<div class="footer">
  <h5>Copyright @ Eugene McDermott Library</h5>
</div>
</body>
</html>
