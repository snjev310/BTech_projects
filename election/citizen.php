<?php
	if(isset($_POST['submit']))
	{
		$msg="";
		mysqli_close($h);
		//$h=mysqli_connect("localhost","root","");
		//mysqli_select_db($h,"election");
		$qry="insert into vcomplain(name,address,mobileno,complain) values('$_POST[name]','$_POST[add]',$_POST[mobile],'$_POST[complain]')";
		mysqli_query($h,$qry);
		
		if(mysqli_affected_rows($h)>0)
			$msg= "COMPLAIN SUBMITTED SUCCESSFULLY";
		else
			$msg="ERROR IN COMPLAIN SUBMISSION";
		mysqli_close($h);
	}
?>
<html>
<head>
<link rel="stylesheet" href="style.css">
</head>
<body bgcolor="grey"  alink="white" vlink="white" link="white" style="font-family:cursive;" >
<?php
include "header.php"; 
?>
<form method="post">
<table width="82%" height="400" cellspacing="0" cellpadding="0" align="center" bgcolor="white">
<tr><td colspan="2" align="center"><h4>Register Complain</h4><?php if(isset($_POST['submit'])) echo $msg ?></td></tr>
<tr><td align="center"width="50%">Name</td><td><input class="textbox" type="text" name="name" required maxlength="20" ></td></tr>
<tr><td align="center"width="50%">Address:</td><td><input class="textbox" type="text" name="add" maxlength="60"required></td></tr>
<tr><td align="center"width="50%">Mobile no:</td><td><input class="textbox" type="text" name="mobile" maxlength="10" required></td></tr>
<tr><td align="center"width="50%" valign="top">Complain:</td><td><textarea class="textbox" name="complain" rows="8" cols="30" maxlength="150" required></textarea></td></tr>
<tr><td align="center" colspan="2"><input class="button" type="submit" value="SUBMIT" name="submit"/></td></tr>
</table>


<?php
include "footer.php";
?>
</form>
</body>
</html>