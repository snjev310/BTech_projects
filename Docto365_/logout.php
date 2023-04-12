<?php
session_start();
if(isset($_SESSION['name'])){
session_destroy();
header("location:login.php");
//$a=$_SESSION['name'];
//echo $a;
}
else
{
    session_destroy();
header("location:login.php");
}
?>