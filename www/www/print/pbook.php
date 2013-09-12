<?php session_start();  ?> 
<head>
<style type="text/css">
@page
{
	size: landscape;
	margin: 2cm;
}
</style>
<style type="text/css" media="print">
@page
{
	size: landscape;
	margin: 2cm;
}
</style>
</head>
<?php

$host = "localhost";
$user = "teacherplan";
$pass = "10773208";
$database = "teacherplan_tpbsadat";

mysql_connect($host, $user, $pass);

$con = mysql_connect($host, $user, $pass);

mysql_select_db($database, $con);

?>
<?php 

include("inc/functions.php");

?>
<?php

$username = $_SESSION['username'];
$weekid   = $_GET['week']; 

?>
<?php

// use those 2 for functions
$username = $_COOKIE['username'];
$weekid   = $_GET['week']; 
$month    = $_COOKIE['month'];


// structure the dates
$week   = $_GET['week'];
$yryr   = $_COOKIE['year'];

 If ($yryr == 2010)
 {
 include("inc/2010-2011.php");
 }
ElseIf ($yryr == 2011)
 {
 include("inc/2011-2012.php");
 } 
ElseIf ($yryr == 2012)
 {
 include("inc/2012-2013.php");
 } 

?>
<center>
<div id="svqq" style="display:block;">
<?php 

$valval = $_GET['val'];

If ($valval == 1) 
{
echo "Choose week and click view:";
echo "<form action=print.php action=get>";
echo "<input type=hidden name=op value=1>";
echo "<input type=hidden name=val value=1>";
echo "<select name=week id=week>";

          // structure the weeks
include("inc/structurewk.php");

echo "</select>";
echo "<INPUT type=submit value=View>";
echo "</form>";
}
?>
</div>
<center><A href="javascript:print();">Click to Print This Page</A>
<a href="JavaScript:;" onmousedown=
"if 
(document.getElementById('svqq').style.display == 'none') 
{document.getElementById('svqq').style.display = 'block';} 
else {document.getElementById('svqq').style.display = 'none';}">
[Show/Hide Header]  </a>
</center>
<br />
<?php
$myint = $_COOKIE['myint'];
If ($myint == 1) 
  {
  $int = 0;
  } 
If ($myint == 2)
  {
  $int = 1;
  }
If ($myint == 3)
  {
  $int = 2;
  }
If ($myint == 4)
  {
  $int = 3;
  }
If ($myint == 5)
  {
  $int = 4;
  }
If ($myint == 6)
  {
  $int = 5;
  }
If ($myint == 7)
  {
  $int = 6;
  }
cweeknum($int);

?>
<table border="2">
<tr ><td bgcolor="#0b3460" width=240> <font color="white" size="6"><b> <center>Period & Class</center> </b> </font> </td><td bgcolor="#0b3460" width=760> <font color="white" size="6"><b> <center>Objective/Notes <?php if(isset($_GET['week'])) { echo ": "; echo "$mdate"; echo " - "; echo "$fridate"; } ?> </center> </b> </font> </td>
<tr height=65><td width="240"> <center><font size="3">Period 1 <br> <?php grabmain($username, "1");  ?> </font></center> <!-- period code -->  </td> <td width=760 valign="top"><font size="3"> <center> <?php grabobj($weekid, 1, $username); ?>  </center> </font> </td></tr>
<tr height=65><td width="240"> <center><font size="3">Period 2 <br> <?php grabmain($username, "2"); ?> </font></center> <!-- period code -->  </td> <td width=760 valign="top"><font size="3"> <center> <?php grabobj($weekid, 2, $username); ?> </center> </font> </td></tr>
<tr height=65><td width="240"> <center><font size="3">Period 3 <br> <?php grabmain($username, "3"); ?> </font></center> <!-- period code -->  </td> <td width=760 valign="top"><font size="3"> <center> <?php grabobj($weekid, 3, $username); ?> </center> </font> </td></tr>
<tr height=65><td width="240"> <center><font size="3">Period 4 <br> <?php grabmain($username, "4"); ?> </font></center> <!-- period code -->  </td> <td width=760 valign="top"><font size="3"> <center> <?php grabobj($weekid, 4, $username); ?> </center> </font> </td></tr>
<tr height=65><td width="240"> <center><font size="3">Period 5 <br> <?php grabmain($username, "5"); ?> </font></center> <!-- period code -->  </td> <td width=760 valign="top"><font size="3"> <center> <?php grabobj($weekid, 5, $username); ?> </center> </font> </td></tr>
<tr height=65><td width="240"> <center><font size="3">Period 6 <br> <?php grabmain($username, "6"); ?> </font></center> <!-- period code -->  </td> <td width=760 valign="top"><font size="3"> <center> <?php grabobj($weekid, 6, $username); ?> </center> </font> </td></tr>
<tr height=65><td width="240"> <center><font size="3">Period 7 <br> <?php grabmain($username, "7"); ?> </font></center> <!-- period code -->  </td> <td width=760 valign="top"><font size="3"> <center> <?php grabobj($weekid, 7, $username); ?> </center> </font> </td></tr>
<tr height=65><td width="240"> <center><font size="3">Period 8 <br> <?php grabmain($username, "8"); ?> </font></center> <!-- period code -->  </td> <td width=760 valign="top"><font size="3"> <center> <?php grabobj($weekid, 8, $username); ?> </center> </font> </td></tr>
<tr height=65><td width="240"> <center><font size="3">Period 9 <br> <?php grabmain($username, "9"); ?> </font></center> <!-- period code -->  </td> <td width=760 valign="top"><font size="3"> <center> <?php grabobj($weekid, 9, $username); ?> </center> </font> </td></tr>
<?php
if($_COOKIE['use15'] == 1) { ?>
<tr height=65><td width="240"> <center><font size="3">Period 10 <br> <?php grabmain($username, "10"); ?> </font></center> <!-- period code -->  </td> <td width=760 valign="top"><font size="3"> <center> <?php grabobj($weekid, 10, $username); ?> </center> </font> </td></tr>
<tr height=65><td width="240"> <center><font size="3">Period 11 <br> <?php grabmain($username, "11"); ?> </font></center> <!-- period code -->  </td> <td width=760 valign="top"><font size="3"> <center> <?php grabobj($weekid, 11, $username); ?> </center> </font> </td></tr>
<tr height=65><td width="240"> <center><font size="3">Period 12 <br> <?php grabmain($username, "12"); ?> </font></center> <!-- period code -->  </td> <td width=760 valign="top"><font size="3"> <center> <?php grabobj($weekid, 12, $username); ?> </center> </font> </td></tr>
<tr height=65><td width="240"> <center><font size="3">Period 13 <br> <?php grabmain($username, "13"); ?> </font></center> <!-- period code -->  </td> <td width=760 valign="top"><font size="3"> <center> <?php grabobj($weekid, 13, $username); ?> </center> </font> </td></tr>
<tr height=65><td width="240"> <center><font size="3">Period 14 <br> <?php grabmain($username, "14"); ?> </font></center> <!-- period code -->  </td> <td width=760 valign="top"><font size="3"> <center> <?php grabobj($weekid, 14, $username); ?> </center> </font> </td></tr>
<tr height=65><td width="240"> <center><font size="3">Period 15 <br> <?php grabmain($username, "15"); ?> </font></center> <!-- period code -->  </td> <td width=760 valign="top"><font size="3"> <center> <?php grabobj($weekid, 15, $username); ?> </center> </font> </td></tr>
<?php } ?>
</table>