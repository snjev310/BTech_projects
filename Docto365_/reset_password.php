<?php
	if(isset($_GET['submit']))
	{
        
	    require_once('dbconnect.php');
        if(strcmp(($_GET['type']),'PATIENT')==0)
        {
        $qry="UPDATE patient_reg SET password='$_GET[password]' where email='$_GET[email]'";
        }
        if(strcmp(($_GET['type']),'DOCTOR')==0)
        {
        $qry="UPDATE doctor_reg SET password='$_GET[password]' where email='$_GET[email]'";
        }
        
        mysqli_query($con,$qry);
        //echo $qry;
		if(mysqli_affected_rows($con)>0){
		echo "<script>alert('reset successful '); 
        window.open('login.php');
        </script>";	
		
        }
        else
        echo "<script>alert('reset unsuccessful ') </script>";
        
		mysqli_close($con);
	}
?>
<html>
<?php
include "header.php";
?>
                    <a href="#signup"><div class="read-more">Reset Password</div></a>
                    
<?php
include "header1.php";
?>
 
               <li><a href="home.php">HOME</a></li>
               <li><a href="#signup">SIGN UP</a></li>
               <li><a href="login.php">LOGIN</a></li>
               
               
            </ul>
    </div>
</section>  
<style>
select
{
    width:420px;height:40px;background:#23282d;border:0;color:white;font-weight:bold;line-height:40px;
  padding-left:35px;-moz-border-radius:4px;-webkit-border-radius:4px;border-radius: 4px;font-family: 'Source Sans Pro', sans-serif;font-size:17px;
  margin-bottom:10px;
}
</style>



<section class="contact" id="signup" >
<h1>RESET PASSWORD</h1>
        <hr/>  <br /> <br />
<div align="center"  >
          
<div  class="form">
            
            <form>
            <select name="type">
            <option>RESET FOR</option>
            <option>DOCTOR</option>
            <option>PATIENT</option>
            </select> <br />
            <input type="text" name="email" placeholder="EMAIL ID" maxlength="30" required="required"><br/>
            <input type="number" name="mobileno" placeholder="MOBILENO" maxlength="10" required="required"><br/>
            <input type="password" name="password" placeholder="PASSWORD" maxlength="20" required="required"><br />
            <input type="password" name="password1 " placeholder="CONFIRM PASSWORD" maxlength="20" required="required"><br />
            
            <input type="submit" name="submit" value="RESET PASSWORD " required="required">
            </form>
<br/><br />
</section>
<?php
include "footer.php";
?>