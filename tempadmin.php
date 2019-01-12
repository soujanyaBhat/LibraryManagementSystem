<?php
  session_start();
?>
<?php 
$servername = "localhost";
$username = "root";
$password = "root";
$database = "wpl";
$conn = mysqli_connect($servername, $username, $password, $database);
$query=$_GET['search'];
$_SESSION['search']=$query;
header("location:adminfunctionality.php");
?> 