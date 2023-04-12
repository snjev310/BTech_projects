
<?php

    if(isset($_GET['submit']))
    {
        require_once('dbconnect.php');
        if(strcmp(($_GET['type']),'PATIENT')==0)
        {
            
            $qry="select * from patient_reg where email='$_GET[username]' and password='$_GET[password]'";
            mysqli_query($con,$qry);
            $res=mysqli_query($con,$qry);
    		$row=mysqli_fetch_array($res);
            if(mysqli_affected_rows($con)>0)
            {
                
                    session_start();
                    $_SESSION['name']=1;
                    header("location:book_appointment.php");
                    //echo"$row[0]";
                 
            }
            
            echo "<script>
                var a;
                a=confirm('username or password incorrect click ok to reset password');
                if(a == true)
                {
                    window.open('reset_password.php');
                    
                }
                </script>";
            
        }
        else if(strcmp(($_GET['type']),'DOCTOR')==0)
        {
            $qry="select * from doctor_reg where email='$_GET[username]' and password='$_GET[password]'";
            mysqli_query($con,$qry);
            $res=mysqli_query($con,$qry);
    		$row=mysqli_fetch_array($res);
            if(mysqli_affected_rows($con)>0)
            {
                
                    session_start();
                    $_SESSION['name']=2;
                    header("location:status_report.php?id=0");
                    //echo"$row[0]";
                 
            }
            
            echo "<script>
                var a;
                a=confirm('username or password incorrect click ok to reset password');
                if(a == true)
                {
                    window.open('reset_password.php');
                    
                }
                </script>";
              
        }
        else if(strcmp(($_GET['type']),'ADMIN')==0) 
        {
            $qry="select * from admin_reg where email='$_GET[username]' and password='$_GET[password]'";
            mysqli_query($con,$qry);
            $res=mysqli_query($con,$qry);
    		$row=mysqli_fetch_array($res);
            if(mysqli_affected_rows($con)>0)
            {
                
                    session_start();
                    $_SESSION['name']=0;
                    header("location:admin.php");
                    //echo"$row[0]";
                 
            }
            
            else
            {
                echo "<script>
                var a;
                a=confirm('username or password incorrect click ok to reset password');
                if(a == true)
                {
                    window.open('reset_password.php');
                    
                }
                </script>";
                //header("location:reset_password.php");
                //echo "<script></script>";
            }
                
                
        }
        else
        {
            echo "<script>alert('select any option from login as')</script>";
        }
        mysqli_close($con); 
    }
?>

<html>
<?php
include "header.php";
?>

                    <a href="#login"><div class="read-more">Login</div></a>
<html>
<?php
include "header1.php";
?>                    
<li><a href="home.php">HOME</a></li>
<li><a href="#login">LOGIN</a></li>
<li><a href="registration.php">SIGN UP</a></li>
               
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
<section class="contact" id="login" >
        <h1>LOGIN</h1>
        <hr/>       
      
        <div align="center"  >
          
          <div  class="form">

<form>
<br /><br />
<select name="type">
            <option>LOGIN AS</option>
            <option>ADMIN</option>
            <option>DOCTOR</option>
            <option>PATIENT</option>
            
            </select> <br /><br />
<input type="text" name="username" placeholder="EMAIL ID" required="required"><br /><br />
<input type="password" name="password" placeholder="PASSWORD" required="required"><br /><br />
<input type="submit" name="submit" value="LOGIN"><br /><br />

</form>
 </div>
</div>      
</section>
<?php
include "footer.php";
?>


 