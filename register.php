<!DOCTYPE html>
<head>
<link href="css.css" type="text/css" rel="stylesheet"/>
<title> Search Results</title>
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
</head>
<header>
	<h1>Eugene McDermot Library</h1>
	<a href="home.html" method="post"><img src="home.jpg" alt="Home" align='left' style="width: 30px"></a>
</header>
<body>
<div class="header"></div>
<?php
$servername = "localhost";
$username = "root";
$password = "root";
$database = "wpl";
$con = mysqli_connect($servername, $username, $password, $database);
$name=$_GET['txt_uname']; 
$email=$_GET['txt_email'];
$password= $_GET['password'];  
$phone= $_GET['phone'];

$pwhash = password_hash($password, PASSWORD_DEFAULT);

$sql = "INSERT INTO user_info (email,name,password,phone)
VALUES ('$email', '$name', '$pwhash','$phone');";



if(mysqli_query($con,$sql)) 
	{
		echo "<div class='x'>";
		echo "<strong>Sign up success</strong>";
		 echo "</div>";
	}

    

mysqli_close($con);
?>
<div class="footer">
  <h5>Copyright @ Eugene McDermott Library</h5>
</div>

</body>
</html>
