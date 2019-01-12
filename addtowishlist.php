<!DOCTYPE html>
<head>
<link href="css.css" type="text/css" rel="stylesheet"/>
<link href="index.css" type="text/css" rel="stylesheet"/>
<style>
div.x
{
  margin-top: 200px;
  background-color: white;
    margin-left: 600px;
     margin-right: 600px;
     text-align: center;
    
}
</style>
<title> Add to wishlist</title>
</head>

<header>
   <?php
  session_start();
  if(isset($_SESSION['login_user'])) {
    $user = $_SESSION['login_user'];
} 
?>
<a href="listall.php" method="post"><img src="back.jpg" alt="Back" align="left" style="width: 30px"></a>
<a href="operations.php" method="post"><img src="home.jpg" alt="Home" align='left' style="width: 30px"></a>
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
$sql1="SELECT * from wishlist where isbn='$q' and name='$user';";
$result=mysqli_query($conn,$sql1);
if (mysqli_num_rows($result) > 0)
{
echo "<div class='x'>";
    echo "<strong>Already added to wish list</strong>";
    echo "</div>";
}


else
{
  $sql = "INSERT INTO wishlist (isbn,name)
VALUES ('$q', '$user');";

if(mysqli_query($conn,$sql)) 
  {
    echo "<div class='x'>";
    echo "<strong>Added to wishlist successfully</strong>";
    echo "</div>";
  }
}


mysqli_close($conn);
?>
<div class="footer">
  <h5>Copyright @ Eugene McDermott Library</h5>
</div>
</body>
</html>
