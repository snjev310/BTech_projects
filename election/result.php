<?php
		require_once('dbconnect.php');
      //$h=mysqli_connect("localhost","root","");
        //mysqli_select_db($h,"election");
        $qry1=" select count(*) from voting where vote='obama'";
       $res1 = mysqli_query($h,$qry1);
        while($row=mysqli_fetch_array($res1))
        {
            $a=$row[0];
        }
       // echo "Barak H. Obama <-->Republican <--> $a<br>";
        $qry2=" select count(*) from voting where vote='trump'";
        $res2 = mysqli_query($h,$qry2);
        while($row=mysqli_fetch_array($res2))
        {
            $b=$row[0];
        }
       // echo "D Trumph. <--> Democratic <--> $b<br>";
         $qry3=" select count(*) from voting where vote='mark'";
          $res3 = mysqli_query($h,$qry3);
        while($row=mysqli_fetch_array($res3))
        {
            $c=$row[0];
        }
       // echo "M. Zukerberg <--> Independent <--> $c<br>";
        $qry4=" select count(*) from voting where vote='modi'";
         $res4 = mysqli_query($h,$qry4);
         while($row=mysqli_fetch_array($res4))
        {
            $d=$row[0];
        }
      //  echo "Narendra Modi <-->B.J.P <--> $d<br>";
        $qry5=" select count(*) from voting where vote='raga'";
         $res5 = mysqli_query($h,$qry5);
         while($row=mysqli_fetch_array($res5))
        {
            $e=$row[0];
        }
      //  echo "Rahul Gandhi <--> Congress <--> $e<br>";
        $qry6=" select count(*) from voting where vote='nota'";
         $res6 = mysqli_query($h,$qry6);
         while($row=mysqli_fetch_array($res6))
        {
            $f=$row[0];
        }
        $msg="";
      //  echo "None of the above<------> $f<br>";
	  $f=0;
      if($a> $b && $a>$c && $a>$d && $a>$e)
      {
         $msg="Barak H. Obama is winner with $a votes";
		 $f++;
      }
      if($b> $a && $b>$c && $b>$d && $b>$e)
      {
         $msg="D. Trumph is winner with $b votes";
		 $f++;
	  }
      if($c> $b && $c>$a && $c>$d && $c>$e)
      {
         $msg="M Zukerberg is winner with $c votes";
		$f++;
	  }
      if($d> $b && $d>$c && $d>$a && $d>$e)
      {
         $msg="Narendra Modi is winner with $d votes";
		$f++;
	  }
      if($e> $b && $e>$c && $e>$d && $e>$a)
      {
         $msg="Rahul Gandhi is winner with $e votes";
		$f++;
	  }
	  if($f==0)
	  {
		  $msg="No winner there is a tie";
	  }
		  
		  
      //echo $msg;
?>

<html>
<head>
	<title>home</title>
</head>
<body bgcolor="grey"  alink="white" vlink="white" link="white" style="font-family:cursive;" >
<?php
include "header.php"; 
?>
<form>
<table  width="82%" align="center" bgcolor="white" cellspacing="0" cellpadding="0">
<tr>
    <td colspan="4" align="center"><b><i>Candidate List</i></b></td>
</tr>
 <tr>
    <td>&nbsp;</td><td>&nbsp;</td>
</tr>

<tr>
    <td><u>Serial No.</u></td><td><u>Candidate Name</u></td><td><u>Party</u></td><td><u>Total vote</u></td>
</tr> 
<tr>
    <td>&nbsp;</td><td>&nbsp;</td>
</tr>
<tr>
    <td>1.</td><td>Barak H. Obama</td><td>Republican</td><td><?php echo $a; ?></td>
</tr>
<tr>
    <td>&nbsp;</td><td>&nbsp;</td>
</tr>
<tr>
    <td>2.</td><td>D Trumpha</td><td>Democratic</td><td><?php echo $b; ?></td>
</tr>
<tr>
    <td>&nbsp;</td><td>&nbsp;</td>
</tr>
<tr>
    <td>3.</td><td>M Zukerberg</td><td>Independent</td><td><?php echo $c; ?></td>
</tr>
<tr>
    <td>&nbsp;</td><td>&nbsp;</td>
</tr>
<tr>
    <td>4.</td><td>Narendra D. Modi</td><td>B.J.P</td><td><?php echo $d; ?></td>
</tr>
<tr>
    <td>&nbsp;</td><td>&nbsp;</td>
</tr>
<tr>
    <td>5.</td><td>Rahul Gandhi</td><td>Congress</td><td><?php echo $e; ?></td>
</tr>
<tr>
    <td>&nbsp;</td><td>&nbsp;</td>
</tr>
<tr>
    <td>6.</td><td>N.O.T.A</td><td>&nbsp;</td><td><?php echo $f; ?></td>
</tr>
<tr>
    <td>&nbsp;</td><td>&nbsp;</td>
</tr>
</tr>
</table>
<table  width="82%" align="center" bgcolor="white" cellspacing="0" cellpadding="0">
  <tr>
    <td colspan="6" align="center"><b><i>&nbsp;</i></b></td>
  </tr>  
  <tr>
    <td colspan="5" align="center"><?php echo $msg; ?></td>
  </tr>
</table>



<?php
include "footer.php";
?>
</form>
</body>
</html>