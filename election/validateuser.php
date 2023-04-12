<?php
	$x=$_GET['user'];
	require_once('dbconnect.php');
	//$h=mysqli_connect("localhost","root","");
	//mysqli_select_db($h,"election");
	$qry="select * from erecord where username='$x'";
	
	
	mysqli_query($h,$qry);
	//echo $qry;
	if(mysqli_affected_rows($h)>0)
	{
		echo"username already exists";
	}
	mysqli_close($h);
?>

