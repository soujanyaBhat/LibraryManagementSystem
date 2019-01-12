<?php
//if($_POST["logout"]== "Logout")
//{
session_start();
session_unset();
session_destroy();
header("location:home.html");
//exit();
//}
?>