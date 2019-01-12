<!DOCTYPE html>
<head>
<link href="a1.css" type="text/css" rel="stylesheet"/>
<link href="css.css" type="text/css" rel="stylesheet"/>
<link href="index.css" type="text/css" rel="stylesheet"/>
<style>
table, tr, td {
    border: bold;
    width:50%;
}
table{
  padding-left: 20px;
}
</style>
</head>

<title> Results of search</title>
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
<div id="menu" >
<?php 
$servername = "localhost";
$username = "root";
$password = "root";
$database = "wpl";
$conn = mysqli_connect($servername, $username, $password, $database);
$q=$_SESSION['isbn'];
$_SESSION['isbn']=$q;
$sql1= "SELECT b.*,al.link from book b,authorlink al where isbn ='$q' and b.author=al.author";
$result=mysqli_query($conn,$sql1);
if (mysqli_num_rows($result) > 0)
{

  while($row1 = mysqli_fetch_array($result))
  {
  $picture = $row1['picture'];
  $title=$row1['title'];
  $author=$row1['author'];
  $_SESSION['oldauthor']=$row1['author'];
  //$oldauthor=$row1['author'];
 $cat=$row1['category'];
 $isbn=$row1['isbn'];
  $desc=$row1['description'];
  $link = $row1['link'];
  $availability=$row1['availability'];
}
}
mysqli_close($conn);
?>
<script>

    document.getElementById("category").value = <?php echo $cat;?>;

</script>
				<form action="updateRecordFinal.php"  method="GET" >
          <table>
            <tr><td><div align="left"><b> ISBN : </b></div></td>
              <td class="block" align="left">
				<div align="left">
            <input type="text"  id="isbn" name="isbn" value="<?php echo $isbn;?>" disabled>
            
        </div>
      </td></tr>
       <tr><td><div align="left"><b> Title : </b></div></td>
              <td class="block" align="left">

				 <div align="left">
                <input type="text" id="title" name="title" value="<?php echo $title;?>" placeholder="Title" required>
              
                </div>
		
				</td></tr>
          <tr><td><div align="left"><b> Auhthor : </b></div></td>
              <td class="block" align="left">
                <div align="left">
				<input type="text" name="author" id="author" value="<?php echo $author;?>" placeholder="Author" required>
			</div>
				</td></tr>
				<tr><td><div align="left"><b> Genre : </b></div></td>
              <td class="block" align="left">
                <div align="left">
                    <select name="category" id="category" required>
    <option value="Thriller">Thriller</option>
  <option value="Romance">Romance</option>
  <option value="Mystery">Mystery</option>
  <option value="Fiction">Fiction</option>
  <option value="Novel">Novel</option>
  <option value="Drama">Drama</option>
</select>
<script>

    document.getElementById("category").value ="<?php echo $cat;?>";

</script>
				<!--input type="text" name="category" id="category" value="<?php echo $cat;?>" placeholder="Genre" required-->
      </div>
				</td></tr>
				<tr><td><div align="left"><b> Picture : </b></div></td>
              <td class="block" align="left">
                <div align="left">
				<input type="text" name="picture" id="picture" placeholder="Picture" value="<?php echo $picture;?>" required>
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
  <textarea rows="4" cols="50" name="description" id="description" placeholder="Description" required><?php echo $desc;?></textarea>
</div>
        </td></tr>
        <tr><td><div align="left"><b> About Author link : </b></div></td>
          <td class="block" align="left">
            <div align="left" class="block">
        <input type="text" size="54" name="link" id="link" value="<?php echo $link;?>" placeholder="link" required>
      </div>
         </td></tr>
        <tr><td ><div align="left"><b> Availablity : </b></div></td>
          <td align="left">
            <div align="left">
        <input type="text" name="availability" id="availability" value="<?php echo $availability;?>" placeholder="availability" required>
      </div>
        </td></tr>
        </table>
	<br>
  <br>
    
	<pre>                                         	                                                                                                             <input type="submit" name="add" id="add" value="Update book details"></pre>
	</form>

</div>
<div class="footer">
	<h5>Copyright @ Eugene McDermot Library</h5>
</div>
</body>
</html>
