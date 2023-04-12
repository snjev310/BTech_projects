<?php
session_start();
if(isset($_SESSION['name']))
{
	if($_SESSION['name']==2 || $_SESSION['name']==1)
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

?>
<html>
<?php
include "header.php";
?>
                    <a href="#signup"><div class="read-more">Booking Status</div></a>
                    
<?php
include "header1.php";
?>

              <li><a href="http://m.uber.com" target="_blank">BOOK CAB</a></li>
              <li><a href="http://www.netmeds.com" target="_blank">BUY MEDICINE</a></li>
               <li><a href="logout.php">LOGOUT</a></li>
            </ul>
    </div>
</section>  
<style>
table.gridtable {
	font-family: arial,sans-serif;
	font-size:15px;
	color:#FFFFFF;
	border-width: 15px;
	border-color: #666666;
	
    background-color: #2F363E;
}
table.gridtable th {
	border-width: 1px;
	padding: 8px;
	border-style: solid;
	border-color: #666666;
	background-color: #2F363E;
}
table.gridtable td {
	border-width: 1px;
	padding: 8px;
	border-style: hidden;
	border-color: #FFFFFF;
	background-color: #2F363E;
}

</style>





<section class="contact" id="signup" >
<h1>BOOKING STATUS</h1>
        <hr/>  <br /> <br />
<div align="center">

          

<?php
            require_once("dbconnect.php");
			$qry="select * from status_report";
			mysqli_query($con,$qry);
			$res=mysqli_query($con,$qry);
			
			  echo "<table border=10 class='gridtable'>";
              echo "<td>".'BOOKING ID'."<td>";
              echo "<td>".'HOSPITAL NAME'."<td>";
              echo "<td>".'SPECIALISATION'."<td>";
              echo "<td>".'DOCTOR NAME'."<td>";
              echo "<td>".'DATE'."<td>";
              echo "<td>".'TIME SLOT'."<td>";
              echo "<td>".'STATUS'."<td>";
              if(isset($_GET['id']))
              {
                if($_GET['id']==0)
                {
                echo "<td>".'VERIFY'."<td>";
			    }
              }
              while($row=mysqli_fetch_array($res))
			  {
				echo "<tr>"."<br/>"."<br/>";
					echo "<td>".$row[0]."<td>";
					echo "<td>".$row[1]."<td>";
					echo "<td>".$row[2]."<td>";
					echo "<td>".$row[3]."<td>";
					echo "<td>".$row[4]."<td>";
					echo "<td>".$row[5]."<td>";
					echo "<td>".$row[6]."<td>";
                    if(isset($_GET['id']))
                    {
                        if($_GET['id']==0)
                        {
                        echo "<td>"."<a href='verify.php?id=$row[0]'>VERIFY</a>"."<td>";
    					}
                    }    
                    echo "</tr>";
			  }
					echo "</table>";
			
			mysqli_close($con);
            ?>
 </div>           
<br/><br />
</section>
<?php
include "footer.php";
?>