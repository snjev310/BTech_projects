<?php
       session_start();
	if(isset($_SESSION['name']))
	{
		if($_SESSION['name']==1)
		{
			require_once('dbconnect.php');
			if(isset($_GET['q']))
			{ 
				$id=$_GET['q'];
				$qry="select * from doctor_reg where specialisation='$id'";
				$res=mysqli_query($con,$qry);
				echo"<select name='doctor'><option>SELECT DOCTOR</option> ";
				while($row=mysqli_fetch_array($res))
					echo "<option>$row[0]</option>";
				echo"</select>";
			}
			/*if(isset($_GET['q1']))
			{
				$id1=$_GET['q1'];
				$qry="select * from $id1";
				$res=mysqli_query($con,$qry);
				echo"<select name='time_slot'><option>SELECT TIME SLOT</option> ";
					while($row=mysqli_fetch_array($res))
					{
						echo "<option>$row[1]</option>";
					}
				echo"</select>";
			}*/
		mysqli_close($h);
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


