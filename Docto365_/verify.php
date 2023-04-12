<?php
session_start();
if(isset($_SESSION['name']))
{
	if($_SESSION['name']==2)
	{
		echo "";
	}
	else
	{
		header("location:logout.php");
	}
}
else
	{
		header("location:logout.php");
	}
if(isset($_GET['logout']))
{
    header("location:logout.php");
}
if(isset($_GET['id']))
{
	require_once("dbconnect.php");
			$qry="UPDATE status_report SET status='Verified' where id='$_GET[id]';";
			mysqli_query($con,$qry);
			if(mysqli_affected_rows($con)>0)
			{
				header("location:status_report.php?id=0#signup");
			}
			
			mysqli_close($con);
}
?>