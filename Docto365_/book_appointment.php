<?php
session_start();
if(isset($_SESSION['name']))
{
	if($_SESSION['name']==1)
	{
		echo "";
	}
	else
	{
		header("location:logout.php");
	}
}
else
	{
		header("location:logout.php");
	}
if(isset($_GET['logout']))
{
    header("location:logout.php");
}
if(isset($_GET['book_appointment']))
{
    require_once('dbconnect.php');
    $qry="insert into status_report(hospital,specialisation,doctor,date,slot,status) values('$_GET[hospital]','$_GET[specialisation]','$_GET[doctor]','$_GET[date]','$_GET[slot]','Pending')";
    mysqli_query($con,$qry);
    //echo $qry;
    if(mysqli_affected_rows($con)>0)
    {
        header("location:status_report.php");
    }
    else
    {
        echo "<script>alert('Error in booking Appointment ') </script>";
    }
    mysqli_close($con);
}
?>
<html>
<?php
include "header.php";
?>
                    <a href="#signup"><div class="read-more">Book Appointment</div></a>
                    
<?php
include "header1.php";
?>
              <li><a href="status_report.php" target="_blank">STATUS</a></li>
              <li><a href="http://m.uber.com" target="_blank">BOOK CAB</a></li>
              <li><a href="http://www.netmeds.com" target="_blank">BUY MEDICINE</a></li>
               <li><a href="logout.php">LOGOUT</a></li>
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
  xhttp.open("GET", "time_slot.php?q="+str, true);
  xhttp.send();
}
</script>


<section class="contact" id="signup" >
<h1>BOOK APPOINTMENT</h1>
        <hr/>  <br /> <br />
<div align="center"  >
          
<div  class="form">
            
            <form>
            <select name="hospital">
            <option>SELECT HOSPITAL</option>
            <?php
            require_once('dbconnect.php');
            $qry="select * from hospital";
            $res=mysqli_query($con,$qry);
            while($row=mysqli_fetch_array($res))
            {
                echo "<option>$row[1]</option>";
            }
            ?>
            </select> <br />            
       
            
            <select name="specialisation" onchange="showCustomer(this.value)">
            <option> SELECT SPECIALISATION</option>
            <?php
            require_once('dbconnect.php');
            $qry="select * from specialisation";
            $res=mysqli_query($con,$qry);
            while($row=mysqli_fetch_array($res))
            {
                echo "<option>$row[0]</option>";
            }
            mysqli_close($con);
            ?>
            </select> <br />
			<select name="doctor" id="txtHint">
            <option> SELECT DOCTOR</option>
            
			</select> <br />
<script>
/*function showCustomer1(str) {
  var xhttp;    
  if (str == "") {
    document.getElementById("txtHint1").innerHTML = "";
    return;
  }
  xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (xhttp.readyState == 4 && xhttp.status == 200) {
      document.getElementById("txtHint1").innerHTML = xhttp.responseText;
    }
  };
  xhttp.open("GET", "time_slot.php?q1="+str, true);
  xhttp.send();
}
*/
</script>
            
            <input type="date" name="date" required="required" /><br />
			<select name="slot" >
			<option>CHOOSE TIME SLOT</option>
            <option>9:00 - 10:00</option>
            <option>10:00 - 11:00</option>
            <option>11:00 - 12:00</option>
            <option>12:00 - 13:00</option>
            <option>13:00 - 14:00</option>
            <option>14:00 - 15:00</option>
			 
			</select><br />
			
            <input type="submit" name="book_appointment" value="BOOK APPOINTMENT" required="required">
            </form>
<br/><br />
</section>
<section class="contact" id="signup" >
<h1>SEARCH HOSPITAL USING MAP</h1>
<hr/>  <br /> <br />
<style>
      #map {
        height: 100%;
        width: 100%;
       }
    </style>
    <div id="map"></div>
<script>
    
      function initMap() {
        var uluru = {lat: 20.349424, lng: 85.814613};
        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 4,
          center: uluru
        });
        var marker = new google.maps.Marker({
          position: uluru,
          map: map
        });
      }
      
    </script>
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBpWoomE3h4mRN86tKsIWY8fr8c-QNHuKY&callback=initMap">
    </script>
</section>
<?php
include "footer.php";
?>