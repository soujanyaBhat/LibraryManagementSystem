<!DOCTYPE html>
<head>
<link href="css.css" type="text/css" rel="stylesheet"/>
<link href="index.css" type="text/css" rel="stylesheet"/>
<style>
div.x
{
  margin-top: 200px;
    margin-left: 600px;
     margin-right: 600px;
     text-align: center;
    
}
</style>
<title> Cart</title>
</head>
<header>
   <?php
  session_start();
  if(isset($_SESSION['login_user'])) {
    $user = $_SESSION['login_user'];
} 
?>
<a href="adminwishlist.php" method="post"><img src="back.jpg" alt="Back" align="left" style="width: 30px"></a>
<a href="operationsadmin.php" method="post"><img src="home.jpg" alt="Home" align='left' style="width: 30px"></a>
<a href="logout.php" method="post"><img src="SignOut.jpg" alt="Sign Out" align="right" style="width: 30px"></a>
<h1>Eugene McDermot Library</h1>
</header>
<body>
<div class="header"></div>
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
}

else
{
  if ($avail>0){
    $sql1 = "INSERT INTO cart(isbn, name) values('$q','$user');";
    $res1 = mysqli_query($conn, $sql1);
    $sql3 = "INSERT INTO author_cart(title, author) values('$title','$author');";
    $res3 = mysqli_query($conn, $sql3);
    $sql2 = "INSERT INTO cart_expand(isbn, title, availability) values('$q','$title','$avail');";
    $res2 = mysqli_query($conn, $sql2);
    echo "<div class='x'>";
    echo "<strong>Added to cart successfully</strong>";
    echo "</div>";
  }
  else{
     echo "<div class='x'>";
    echo" Cannot add to cart. 0 copies available at the Library";
    echo "</div>";
  }

	mysqli_close();
}

?>
<div class="footer">
  <h5>Copyright @ Eugene McDermott Library</h5>
</div>
</body>
</html>
