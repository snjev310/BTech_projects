
<html>
<head>
    <title>Docto 365</title>
    <link rel="icon" href="favicon.png">
    <link rel="stylesheet" type="text/css" href="css/reset.css">
    <link rel="stylesheet" type="text/css" href="css/style.css" />
    <link rel="stylesheet" type="text/css" href="css/style-responsive.css" />
</head>
<body>
<div classs="container">
    <section class="start-page parallax-background" id="home">
        <div class="opacity">
            <div class="content">
                <div class="text">
                    <font color="white" size=5><?php
                    if(isset($_GET['id']))
                    {
                    if($_GET['id']==0){
	           require_once('dbconnect.php');
		      $qry1="select max(id) from feedback";
              $res=mysqli_query($con,$qry1);
              $row=mysqli_fetch_array($res);
        	echo "RECORD SUBMITTED SUCCESSFULLY AND FEEDBACK ID IS $row[0]";
            mysqli_close($con);
}
else if($_GET['1'])
            echo"ERROR IN RECORD SUBMISSION(ALL FIELDS ARE COMPULSORY)";
}
else
    header("location:home.php");
?></font>
                    <h1>
                        <br /> <span></span>
                    </h1>
                    <p>Docto 365 Caring for life</p>
                    <a href="home.php"><div class="read-more">HOME</div></a>
                    
                </div>
                <div class="arrow-down"></div>
            </div>
        </div>
    </section>
<?php
include "footer.php";
?>