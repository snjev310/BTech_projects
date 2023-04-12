<?php
  
   session_start();
    if(!isset($_SESSION['password']))
    {
        header("location:election.php");
    }
	if($_GET['user']==NULL)
		header("location:election.php");
		
    if(isset($_POST['submit']))
    {
        $u=$_GET['user'];
		 
		$vote=$_POST['vote'];
         require_once('dbconnect.php');
		 //$h=mysqli_connect("localhost","root","");
        //mysqli_select_db($h,"election");
        $qry="insert into voting (vote,username) values ('$vote','$u')";
        
        mysqli_query($h,$qry);
       echo $qry;
       $msg="";
        if(mysqli_affected_rows($h)>0)
        {
            $msg="Submitted";
        }
        else
        {
            $msg="Not Submitted";
        }
        
        mysqli_close($h);
    }
?>
<html>

<head>
<link rel="stylesheet" href="style.css">
<title>Voting....</title>

</head>
<body bgcolor="grey" alink="white" vlink="white" link="white" style="font-family:cursive;" >
<?php
include "header.php"; 
?>
<center>
<form method="post" >
<table  width="82%" align="center" bgcolor="white" cellspacing="0" cellpadding="0">
<tr>
    <td colspan="4" align="center"><b><i>Candidate List</i></b></td>
</tr>
 <tr>
    <td>&nbsp;</td><td>&nbsp;</td>
</tr>

<tr>
    <td><u>Serial No.</u></td><td><u>Candidate Name</u></td><td><u>Party</u></td><td><u>Your Choise</u></td>
</tr> 
<tr>
    <td>&nbsp;</td><td>&nbsp;</td>
</tr>
<tr>
    <td>1.</td><td>Barak H. Obama</td><td>Republican</td>
    <td>
        <div style="text-align: center;"><label class="button"><span class="outer"><span class="inner"></span></span><input type="radio" name="vote" value="obama">Yes.</label>
                  
    </td>
</tr>
<tr>
    <td>&nbsp;</td><td>&nbsp;</td>
</tr>
<tr>
    <td>2.</td><td>D Trumph</td><td>Democratic</td>
    <td>
        <div style="text-align: center;"><label class="button"><span class="outer"><span class="inner"></span></span><input type="radio" name="vote" value="trump">Yes.</label>
                  
    </td>
</tr>
<tr>
    <td>&nbsp;</td><td>&nbsp;</td>
</tr>
<tr>
    <td>3.</td><td>M Zukerberg</td><td>Independent</td>
    <td>
        <div style="text-align: center;"><label class="button"><span class="outer"><span class="inner"></span></span><input type="radio" name="vote" value="mark"/>Yes.</label>
                  
    </td>
</tr>
<tr>
    <td>&nbsp;</td><td>&nbsp;</td>
</tr>
<tr>
    <td>4.</td><td>Narendra D. Modi</td><td>B.J.P</td>
    <td>
        <div style="text-align: center;"><label class="button"><span class="outer"><span class="inner"></span></span><input type="radio" name="vote" value="modi"/>Yes.</label>
                  
    </td>
</tr>
<tr>
    <td>&nbsp;</td><td>&nbsp;</td>
</tr>
<tr>
    <td>5.</td><td>Rahul Gandhi</td><td>Congress</td>
    <td>
        <div style="text-align: center;"><label class="button"><span class="outer"><span class="inner"></span></span><input type="radio" name="vote" value="raga"/>Yes.</label>
                  
    </td>
</tr>
<tr>
    <td>&nbsp;</td><td>&nbsp;</td>
</tr>
<tr>
    <td>6.</td><td>N.O.T.A</td><td>&nbsp;</td>
    <td>
        <div style="text-align: center;"><label class="button"><span class="outer"><span class="inner"></span></span><input type="radio" name="vote" value="nota" checked/>Yes.</label></div>
                  
    </td>
</tr>
<tr>
    <td colspan="4" align="center"><b><i><input class="button" type="submit" name="submit" value="vote"/></i></b></td>
   <?php
        
        if(isset($_POST['submit']))
        {
           // header("location:logout.php");
		   echo "<script>window.open('logout.php','_self')</script>";
           
        }
        
     ?> 
</tr>
</table>



<?php
 include "footer.php";
?>
</form>
</body>
</html>