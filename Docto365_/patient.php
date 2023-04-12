<?php
	if(isset($_GET['submit']))
	{
    
	    require_once('dbconnect.php');
		$qry="insert into patient_reg values ('$_GET[name]','$_GET[email]','$_GET[password]','$_GET[age]','$_GET[pin]','$_GET[address]','$_GET[mobileno]','$_GET[sex]')";
	    mysqli_query($con,$qry);
	   echo $qry;
		if(mysqli_affected_rows($con)>0)
		
			header("location:login.php");
        else
            echo "<script>alert('Signup Unsuccessful ') </script>";
		
		mysqli_close($con);
	}
?>
<html>
<?php
include "header.php";
?>
                    <a href="#signup"><div class="read-more">Signup</div></a>
                    
<?php
include "header1.php";
?>

</script>
<script>
function validate()
{
    flag=0;
    if(document.getElementById('tx_tname')="")
    {
        document.getElementById('txt_name').innerHTML="name can't be empty";
        flag=1;
    }
    else
    {
        document.getElementById('txt_name').innerHTML="";
    }
    if(flag=0)
        return true;
    else
        return false;

</script> 
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
<h1>SIGNUP</h1>
        <hr/>  <br /> <br />
<div align="center"  >
          
<div  class="form">

            <form>
            <input type="text" name="name" id="txt_name" placeholder="NAME" maxlength="30" required="required"><br/>
            <input type="text" name="email" placeholder="EMAIL ID" maxlength="30" required="required"><br/>
            <input type="number" name="mobileno" placeholder="MOBILENO" maxlength="10" required="required"><br/>
            <input type="password" name="password" placeholder="PASSWORD" maxlength="20" required="required"><br />
            <input type="password" name="password" placeholder="CONFIRM PASSWORD" maxlength="20" required="required"><br />
            <select name="sex">
            <option>SEX</option>
            <option>MALE</option>
            <option>FEMALE</option>
            </select> <br />
            <input type="number" name="age" placeholder="AGE" maxlength="3" required="required"><br />
            <input type="number" name="pin" placeholder="PIN CODE" maxlength="6" required="required"><br/>
            <input type="text" name="address" placeholder="ADDRESS" maxlength="50" required="required"><br />
            <input type="submit" name="submit" value="REGISTER">
            </form>
<br/><br />
</section>
<?php
include "footer.php";
?>