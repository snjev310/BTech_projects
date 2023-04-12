<?php
session_start();
if(isset($_SESSION['name']))
{
	if($_SESSION['name']==0)
	{
		$a=$_SESSION['name'];

			require_once("dbconnect.php");
			$qry="select * from patient_reg";
			mysqli_query($con,$qry);
			$res=mysqli_query($con,$qry);
			
			  echo "<table border=10>";
			  while($row=mysqli_fetch_array($res))
			  {
				echo "<tr>";
					echo "<td>".$row[0]."</td>";
					echo "<td>".$row[1]."<td>";
					echo "<td>".$row[2]."<td>";
					echo "<td>".$row[3]."<td>";
					echo "<td>".$row[4]."<td>";
					echo "<td>".$row[5]."<td>";
					echo "<td>".$row[6]."<td>";
					echo "</tr>";
			  }
					echo "</table>";
			
			mysqli_close($con);
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


?>
<html>
<body>
<form>
<input type="submit" name="logout" value="logout"/>
</form>
</body>
</html>