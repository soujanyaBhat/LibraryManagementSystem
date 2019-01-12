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
<title> Add to cart</title>
</head>
<header>
   <?php
  session_start();
  if(isset($_SESSION['login_user'])) {
    $user = $_SESSION['login_user'];
} 
?>
<a href="operations.php" method="post"><img src="back.jpg" alt="Back" align="left" style="width: 30px"></a>
<a href="operations.php" method="post"><img src="home.jpg" alt="Home" align='left' style="width: 30px"></a>
<a href="logout.php" method="post"><img src="SignOut.jpg" alt="Sign Out" align="right" style="width: 30px"></a>
<h1>Eugene McDermot Library</h1>
</header><div class="header"> 
<?php 
session_start();
$servername = "localhost";
$username = "root";
$password = "root";
$database = "wpl";

$booktaken="";
$conn = mysqli_connect($servername, $username, $password, $database);
$q=$_GET['id'];
$title = $_GET['title'];
$author = $_GET['author'];
$avail =$_GET['availability'];
$sql0 = "Select * from cart where name= '$user' and isbn='$q' ;";
$res0 = mysqli_query($conn, $sql0);

if (mysqli_num_rows($res0) > 0)
{
	echo "<div class='x'>";
    echo "<strong>Already added to cart</strong>";
    echo "</div>";
	//$booktaken="Yes";
}



else
{
$sql1 = "INSERT INTO cart(isbn, name,title,author,availability) values('$q','$user','$title','$author','$avail');";
$res1 = mysqli_query($conn, $sql1);

//$sql2 = "Select * from shoppingcart where UserName= '$uname';";


	echo "<div class='x'>";
    echo "<strong>Added to cart successfully</strong>";
    echo "</div>";
	mysqli_close();
}

?>
</body>
</html>
