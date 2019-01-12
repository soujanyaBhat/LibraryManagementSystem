<!DOCTYPE html>
<head>
<link href="a1.css" type="text/css" rel="stylesheet"/> 
<link href="css.css" type="text/css" rel="stylesheet"/>
<title>Book Search</title>
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


</header>
<body>
<div class="header"></div>
<br>
<div id="menu" align='center'>
  <form action="tempadmin.php"  method="GET">  
  Search for the books:
  <input type="search"  name="search" id="booksearch" placeholder="ISBN/ Title/ Genre/ Author" required>

  <input type="submit" value="Search"/>
  </form>
</div>
<div class="footer">
  <h5>Copyright @ Eugene McDermott Library</h5>
</div>
</body>
</html>
