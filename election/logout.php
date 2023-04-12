<?php
session_start();

session_destroy();

if($_GET['id']==1)

	header("location:election.php?update=1");
else
 header("location:election.php");
?>