<!DOCTYPE html>
<head>
<link href="css.css" type="text/css" rel="stylesheet"/>
<link href="index.css" type="text/css" rel="stylesheet"/>
<title> Results of search</title>
<style>
div.x
{
  background-color: white;
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
<a href="listalladmin.php" method="post"><img src="back.jpg" alt="Back" align="left" style="width: 30px"></a>
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
$con = mysqli_connect($servername, $username, $password, $database);
$q=$_SESSION['isbn'];
$description=$_GET['description'];

$sql = "UPDATE book set description='$description' where isbn='$q';";

if(mysqli_query($con,$sql)) 
  {
    echo "<div class='x'>";
    echo "<strong>Description updated successfully</strong>";
     echo "</div>";
  }
  else {echo "Error: " . $sql . "<br>" . mysqli_error($con);}

    

mysqli_close($con);
?>

</body>
</html>
