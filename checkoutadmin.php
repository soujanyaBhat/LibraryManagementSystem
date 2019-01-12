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
<title> Add to cart</title>
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
$date=date('M d, Y');
$date=strtotime($date);
$date=strtotime("-1 day",$date);
$date=date('M d, Y',$date);
$dated = strtotime($date);
$dated = strtotime("+10 day", $dated);
$moddate= date('M d, Y', $dated);
$sql11 = "SELECT name,title,doi,dor from history where name ='$user' and title='$title' and dor>curdate()";
$res11 =mysqli_query($conn,$sql11);
if (mysqli_num_rows($res11) > 0)
{
echo "<div class='x'>";
    echo "You have already borrowed this book. Please return it on time in order to borrow it again";
    echo "</div>";
}
else {
$sql41 = "Delete from cart_expand where isbn='$q' and title='$title' and availability='$avail'";
$res41 = mysqli_query($conn, $sql41);
$sql0 = "Delete from cart where name= '$user' and isbn='$q' ;";
$res0 = mysqli_query($conn, $sql0);
$sql31 = "Delete from author_cart where title='$title' and author='$author';";
$res31 = mysqli_query($conn, $sql31);

$sql2 = "INSERT INTO history(name,title,doi,dor) values('$user','$title',curdate(),date_add(curdate(),interval 10 day));";
$res2 = mysqli_query($conn, $sql2);


if($avail>0)
{
$sql3 = "UPDATE book SET availability = availability-1 WHERE isbn=$q;";
$res3 = mysqli_query($conn, $sql3);
}


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
    "</td><td><a href='checkoutadmin.php?id=".$row1['isbn']."&title=".$row1['title']."&author=".$row1['author']."&availability=".$row1['availability']."'>CheckOut</a><br>
				<a href='removeadmin.php?id=".$row1['isbn']."&title=".$row1['title']."&author=".$row1['author']."&availability=".$row1['availability']."'>Remove</a></td></tr>";
    
  
    } 
    
  echo "</table>";
	
	
}
$sql24 = "Select doi from history where name='$user' and title='$title'";
$result24=mysqli_query($conn,$sql24);
  while($row1 = mysqli_fetch_array($result24))
  {
echo "<div class='x'>";
    echo "Date of Issue: ".$row1['doi'].". Please return in 10 days.";
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
