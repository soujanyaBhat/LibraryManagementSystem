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
<title> View history</title>
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
$sql1="SELECT name,title,doi,dor from history where name ='$user'";
$result=mysqli_query($conn,$sql1);
if (mysqli_num_rows($result) > 0)
{
  echo "<table>
   <br> 
  <tr>
  <th>Borrower's name</th>
  <th>Book Title</th>
  <th>Date of Issue</th>
  <th>Date of Return</th>";
	
  while($row1 = mysqli_fetch_array($result))
  {
      
      echo "<tr><td>".$row1["name"]."</td><td>".$row1['title']."</td><td>".$row1['doi']."</td><td>".$row1["dor"]."</td></tr>";
    
  
    } 
    
  echo "</table>";
	

}
else
{
 
    echo "<div class='x'>";
    echo "<strong>No Borrowing history yet for you</strong>";
    echo "</div>";
  
}


mysqli_close($conn);
?>
<div class="footer">
  <h5>Copyright @ Eugene McDermott Library</h5>
</div>
</body>
</html>
