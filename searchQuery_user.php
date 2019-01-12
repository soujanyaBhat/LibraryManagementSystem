<?php
  session_start();
?>
<?php 
$servername = "localhost";
$username = "root";
$password = "root";
$database = "wpl";
$conn = mysqli_connect($servername, $username, $password, $database);
$query=$_GET['Category'];
$_SESSION['Category']=$query;
header("location:categoryFilter_user.php");
?> 