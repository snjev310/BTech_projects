
<?php
	if(isset($_POST['submit']))
	{
		//$h=mysqli_connect("localhost","root","");
		//mysqli_select_db($h,"election");
		require_once('dbconnect.php');
		
		$state=$_POST['state'];
		$name=$_POST['name'];
		$dob=$_POST['dob'];
		$qry="select * from erecord where state='$state' and name='$name' and dob='$dob'";
		$res=mysqli_query($h,$qry);
		
		if(mysqli_affected_rows($h)>0)	
			
			{
				echo"<script>alert('Record Found you can Login using username and password');</script>";
				
			}
			else
			{
				
				echo"<script>alert('Record Not Found Register to vote');</script>";
			}
			
		
			
			
		mysqli_close($h);
	}
?>
<html>
<head>
<link rel="stylesheet" href="style.css" >

</head>
<body bgcolor="grey"  alink="white" vlink="white" link="white" style="font-family:cursive;" >
<?php
include "header.php"; 
?>
<form method="post">
<table  width="82%" height="300"  bgcolor="white" align="center">
<tr>
<td valign="top" colspan="4" align="center"><h1 >Enter Your details to search your name in portal</h1></td>

</tr>
<tr >
<td  width="25%">&nbsp</td>
<td valign="top"  width="25%" >State:</td>
<td valign="top" width="25%"><select class="textbox" required name="state">
<OPTION>Select State</OPTION>
<OPTION>Andhra Pradesh</OPTION>
<OPTION>Arunachal Pradesh</OPTION>
<OPTION>Assam</OPTION>
<OPTION>Bihar</OPTION>
<OPTION>Chhattisgarh</OPTION>
<OPTION>Goa</OPTION>
</select>

</td>
<td  width="25%">&nbsp</td>
</tr>
   <tr>
   <td width="25%">&nbsp</td>
   <td  width="25%">Name</td>
   <td><input class="textbox" type="text" name="name" width="25%" required="" maxlength="20"/></td>
   <td align="right" width="25%">&nbsp</td>
   </tr>
   <tr>
		<td  width="25%">&nbsp</td>
       <td  width="25%">D.O.B</td>
       <td><input class="textbox" type="date" name="dob" required=""/></td>
	<td width="25%">&nbsp</td>
   </tr>
   <tr>
       <td align="center" colspan=4><input class="button" type="submit" name="submit" value="search"/></td>
   </tr>
</table>

<?php
include "footer.php";
?>
</form>
</body>
</html>