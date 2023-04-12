<?php
	
	session_start();
	if(!isset($_SESSION['password']))
    {
        header("location:election.php?update=1");
    }
	if(isset($_GET['id']))
	{
		$id=$_GET['id'];
		require_once('dbconnect.php');
		//$h=mysqli_connect("localhost","root","");
		//mysqli_select_db($h,"election");
		$qry="select * from erecord where id='$id'";
		$res=mysqli_query($h,$qry);
		echo"<body style='font-family:cursive;'><table border='1' width='100%' cellpadding='0' cellspacing='0' bordercolor='#094474' height='400'>";
		echo "<tr height='100'> <th width='14%'>STATE</th> <th width='14%'>CONSTITUENCY</th> <th width='14%'>NAME</th> <th width='14%'>GENDER</th> <th width='14%'>DATE OF BIRTH</th> <th width='14%'>DISTRICT</th> <th width='14%'>IMAGE</th></tr>";
		while($row=mysqli_fetch_array($res))
		{
			$a=$row[0];
			echo "<tr><td width='14%'>$row[1]</td><td width='14%'>$row[2]</td><td width='14%'>$row[3]</td><td width='14%'>$row[6]</td><td width='14%'>$row[7]</td><td width='14%'>$row[8]</td><td width='16%'><img src='$row[9]' width='100%'></td></td>";
			
		}
		echo"</table>";
		echo "<CENTER><H2><a href='logout.php?id=1'>Logout</a></body>";
		mysqli_close($h);
	}	
	else
	{
		header("location:election.php?update=1");
	}
?>

 
