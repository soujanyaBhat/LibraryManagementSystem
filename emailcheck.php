<?php

$servername = "localhost";
$username = "root";
$password = "root";
$database = "wpl";
$con = mysqli_connect($servername, $username, $password, $database);

/* Get username */
$uname = $_POST['uname'];

/* Query */
$query = "select count(*) as cntUser from user_info where name='".$uname."'";

$result = mysqli_query($con,$query);

$row = mysqli_fetch_array($result);

$count = $row['cntUser'];

echo $count;