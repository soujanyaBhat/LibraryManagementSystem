<!DOCTYPE html>
<head>
<link href="a1.css" type="text/css" rel="stylesheet"/>
<link href="css.css" type="text/css" rel="stylesheet"/>
<link href="index.css" type="text/css" rel="stylesheet"/>
<title> Results of search</title>

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
<div id="menu" >

				<form action="addnewfinal.php"  method="GET" >
          <table style="width: 45%;">
            <tr><td><div align="left"><b> ISBN : </b></div></td>
              <td class="block" align="left">
				<div align="left">
            <input type="text"  id="isbn" name="isbn" placeholder="ISBN" required>
            
        </div>
      </td></tr>
       <tr><td><div align="left"><b> Title : </b></div></td>
              <td class="block" align="left">

				 <div align="left">
                <input type="text" id="title" name="title" placeholder="Title" required>
              
                </div>
		
				</td></tr>
          <tr><td><div align="left"><b> Author : </b></div></td>
              <td class="block" align="left">
                <div align="left">
				<input type="text" name="author" id="author" placeholder="Author" required>
			</div>
				</td></tr>
				<tr><td>
        <div align="left"><b> Category : </b></div></td>
              <td class="block" align="left">
                <div align="left">
				<select name="category" id="category" placeholder="Genre" required>
          <option value="">Select genre</option>
    <option value="Thriller">Thriller</option>
  <option value="Romance">Romance</option>
  <option value="Mystery">Mystery</option>
  <option value="Fiction">Fiction</option>
  <option value="Novel">Novel</option>
  <option value="Drama">Drama</option>
</select>
      </div>
				</td></tr>
				<tr><td><div align="left"><b> Picture : </b></div></td>
              <td class="block" align="left">
                <div align="left">
				<input type="text" name="picture" id="picture" placeholder="Picture" required>
        <input type="file" id="newPic" style="display: none;" onchange="myFunction()">
        <input type="button" value="Browse" onclick="document.getElementById('newPic').click();" />
        <!--input type="file" id="newPic" style="display: none;" onchange="myFunction()"-->
        <script>
            function myFunction() {
            var x = document.getElementById("newPic").value;
            var str =x;
            var n = str.lastIndexOf('\\');
            var result = str.substring(n+1);
            document.getElementById("picture").value = result;
          }
        </script>
      </div>
				</td></tr>
				<tr><td><div align="left"><b> Description : </b></div></td>
              <td class="block" align="left"> 
                <div align="left">
  <textarea rows="4" cols="50" name="description" id="description" placeholder="Description" required></textarea>
</div>
        </td></tr>
        <tr><td><div align="left"><b> About Author link : </b></div></td>
          <td class="block" align="left">
            <div align="left" class="block">
        <input type="text" size="54" name="link" id="link" placeholder="Link" required>
      </div>
         </td></tr>
        <tr><td ><div align="left"><b> Availablity : </b></div></td>
          <td align="left">
            <div align="left">
        <input type="text" name="availability" id="availability" placeholder="Availability" required>
      </div>
        </td></tr>
        </table>
	<br>
  <br>
    
	<pre>                                         	                                                                                            <input type="submit" name="add" id="add" value="Add book"></pre>
	</form>


</div>
<div class="footer">
  <h5>Copyright @ Eugene McDermott Library</h5>
</div>
</body>
</html>
