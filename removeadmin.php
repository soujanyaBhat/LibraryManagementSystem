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
  <h1>Eugene McDermot Library</h1>
<a href="operations.php" method="post"><img src="back.jpg" alt="Back" align="left" style="width: 30px"></a>
<a href="operations.php" method="post"><img src="home.jpg" alt="Home" align='left' style="width: 30px"></a>
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
$sql41 = "Delete from cart_expand where isbn='$q' and title='$title' and availability='$avail'";
$res41 = mysqli_query($conn, $sql41);
$sql0 = "Delete from cart where name= '$user' and isbn='$q' ;";
$res0 = mysqli_query($conn, $sql0);
$sql31 = "Delete from author_cart where title='$title' and author='$author';";
$res31 = mysqli_query($conn, $sql31);



$sql1="SELECT c.isbn,ce.title,ca.author,ce.availability from cart c,cart_expand ce,author_cart ca where c.name ='$user' and ce.title=ca.title and ce.isbn=c.isbn";
$result=mysqli_query($conn,$sql1);
if (mysqli_num_rows($result) > 0)
{
  echo "<table>
    
  <tr>
  <th>ISBN code of the Book</th>
  <th>Book Title</th>
  <th>Author</th>
  <th>Availability Status</th>
  <th>Action</th></tr>";
	
  while($row1 = mysqli_fetch_array($result))
  {
      
      echo "<tr><td name ='isbn'>".$row1["isbn"]."</td><td>".$row1['title']."</td><td>".$row1['author']."</td><td>".$row1["availability"].
    "</td><td><a href='checkoutadmin.php?id=".$row1['isbn']."&title=".$row1['title']."&author=".$row1['author']."&availability=".$row1['availability']."'>CheckOut</a><br>
				<a href='removeadmin.php?id=".$row1['isbn']."&title=".$row1['title']."&author=".$row1['author']."&availability=".$row1['availability']."'>Remove</a></td></tr>";
    
  
    } 
    
  echo "</table>";
	

}
echo "<div class='x'>";
    echo "The Item you selected has been removed from your cart";
    echo "</div>";

mysqli_close($conn);


?>
</body>
</html>
