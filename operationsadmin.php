<!DOCTYPE html>
<head>
<link href="a1.css" type="text/css" rel="stylesheet"/>
<link href="css.css" type="text/css" rel="stylesheet"/>
<title>User home</title>
<style>
li  {
    display: block;
    color: white;
    text-decoration: none;
}

</style>
</head>
<header>
  <?php
  session_start();
  if(isset($_SESSION['login_user'])) {
    $user = $_SESSION['login_user'];
} 
echo "Welcome ".$user."";
?>
 <a href="logout.php" method="post"><img src="SignOut.jpg" alt="Sign Out" align="right" style="width: 30px"></a>
  <h2>Eugene McDermot Library</h2> 
 
</header>
<body>
<div class="header"></div> 
 <div id="menu" align='center'>
 <ul>
  <li><form action="listalladmin.php" method="post"><input type="submit" name="formSubmit" value="View all books" /></form></li><br>
  <li><form action="searchadmin.php" method="post"><input type="submit" name="formSubmit" value="Search for books" /></form></li><br>
  <li><form action="addnew.php" method="post"><input type="submit" name="formSubmit" value="Add new book" /></form></li><br>
  <li><form action="adminwishlist.php" method="post"><input type="submit" name="formSubmit" value="View Your Wishlist" /></form></li><br>
  <li><form action="cartadmin.php" method="post"><input type="submit" name="formSubmit" value="View Your Cart" /></form></li><br>
  <li><form action="historyAdmin.php" method="post"><input type="submit" name="formSubmit" value="View your borrowing history" /></form></li><br>

  </ul>
</div>
<div class="footer">
  <h5>Copyright @ Eugene McDermott Library</h5>
</div>
</body>
</html>
