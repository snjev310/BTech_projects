<?php
session_start();
if(isset($_SESSION['name'])){


$a=$_SESSION['name'];
//echo $a;
require_once("dbconnect.php");
$qry="select * from patient_reg";
        mysqli_query($con,$qry);
        $res=mysqli_query($con,$qry);
		//$row=mysqli_fetch_array($res);
        /*if($res->num_rows >0)
        {
            echo "<table border=10>";
            while($row =$res->fetch_assoc())
            {
                echo "<tr>";
                echo "<td>".$row['name']."</td>";
                echo "<td>".$row['email']."<td>";
                echo "<td>".$row['password']."<td>";
                echo "<td>".$row['sex']."<td>";
                echo "<td>".$row['age']."<td>";
                echo "<td>".$row['pincode']."<td>";
                echo "<td>".$row['address']."<td>";
                echo "</tr>";
            }
            echo "</table>";
          */
          echo "<table border=10>";
          while($row=mysqli_fetch_array($res))
          {
            echo "<tr>";
                echo "<td>".$row[0]."</td>";
                echo "<td>".$row[1]."<td>";
                echo "<td>".$row[2]."<td>";
                echo "<td>".$row[3]."<td>";
                echo "<td>".$row[4]."<td>";
                echo "<td>".$row[5]."<td>";
                echo "<td>".$row[6]."<td>";
                echo "</tr>";
          }
                echo "</table>";
        
        mysqli_close($con);
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
<body>
<form>
<input type="submit" name="logout" value="logout"/>
</form>
</body>
</html>