<!DOCTYPE html>
<head>

<link href="a1.css" type="text/css" rel="stylesheet"/>
<link href="css.css" type="text/css" rel="stylesheet"/>
<link href="index.css" type="text/css" rel="stylesheet"/>
<style>
div.upoptions
{ 
  float:left;
  background-color: white;
  margin-left: 80px;
  margin-right: 800px;
  padding-right: 60px;
   
    
}

img.detailedimage {
  float : right;
    margin-top: 35px;
    margin-left: 200px;
    margin-right: 80px;
}


div.x
{
   background-color: white;
    margin-left: 80px;
     margin-right: 450px;
    
}

table, tr, td {
    border: none;
    align:left;
}
</style>
<title> Details</title>
</head>
<header>
   <?php
  session_start();
  if(isset($_SESSION['login_user'])) {
    $user = $_SESSION['login_user'];
} 
?>
<a href="listall.php" method="post"><img src="back.jpg" alt="Back" align="left" style="width: 30px"></a>
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
$q="";
$q=$_GET["id"];
$_SESSION['isbn']=$q;
if($q=="")
{
$q=$_POST['isbn'];
$_SESSION['isbn']=$q;
}
$sql1= "SELECT b.*,al.link from book b,authorlink al where isbn ='$q' and b.author=al.author";
$result=mysqli_query($conn,$sql1);

if (mysqli_num_rows($result) > 0)
{
  while($row1 = mysqli_fetch_array($result))
  {
 echo "<img height=300px width=300px src='img/".$row1['picture']."' class='detailedimage'>";
  echo "<br>";
  echo "<br>";
  echo "<div class='x'>";
  echo "<strong>ISBN code : </strong>".$row1['isbn']."";
  echo "<br>";
  echo "<br>";
  echo "<strong>Title : </strong>".$row1['title']."";
  echo "<br>";
  echo "<br>";
  echo "<strong>Genre : </strong>".$row1['category']."";  
  echo "<br>";
  echo "<br>";
  echo "<strong>Description : </strong>".$row1['description']."";
  echo "<br>";
  echo "<br>";
  echo "<strong>Author : </strong>".$row1['author']."";
  echo "<br>";
  echo "<br>";
  echo "<a target='_blank' href=".$row1['link'].">About the author";
  echo "</div>";
  echo "<br>";
  echo "<br>"; 
  }
}
mysqli_close($conn);
?>
  <br>
  <br>
<table align="left">
<tr>
  <td><?php echo "<form  action='addtowishlist.php' method='post'>
  <input type='submit' name='isbn' value='Add to wish list' onclick='this.form.submit()'/></form>";?></td>
 </tr></table>
<div class="footer">
  <h5>Copyright @ Eugene McDermott Library</h5>
</div>
</body>
</html>
