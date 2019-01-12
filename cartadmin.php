<!DOCTYPE html>
<head>
<link href="a1.css" type="text/css" rel="stylesheet"/>
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
<title> View cart</title>
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
$sql1="SELECT c.isbn,ce.title,ca.author,ce.availability from cart c,cart_expand ce,author_cart ca where c.name ='$user' and ce.title=ca.title and ce.isbn=c.isbn";
$result=mysqli_query($conn,$sql1);
if (mysqli_num_rows($result) > 0)
{
  echo "<table>
   <br> 
  <tr>
  <th>ISBN code of the Book</th>
  <th>Book Title</th>
  <th>Author</th>
  <th>Availability Status</th>
  <th>Action</th></tr>";
  
  while($row1 = mysqli_fetch_array($result))
  {
      
      echo "<tr><td name ='isbn'>".$row1["isbn"]."</td><td>".$row1['title']."</td><td>".$row1['author']."</td><td>".$row1["availability"].
    "</td><td><a href='checkoutadmin.php?id=".$row1['isbn']."&title=".$row1['title']."&author=".$row1['author']."&availability=".$row1['availability']."'>Borrow</a><br>
        <a href='removeadmin.php?id=".$row1['isbn']."&title=".$row1['title']."&author=".$row1['author']."&availability=".$row1['availability']."'>Remove</a></td></tr>";
    
  
    } 
    
  echo "</table>";
  

}
else
{
 
    echo "<div class='x'>";
    echo "<strong>No items in your cart!</strong>";
    echo "</div>";
  
}


mysqli_close($conn);
?>
<div class="footer">
  <h5>Copyright @ Eugene McDermott Library</h5>
</div>
</body>
</html>
