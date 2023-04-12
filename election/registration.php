<?php
	if(isset($_POST['submit']))
	{
		$msg="";
		require_once('dbconnect.php');
		//$h=mysqli_connect("localhost","root","");
		//mysqli_select_db($h,"election");
		$qry1="select * from state where stateid='$_POST[state]'";
		$res=mysqli_query($h,$qry1);
		//echo $qry1;
		$row=mysqli_fetch_array($res);
		
		$qry="insert into erecord(state,const,name,username,password,gender,dob,district,photo) values('$row[1]','$_POST[const]','$_POST[txt_name]','$_POST[txt_username]','$_POST[password]','$_POST[gender]','$_POST[dob]','$_POST[district]','$_POST[image]')";
		mysqli_query($h,$qry);
		 //echo $qry;
		if(mysqli_affected_rows($h)>0)
			$msg= "RECORD SUBMITTED SUCCESSFULLY";
		else
			$msg="ERROR IN RECORD SUBMISSION(ALL FIELDS ARE COMPULSORY)";
		//mysqli_close($h);
	}
?>
<html>
<head>
<link rel="stylesheet" href="style.css">
<script>
function showCustomer(str) {
  var xhttp;    
  if (str == "") {
    document.getElementById("txtHint").innerHTML = "";
    return;
  }
  xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (xhttp.readyState == 4 && xhttp.status == 200) {
      document.getElementById("txtHint").innerHTML = xhttp.responseText;
    }
  };
  xhttp.open("GET", "getstates.php?q="+str, true);
  xhttp.send();
}

function validate()
        {
            flag=0;
			if(document.getElementById("state1").value=="Select State")
            {
                document.getElementById("txtstate").innerHTML="State name can't be empty";
                flag=1;
            }
            else
            {
                
				document.getElementById("txtstate").innerHTML=""; 
					
            }
			if(document.getElementById("file1").value=="")
            {
                document.getElementById("txtfile").innerHTML="File can't be empty";
                flag=1;
            }
            else
            {
                 document.getElementById("txtfile").innerHTML="";   
            }
			if(document.getElementById("dob1").value=="")
            {
                document.getElementById("txtdob").innerHTML="DOB can't be empty";
                flag=1;
            }
            else
            {
						document.getElementById("txtdob").innerHTML=""; 
						x=document.getElementById("dob1").value;
						y=new Date(x);
						z=y.getFullYear();
			
			
						a=new Date();
						b=a.getFullYear();
						c=b-z;
						if(c<18 || c>110)
						{
							document.getElementById("txtdob").innerHTML="Age not valid";
							flag=1;
						}
						else
						{
							document.getElementById("txtdob").innerHTML="";   
						}
            }
			if(document.getElementById("nid").value=="")
            {
                document.getElementById("txtnid").innerHTML="Name can't be empty";
                flag=1;
            }
            else
            {
                 document.getElementById("txtnid").innerHTML="";   
            }
            if(document.getElementById("pid").value=="")
            {
                document.getElementById("txtpid").innerHTML="Password can't be empty";
                flag=1;
            }
            else
            {
                 document.getElementById("txtpid").innerHTML="";   
            }
			if(document.getElementById("id").value=="")
            {
                document.getElementById("txtid").innerHTML="Confirm Password can't be empty";
                flag=1;
            }
            else
            {
                 document.getElementById("txtid").innerHTML="";   
            }
            if(document.getElementById("uid").value=="")
            {
                document.getElementById("txtuid").innerHTML="Username can't be empty";
                flag=1;
            }
            else
            {
                 document.getElementById("txtuid").innerHTML="";   
            }
            if(document.getElementById("did").value=="")
            {
                document.getElementById("txtdid").innerHTML="District Field can't be empty";
                flag=1;
            }
            else
            {
                document.getElementById("txtdid").innerHTML="";   
            }
            x=document.getElementById("pid").value;
			
			y=document.getElementById("id").value;
			if(x!=y)
			
			{
				alert("Password and confirm password not match");
				flag=1;
			}
			
			
            if(flag==0)
            {
                return true;
            }
            else
            {
                return false;
            }
			
        }
