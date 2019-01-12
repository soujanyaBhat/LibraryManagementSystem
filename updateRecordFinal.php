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
<body>
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
$conc = mysqli_connect($servername, $username, $password, $database);
$q=$_SESSION['isbn'];
$_SESSION['isbn']=$q;
$isbn=$_GET['isbn']; 
$title=$_GET['title'];
$author= $_GET['author']; 
$oldauthor= $_SESSION['oldauthor'];
$category= $_GET['category']; 
$picture= $_GET['picture'];
$description=$_GET['description'];
$link=$_GET['link'];
$availability=$_GET['availability'];

/*
echo "Test";
echo $oldauthor;
echo $author;*/

$sql01 = "delete from authorlink where author='$oldauthor'";
$res01=mysqli_query($conc,$sql01);

$sql02 = "UPDATE book SET 
title='$title',
author='$author',
category='$category',
picture='$picture',
description='$description',
availability='$availability'
where isbn='$q';";
$res02=mysqli_query($conc,$sql02);

$sql03 = "INSERT INTO authorlink(author, link) values('$author','$link');";
$res03=mysqli_query($conc,$sql03);


if(res01 && res02 && res03) 
	{
		echo "<div class='x'>";
		echo "<strong>Book details updated successfully</strong>";
		 echo "</div>";
	}
	else {echo "Error: " . $sql02 . "<br>" . mysqli_error($conc);}

    

mysqli_close($conc);
?>
<div class="footer">
  <h5>Copyright @ Eugene McDermott Library</h5>
</div>
</body>
</html>
