<?php
$msg="";
$cookie_name = "user";
$cookie_value ="abhi" ;
setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/");

  require_once('dbconnect.php');
	//mysqli_select_db($h,"election");
	$qry="select count(*) from counter;";
	
	
	$res=mysqli_query($h,$qry);
	 while($row=mysqli_fetch_array($res))
	 {
		  $msg=$row[0];
	 }
	 
	//mysqli_close($h);

if(!isset($_COOKIE[$cookie_name])) {
     echo "";
} else {
//require_once('dbconnect.php');    
	//$h=mysqli_connect("localhost","root","");
	//mysqli_select_db($h,"election");
	$qry="insert into counter values(1)";
	
	
	mysqli_query($h,$qry);
	 
	
	mysqli_close($h);
}
?>
<html>
<head>
	<title>home</title>
</head>
<body bgcolor="grey" alink="white" vlink="white" link="white" style="font-family:cursive;" >
<?php
include "header.php"; 
?>
<div>
<table  width="82%" align="center" height="70%" bgcolor="white" cellspacing="0" cellpadding="0" >
	<tr>
		<td valign="top">
			<img src="5.png">			
		</td>
		<td valign="top" align="center"><img src="6.png" width="100%">
		<marquee direction="up" scrollamount="4">
		<p><h4><img src="4.jpg">General Election to the Legislative Assembly of Kerala - Use of EVMs with Voter Verifiable Paper Audit Trail System</h4></p>
		<p><h4><img src="4.jpg">	Bye-Election to the 132-Ghoradongri (ST) Assembly Constituency of Madhya Pradesh, 2016 - Use of Electronic Voting Machines</h4></p>
		<p><h4><img src="4.jpg">Bye-Election to the 132-Ghoradongri (ST) Assembly Constituency of Madhya Pradesh, 2016 - Commission's order regarding identification of electors</h4></p>
		<p><h4><img src="4.jpg">General Election to the legislative assembly of Kerala, 2016- Commission's order regarding identification of electors</h4></p>
		</marquee>
		</td>
	</tr>
	
</table>
<table  width="82%" align="center" bgcolor="white" cellspacing="0" cellpadding="0">
	<tr>
		<td width="27%" valign="top"><marquee behavior="alternate" direction="right"><a href="sportal.php"><img src="4.png"></a></marquee></td>
		<td width="27%" valign="top"><marquee behavior="alternate" direction="right"><a href="citizen.php"><img src="3.png"></a></marquee></td>
		<td width="28%">
		<h4 align="center">TOTAL VISITOR</h4>
		<h4 align="center"><?php echo $msg; ?></h4>
		</table>
		</td>
	</tr>
</table>
<?php
include "footer.php";
?>

</body>
</html>