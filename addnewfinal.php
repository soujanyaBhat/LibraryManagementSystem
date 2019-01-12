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
$con = mysqli_connect($servername, $username, $password, $database);
$isbn=$_GET['isbn']; 
$title=$_GET['title'];
$author= $_GET['author']; 
$category= $_GET['category']; 
$picture= $_GET['picture'];
$description=$_GET['description'];
$link=$_GET['link'];
$availability=$_GET['availability'];

$sql = "INSERT INTO book (isbn,title,author,category,picture,description,availability)
VALUES ('$isbn', '$title', '$author','$category','$picture','$description','$availability');";

$sql11 = "INSERT INTO authorlink (author,link)
VALUES ('$author','$link');";


if(mysqli_query($con,$sql) && mysqli_query($con,$sql11)) 
	{
		echo "<div class='x'>";
		echo "<strong>Book added successfully</strong>";
		 echo "</div>";
	}
else 
{
  echo "<div class='x'>";
    echo "<strong>Book is already available</strong>";
     echo "</div>";
}
    

mysqli_close($con);
?>
<div class="footer">
  <h5>Copyright @ Eugene McDermott Library</h5>
</div>
</body>
</html>
