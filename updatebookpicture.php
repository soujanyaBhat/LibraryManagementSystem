<!DOCTYPE html>
<head>
<link href="css.css" type="text/css" rel="stylesheet"/>
<link href="index.css" type="text/css" rel="stylesheet"/>
<title> Update picture</title>
</head>

<header>
   <?php
  session_start();
  if(isset($_SESSION['login_user'])) {
    $user = $_SESSION['login_user'];
} 
?>
<a href="listalladmin.php" method="post"><img src="back.jpg" alt="Back" align="left" style="width: 30px"></a>
<a href="operationsadmin.php" method="post"><img src="home.jpg" alt="Home" align='left' style="width: 30px"></a>
<a href="logout.php" method="post"><img src="SignOut.jpg" alt="Sign Out" align="right" style="width: 30px"></a>
<h1>Eugene McDermot Library</h1>
</header>
<body>
<div class="header"></div>
  <?php
  $q=$_SESSION['isbn'];
  $_SESSION['isbn']=$q;
  ?>
</form>Update book picture</div>
<div id="menu" >
  <form action="updatepicturefinal.php"  method="GET"  >
    
        
        <input type="text" name="picture" id="picture" placeholder="picture" required>
        <br>
        <br>
        
  <br/>
    <input type="submit" name="add" id="add" value="Update">
  </form>

</div>
<div class="footer">
  <h5>Copyright @ Eugene McDertmott Library</h5>
</div>
</body>
</html>
