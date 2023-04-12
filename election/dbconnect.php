<?php
define('HOST','localhost');
define('USER','root');
define('PASS','');
define('DB','election');
$h=mysqli_connect(HOST,USER,PASS,DB) OR die('unable to connect');
?>