<?php
       $id=$_GET['q'];

		//$h=mysqli_connect("localhost","root","");
		//mysqli_select_db($h,"election");
		require_once('dbconnect.php');
		
		$qry="select constname from const where sid=$id;";
		$res=mysqli_query($h,$qry);
		echo"<select class='textbox' name='const'><option>Select Constituency</option> ";
		while($row=mysqli_fetch_array($res))
			echo "<option>$row[constname]</option>";
		echo"</select>";	
		mysqli_close($h);
?>