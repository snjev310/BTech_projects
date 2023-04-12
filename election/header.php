<style>
a {
	text-decoration: none;
color: white;}
#txt
{
	font-size:40;
	font-family:cursive;
}
</style>
<script>
function startTime() {
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
function checkTime(i) {
    if (i < 10) {i = "0" + i};  // add zero in front of numbers < 10
    return i;
}
</script>
<body onload="startTime()">
	<table width="82%" align="center" background="2.jpg" >
		<tr>
			<td colspan="7" valign="top" align="left" background="1.jpg" height="115"><div align="right" id="txt" style="color:white;"></div></td>
		</tr>
		<tr background="2.jpg"><font color="white">
			<td width="11%" valign="top"><b><a href="home.php">Home</a></td>
			<td width="11%" valign="top"><a href="election.php">Election</a></td>
			<td width="11%" valign="top"><a href="result.php">Result</a></td>
			<td width="14%" valign="top"><a href="instruction.php">Election Law and Instructions</a></td>
			<td width="11%" valign="top"><a href="galary.php">Galary</a></td>
			<td width="11%" valign="top"><a href="faq.php">FAQ's</a></td>
			<td width="11%" valign="top"><a href="contact.php"><b>Contact us</b></a></td>
		</tr>
		<tr>
			<td rowspan="7"></td>
		</tr>
	</table>
	</body>
