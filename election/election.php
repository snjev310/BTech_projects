<?php
	session_start();
	require_once('dbconnect.php');
	if(isset($_GET['update']))
	{
		
		if(isset($_POST['login']))
		{
			$m="";
			$a=0;
			$username=$_POST['uname'];
			$password=$_POST['password'];
			$_SESSION['password']=$password;
			
			//$h=mysqli_connect("localhost","root","");
			//mysqli_select_db($h,"election");
			$qry="select * from erecord where username='$username' and password='$password'";
			$res=mysqli_query($h,$qry);
			//echo $qry;
			while($row=mysqli_fetch_array($res))
				$a=$row[0];
			if($a)
			{
				header("location:showrecord.php?id=$a");
			}
			else
			{
				$m="<font color='red'>wrong username or password</font>";
			}
			//mysqli_close($h);
		}
			
	}
	
?>
<?php
   // session_start();
    if(isset($_POST['submit']))
    {
        $f=0;
		$uname=$_POST['uname'];
        $password=$_POST['password'];
        $_SESSION['password']=$password;
         //$h=mysqli_connect("localhost","root","");
        //mysqli_select_db($h,"election");
		$qry1="select username from voting where username='$uname'";
		mysqli_query($h,$qry1);
		if(mysqli_affected_rows($h)>0)
			$f=1;
        $qry = "select * from erecord where username='$uname' and password='$password'";
        
        $res=mysqli_query($h,$qry);
        if(mysqli_affected_rows($h)>0)
        {
           while($row= mysqli_fetch_array($res))
           
            if($f==1)
				echo "<script>alert('User has already voted')</script>";
			else
				echo "<script>window.open('voting.php?user=$row[4]','_self')</script>";
        }
        else
        {
            echo "<script>alert('Wrong Username or Password')</script>";
        }
		
		
		
    }
	mysqli_close($h);
?>

<html>
<head>
	<title>home</title>
	<style> 
    .textbo {
    background: #F1F1F1 url(http://html-generator.weebly.com/files/theme/input-text-40.png) no-repeat;
    background-position: 5px -7px !important;
    padding: 10px 10px 10px 25px;
    width: 270px;
    border: 1px solid #CCC;
    -moz-border-radius: 5px;
    -webkit-border-radius: 5px;
    border-radius: 5px;
    -moz-box-shadow: 0 1px 1px #ccc inset, 0 1px 0 #fff;
    -webkit-box-shadow: 0 1px 1px #CCC inset, 0 1px 0 #FFF;
    box-shadow: 0 1px 1px #CCC inset, 0 1px 0 #FFF;
}

.textbo:focus {
    background-color: #FFF;
    border-color: #E8C291;
    outline: none;
    -moz-box-shadow: 0 0 0 1px #e8c291 inset;
    -webkit-box-shadow: 0 0 0 1px #E8C291 inset;
    box-shadow: 0 0 0 1px #E8C291 inset;
}
</style>	 
<link rel="stylesheet" href="style.css">

</head>
<body bgcolor="grey" alink="white" vlink="white" link="white" style="font-family:cursive;" >
<form method="post" >
<?php
include "header.php"; 
?>

<table width="82%" align="center" bgcolor="white" rowspan="0" colspan="0" height="300">

    <tr>
        <td colspan="2" align="center"><?php if(isset($_GET['update'])) echo "Login"; else echo"Login For Voting"; ?><br><?php if(isset($_POST['login']))  echo $m ?></td>
    </tr>
    <tr>
    <td>&nbsp;</td><td>&nbsp;</td>
    </tr>
    <tr>
        <td align="right">Username</td>
        <td align="center"><input class="textbo" type="text" name="uname" id="uid" placeholder="Enter Username"/></td>
    </tr>
    <tr>
    <td>&nbsp;</td><td>&nbsp;</td>
    </tr>
    <tr>
        <td align="right">Password</td>
        <td align="center"><input class="textbo" type="password" name="password" id="upwd" placeholder="Enter Password"/></td>
    </tr>
    <tr>
    <td>&nbsp;</td><td>&nbsp;</td>
    </tr>
    <tr>
        <td align="right">&nbsp;</td>
        <td align="center"> <input class="button" type="submit" name="<?php if(isset($_GET['update'])) echo 'login'; else echo 'submit';  ?>" value="<?php if(isset($_GET['update'])) echo 'Login'; else echo 'Go';  ?>"/></td>
		
    </tr>
</table>



<?php
include "footer.php";
?>
</form>
</body>
</html>