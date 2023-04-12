<html>
<head>
<script type="text/javascript" language="javascript">
		arr=Array("12.png","13.png","14.png","15.png","16.png","17.png","18.png","21.png");
		x=0;
		function Image()
		{
			if(x<8)
			{
				document.images[0].src=arr[x];
				x++;
			}
			else
			{
				x=0;
			}
		}
		function start()
		{
			setInterval("Image()",1000);
			var today = new Date();
    var h = today.getHours();
    var m = today.getMinutes();
    var s = today.getSeconds();
    m = checkTime(m);
    s = checkTime(s);
    document.getElementById('txt').innerHTML =
    h + ":" + m + ":" + s;
    var t = setTimeout(startTime, 500);
		}
		function show(i) {
    if (i < 10) {i = "0" + i};  // add zero in front of numbers < 10
    return i;
}

</script>
	<title>home</title>
</head>
<body bgcolor="grey" alink="white" vlink="white" link="white" onload=start() style="font-family:cursive;" >
<?php
include "header.php"; 
?>
<table  width="82%" align="center" height="70%" bgcolor="white" cellspacing="0" cellpadding="0">
<tr height="15%"><td colspan="2" align="center"><h1>Photo Galary </h1> </td> </tr>
<tr height=60% >
	<td width="60%" align="center"><img src="12.png"></td>

	<td align="center"><img src="flag.gif"></td>
</tr>
</table>

<?php
include "footer.php";
?>
</body>
</html>