<?php
if(isset($_GET['submit']))
{
    if(strcmp(($_GET['type']),'PATIENT')==0)
    {
        header('location:patient.php');
    }
    if(strcmp(($_GET['type']),'DOCTOR')==0)
    {
        header('location:doctor.php');
    }
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
}
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
            <select name="type">
            <option>SIGN UP AS</option>
            <option>DOCTOR</option>
            <option>PATIENT</option>
            </select> <br />
            <input type="submit" name="submit" value="NEXT">
            </form>
<br/><br />
</section>          

</section>
<?php
include "footer.php";
?>