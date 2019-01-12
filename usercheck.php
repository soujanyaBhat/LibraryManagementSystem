<?php

$servername = "localhost";
$username = "root";
$password = "root";
$database = "wpl";
$con = mysqli_connect($servername, $username, $password, $database);

/* Get username */
$email = $_POST['email'];

/* Query */
$query = "select count(*) as cntUser from user_info where email='".$email."'";

$result = mysqli_query($con,$query);

$row = mysqli_fetch_array($result);

$count = $row['cntUser'];

echo $count;