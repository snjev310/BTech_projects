<?php
	if(isset($_GET['login']))
	{
		$msg="";
		if($_GET['uname']=='ak7662' && $_GET['password']=='123@kiit')
		{
			header("location:ahowrecord1.php?ak=1");
		}
		else
		{
			$msg="Wrong Username or Password";
		}
		
	}
	
?>

<html>
<head>
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
<?php
	include "header.php";
?>
<form>
<table width="82%" align="center" bgcolor="white" rowspan="0" colspan="0" height="300">

    <tr>
        <td colspan="2" align="center"><?php if(isset($_GET['login'])) echo"$msg"; ?></td>
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
        <td align="center"> <input class="button" type="submit" name="login" value="Login"/></td>
		
    </tr></form>
</table>

<?php
	include "footer.php";
?>
</body>
</html>