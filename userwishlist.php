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
<title>Wishlist</title>
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
$sql1="SELECT wishlist.isbn,book.availability,book.title,book.author from wishlist JOIN book ON wishlist.isbn=book.isbn where wishlist.name='$user';";
$result=mysqli_query($conn,$sql1);
if (mysqli_num_rows($result) > 0)
{
  echo "<table>
  <br>
  <tr>
  <th>ISBN</th>
  <th>Title</th>
  <th>Availability Status</th>
  <th>Action</th></tr>";

  while($row1 = mysqli_fetch_array($result))
  {
    echo "<tr><td>".$row1["isbn"]."</td><td>".$row1["title"]."</td><td>".$row1["availability"]."</td><td><a href='cart.php?id=".$row1['isbn']."&title=".$row1['title']."&author=".$row1['author']."&availability=".$row1['availability']."'>Add to cart</a><br>
    <a href='removeWishlist.php?id=".$row1['isbn']."&title=".$row1['title']."&author=".$row1['author']."&availability=".$row1['availability']."'>Remove from wishlist</a></td></tr>";
  } 
  echo "</table>";
}
else
{
 
    echo "<div class='x'>";
    echo "<strong>No wishlist generated yet for you</strong>";
    echo "</div>";
  
}
mysqli_close($conn);
?>
<div class="footer">
  <h5>Copyright @ Eugene McDermott Library</h5>
</div>
</body>

</html>
