<!DOCTYPE html>
<head>

<link href="a1.css" type="text/css" rel="stylesheet"/>
<link href="css.css" type="text/css" rel="stylesheet"/>
<link href="index.css" type="text/css" rel="stylesheet"/>

<style>
.lib a
{
  color:black;
  float: left;
 
}
div.x
{
  margin-left: 600px;
  margin-right: 450px; 
}

</style>
<title> List of Books</title>
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
<div class="header"> Books in Library</div>
<br>
  <form action="searchQuery_user.php" method="GET">  
    Filter Based on Category:
  <select name="Category" id='category'>
  <option value="Select">Select a category</option>
  <option value="Mystery">Mystery</option>
  <option value="Thriller">Thriller</option>
  <option value="Romance">Romance</option>
  <option value="Fiction">Fiction</option>
  <option value="Novel">Novel</option>
  <option value="Drama">Drama</option>
</select>
  <input type="submit" value="Search"/> 
  </form>
<?php 
$servername = "localhost";
$username = "root";
$password = "root";
$database = "wpl";
$conn = mysqli_connect($servername, $username, $password, $database);
$query=$_POST['search'];
$page=$_GET["page"];
if($page=="" || $page=="1")
{
  $page1=0;
}
else
{
  $page1=($page*5)-5;
}
$sql1= "SELECT isbn,title,picture,availability from book where availability>'0' limit $page1,5 ;";
$result=mysqli_query($conn,$sql1);

if (mysqli_num_rows($result) > 0){
  echo "<table><br> 
  <tr><th>Icon</th>   
 	<th>Title of book</th>
  <th>Availability</th>
  </tr>";

  while($row1 = mysqli_fetch_array($result))
  {
  	$avatar=$row1["picture"];
	$path ="img/".$avatar;
			echo "<tr><td class='coverImage'><img src='img/".$row1['picture']."' class='bookCover'></td><td class='res'><a href='details.php?id=".$row1["isbn"]."'>".$row1["title"]."</a></td><td>".$row1['availability']."</td></tr>";
    } 
	 
  echo "</table>";
}
else{
	 echo "<div class='x'>";
echo "No books are found in the store with the given details";
echo "</div>";
}
$sql2= "SELECT isbn,title,picture from book where availability>'0';";
$res=mysqli_query($conn,$sql2);
$cou=mysqli_num_rows($res) ;
$a=$cou/5;
$a=ceil($a);
echo "<br>"; echo "<br>";
for($b=1;$b<=$a;$b++)
{
  ?><div class='lib'><a href="listall.php?page=<?php echo $b; ?>"><?php echo $b." "; ?></a></div><?php
}
mysqli_close($conn);
?>
</body>
</html>