function show(str)
{
	
	http=new XMLHttpRequest();
	http.open("get","validateuser.php?user="+str,true);
	http.send();
	http.onreadystatechange=function()
	{
		if(http.readyState==4 && http.status==200)
		{
			document.getElementById("checkuser").innerHTML=http.responseText;
		}
	}
}


</script>


	<title>home</title>
</head>
<body bgcolor="grey" alink="white" vlink="white" link="white" style="font-family:cursive;">
<?php
include "header.php"; 
?>
<form method="post" onsubmit="return validate()" >
<table width="82%" height="400" align="center" bgcolor="white">
<tr>
<td valign="top" colspan="6" align="center"><h1> New Voter Registration</h1><?php if(isset($_POST['submit'])) echo $msg; ?> </td>

</tr>
<tr>
<td valign="top">Select State:</td>
<td valign="top">

<select  name="state" onchange="showCustomer(this.value)" id="state1" class="textbox">
<option>Select State</option>
<?php
	
		//$h=mysqli_connect("localhost","root","");
		//mysqli_select_db($h,"election");
		require_once('dbconnect.php');
		$qry="select * from state;";
		$res=mysqli_query($h,$qry);
		//echo $qry;
				while($row=mysqli_fetch_array($res))
			echo "<option value=$row[0]>$row[1]</option>";
			
		mysqli_close($h);
?>
</select>


</td>
<td width="13%" valign="top" width="14%"><div id="txtstate" style="color:red"></div> </td>
<td width="13%" valign="top">Select Constituency</td>
<td width="13%" valign="top">

<div id="txtHint"><select class="textbox" id="txtconst"><option>Select Constituency</option></select></div>
</td>

<td width="13%"><div id="txtco"><font color="blue">(Optional)</font></td>
</tr>
<tr>
<td valign="top">Name</td>
<td valign="top"><input class="textbox" type="text" name="txt_name"  id="nid" maxlength="20" /></td>
<td><div id="txtnid" style="color:red;"></div></td>
<td valign="top">Username</td>
<td valign="top"><input class="textbox" type="text" name="txt_username"  placeholder="Name & Username Are Different" id="uid" onchange="show(this.value)" maxlength="10"/></td>
<td><div id="txtuid" style="color:red;"></div><div id="checkuser"></div></td>
</tr>
<tr>
<td valign="top">Password</td>
<td valign="top"><input class="textbox" type="password" name="password" id="pid" maxlength="8"/></td>
<td><div id="txtpid" style="color:red;"></div></td>
<td valign="top">Confirm Password</td>
<td valign="top"><input class="textbox" type="password" name="cpassword" maxlength="8" id="id"/></td>
<td><div id="txtid" style="color:red;"></div></td>
</tr>
<tr>
<td valign="top">Gender</td>
<td valign="top"><div style="text-align: center;"><label class="button"><span class="outer"><span class="inner"></span></span><input  type="radio" name="gender" value="male" checked="checked" />Male</label>
                  <label class="button"><span class="outer"><span class="inner"></span></span> <input type="radio" name="gender" value="female"  />Female</label></div>
</td>
<td>&nbsp;</td>
<td valign="top">D.O.B</td>
<td valign="top"><input class="textbox" type="date" name="dob" id="dob1" placeholder="DD/MM/YY"/></td>
<td><div id="txtdob" style="color:red"></td>
</tr>
<tr>
<td valign="top">District</td>
<td valign="top"><input class="textbox" type="text" name="district" id="did" maxlength="15"//></td>
<td><div id="txtdid" style="color:red"></div></td>
<td valign="top">Image Upload</td>
<td valign="top"><input class="button" id="file1"  type="file" value="image" name="image"/></td>
<td><div id="txtfile" style="color:red"></div></td>
</tr>
<tr>
<td colspan="2" align="right"></td>
<td><input type="submit"  value="submit" name="submit" class="button"/></td>
<td colspan="2" ><input class="button" type="reset" value="Reset" name="Reset"/></td>

</tr>
</table>


<?php
include "footer.php";
?>

</form>
</body>
</html>

