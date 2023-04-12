<?php
		if(isset($_GET['ak']))
		{
			require_once('dbconnect.php');
			//$h=mysqli_connect("localhost","root","");
			//mysqli_select_db($h,"election");
			$qry="select * from erecord";
			$res=mysqli_query($h,$qry);
			echo"<table border=1>";
			while($row=mysqli_fetch_array($res))
			{
				echo "<tr><td>$row[0]</td><td>$row[1]</td><td>$row[2]</td><td>$row[3]</td><td>$row[4]</td><td>$row[5]</td><td>$row[6]</td><td>$row[7]</td><td>$row[8]</td><td><a href=$row[9]>$row[9]</a></td></tr>";
			}
			echo"</table>";
		}	
?>