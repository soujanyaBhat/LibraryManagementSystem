<!DOCTYPE html>
<head>
<link href="a1.css" type="text/css" rel="stylesheet"/>
<link href="css.css" type="text/css" rel="stylesheet"/>
<link href="index.css" type="text/css" rel="stylesheet"/>
<style>
.lib a
{
  float: left;
  padding: 10px 16px;
  margin-left: 30px;
}
div.x
{
    margin-left: 600px;
     margin-right: 450px;
    
}
</style>
<title>Search</title>
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
<body>
</header><div class="header"> Books in Library</div>
<?php 
session_start();
$servername = "localhost";
$username = "root";
$password = "root";
$database = "wpl";
$conn = mysqli_connect($servername, $username, $password, $database);
$query=$_SESSION['search'];
$page=$_GET["page"];
if($page=="" || $page=="1")
{
  $page1=0;
}
else
{
  $page1=($page*5)-5;
}

$sql1= "SELECT isbn,title,picture, availability from book where availability>0 and  ((category like '%$query%') or (title like '%$query%') or (author like '%$query%') or (isbn like '%$query%')) limit $page1,5 ;";
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
      echo "<tr><td class='coverImage'><img src='img/".$row1['picture']."' class='bookCover'></td><td class='res'><a href='detailsadmin.php?id=".$row1["isbn"]."'>".$row1["title"]."</a></td><td>".$row1['availability']."</td></tr>";
    } 
   
  echo "</table>";
}
else
{
echo "<div class='x'>";
echo "<strong>No books were found in the store with the given details</strong>";
echo "</div>";
}

$sql2= "SELECT isbn,title,picture from book where category='$query' and availability>0;";
$res=mysqli_query($conn,$sql2);
$cou=mysqli_num_rows($res) ;
$a=$cou/5;
$a=ceil($a);
echo "<br>"; echo "<br>";
for($b=1;$b<=$a;$b++)
{
    ?><div class='lib'><a href="adminfunctionality.php?page=<?php echo $b; ?>"style="text-decoration: underline"><?php echo $b." "; ?></a></div><?php
}
mysqli_close($conn);
?>

</body>
</html>


