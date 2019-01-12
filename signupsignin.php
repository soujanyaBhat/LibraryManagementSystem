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
</header>
<body>
<div class="header"> Books in Library</div>
<?php
$servername = "localhost";
$username = "root";
$password = "root";
$database = "wpl";
$con = mysqli_connect($servername, $username, $password, $database);
$name=$_GET['name'];
$password=$_GET['password'];
if($name=='admin'|| $name=='Admin' )
{
$sqla="SELECT * from user_info where name='$name';";
$res = mysqli_query($con, $sqla);
while($row = mysqli_fetch_assoc($res))
{
     if (password_verify($password, $row[password])) 
    {
        session_start();
$_SESSION['login_user']= $name;
echo "Logged in as ".$row[name]."";
header('Location:operationsadmin.php');
    }
    else
    {
        header('Location:home.html');
    }
    
 }

}

else
{

        $sql="SELECT * from user_info where name='$name';";
$result = mysqli_query($con, $sql);
while($rowa = mysqli_fetch_assoc($result))
{

    if (password_verify($password, $rowa[password])) 
    {
        session_start();
$_SESSION['login_user']= $name;
echo "Logged in as ".$rowa[name]."";
header('Location:operations.php');
    }
    else
    {
        header('Location:home.html');
    }
    
}
 if(mysqli_num_rows($result) == 0)
 {
    header('Location:home.html');
 }
    }
    
    
    
mysqli_close($con);
?>

</body>
</html>
