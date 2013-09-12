<?php

include("inc/init.php");

?>
<?php 

include("inc/functions.php");

?>
<?php

// use those 2 for functions
$username = $_SESSION['username'];
$weekid   = $_GET['week']; 
$month    = $_SESSION['month'];


// structure the dates
$week   = $_GET['week'];


$yryr   = $_SESSION['year'];

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
Choose week and click view:
<form action="members.php" action="get">
<input type="hidden" name="op" value="dayplotter">
<select name="week" id="week">
<?php
          // structure the weeks
include("inc/structurewk.php");
?>
</select>
<INPUT type="submit" value="View">
</form>
<br>
<?php 
        if(isset($_GET['week']))
         { 
          echo "<a href=print.php?op=2"; 
          echo "&week="; 
          echo "$week"; 
          echo "> Click here to generate a printable page!</a><br>";
         }
?>
<br>
<?php

cweeknum($int);

?>
<table border="2">
<tr ><td bgcolor="#0b3460" width=200> <font color="white" size="5"><b> <center>Period & Class<br></center> </b> </font> </td>
<td bgcolor="#0b3460" width=200> <font color="white" size="5"><b> <center>Monday<br> <?php echo "$mdate"; ?></center> </b> </font> </td>

<td bgcolor="#0b3460" width=200> <font color="white" size="5"><b> <center>Tuesday <br> <?php echo "$tuedate"; ?></center> </b> </font> </td>

<td bgcolor="#0b3460" width=200> <font color="white" size="5"><b> <center>Wednesday <br> <?php echo "$weddate"; ?></center> </b> </font> </td>

<td bgcolor="#0b3460" width=200> <font color="white" size="5"><b> <center>Thursday <br> <?php echo "$thudate"; ?></center> </b> </font> </td>

<td bgcolor="#0b3460" width=200> <font color="white" size="5"><b> <center>Friday <br> <?php echo "$fridate"; ?></center> </b> </font> </td>

<td bgcolor="#0b3460" width=200> <font color="white" size="5"><b> <center>Notes <br> <?php echo " "; ?></center> </b> </font> </td>

</tr>

<tr height=65> <td> <center>Period 1<br> 
<?php grabmain($username, "1");  ?></center></td><td valign="top"><?php grabplot($week, 1, $username, 1); ?> </td><td valign="top"><?php grabplot($week, 1, $username, 2); ?></td><td valign="top"><?php grabplot($week, 1, $username, 3); ?></td><td valign="top"><?php grabplot($week, 1, $username, 4); ?></td><td valign="top"><?php grabplot($week, 1, $username, 5); ?></td><td valign="top"><?php grabplot($week, 1, $username, 6); ?></td> </tr> 
<tr height=65> <td> <center>Period 2<br> <?php grabmain($username, "2");  ?>
</center></td><td valign="top"><?php grabplot($week, 2, $username, 1); ?></td>
<td valign="top"><?php grabplot($week, 2, $username, 2); ?></td>
<td valign="top"><?php grabplot($week, 2, $username, 3); ?></td>
<td valign="top"><?php grabplot($week, 2, $username, 4); ?></td>
<td valign="top"><?php grabplot($week, 2, $username, 5); ?></td>
<td valign="top"><?php grabplot($week, 2, $username, 6); ?></td> 
</tr> 
<tr height=65> <td> <center>Period 3<br> <?php grabmain($username, "3");  ?>
</center></td><td valign="top"><?php grabplot($week, 3, $username, 1); ?></td>
<td valign="top"><?php grabplot($week, 3, $username, 2); ?></td>
<td valign="top"><?php grabplot($week, 3, $username, 3); ?></td>
<td valign="top"><?php grabplot($week, 3, $username, 4); ?></td>
<td valign="top"><?php grabplot($week, 3, $username, 5); ?></td>
<td valign="top"><?php grabplot($week, 3, $username, 6); ?></td> 
</tr> 
<tr height=65> <td> <center>Period 4<br> <?php grabmain($username, "4");  ?>
</center></td><td valign="top"><?php grabplot($week, 4, $username, 1); ?></td>
<td valign="top"><?php grabplot($week, 4, $username, 2); ?></td>
<td valign="top"><?php grabplot($week, 4, $username, 3); ?></td>
<td valign="top"><?php grabplot($week, 4, $username, 4); ?></td>
<td valign="top"><?php grabplot($week, 4, $username, 5); ?></td>
<td valign="top"><?php grabplot($week, 4, $username, 6); ?></td> 
</tr> 
<tr height=65> <td> <center>Period 5<br> <?php grabmain($username, "5");  ?>
</center></td><td valign="top"><?php grabplot($week, 5, $username, 1); ?></td>
<td valign="top"><?php grabplot($week, 5, $username, 2); ?></td>
<td valign="top"><?php grabplot($week, 5, $username, 3); ?></td>
<td valign="top"><?php grabplot($week, 5, $username, 4); ?></td>
<td valign="top"><?php grabplot($week, 5, $username, 5); ?></td>
<td valign="top"><?php grabplot($week, 5, $username, 6); ?></td> 
</tr> 
<tr height=65> <td> <center>Period 6<br> <?php grabmain($username, "6");  ?>
</center></td><td valign="top"><?php grabplot($week, 6, $username, 1); ?></td>
<td valign="top"><?php grabplot($week, 6, $username, 2); ?></td>
<td valign="top"><?php grabplot($week, 6, $username, 3); ?></td>
<td valign="top"><?php grabplot($week, 6, $username, 4); ?></td>
<td valign="top"><?php grabplot($week, 6, $username, 5); ?></td>
<td valign="top"><?php grabplot($week, 6, $username, 6); ?></td> 
</tr> 
<tr height=65> <td> <center>Period 7<br> 
<?php grabmain($username, "7");  ?></center></td><td valign="top"><?php grabplot($week, 7, $username, 1); ?></td>
<td valign="top"><?php grabplot($week, 7, $username, 2); ?></td>
<td valign="top"><?php grabplot($week, 7, $username, 3); ?></td>
<td valign="top"><?php grabplot($week, 7, $username, 4); ?></td>
<td valign="top"><?php grabplot($week, 7, $username, 5); ?></td>
<td valign="top"><?php grabplot($week, 7, $username, 6); ?></td> 
</tr> 
<tr height=65> <td> <center>Period 8<br> 
<?php grabmain($username, "8");  ?></center></td><td valign="top"><?php grabplot($week, 8, $username, 1); ?></td>
<td valign="top"><?php grabplot($week, 8, $username, 2); ?></td>
<td valign="top"><?php grabplot($week, 8, $username, 3); ?></td>
<td valign="top"><?php grabplot($week, 8, $username, 4); ?></td>
<td valign="top"><?php grabplot($week, 8, $username, 5); ?></td>
<td valign="top"><?php grabplot($week, 8, $username, 6); ?></td> 
</tr> 
<tr height=65> <td> <center>Period 9<br> 
<?php grabmain($username, "9");  ?></center></td><td valign="top"><?php grabplot($week, 9, $username, 1); ?></td>
<td valign="top"><?php grabplot($week, 9, $username, 2); ?></td>
<td valign="top"><?php grabplot($week, 9, $username, 3); ?></td>
<td valign="top"><?php grabplot($week, 9, $username, 4); ?></td>
<td valign="top"><?php grabplot($week, 9, $username, 5); ?></td>
<td valign="top"><?php grabplot($week, 9, $username, 6); ?></td> 
</tr> 



<?php if($_SESSION['use15'] == 1) { ?>
<tr height=65> <td> <center>Period 10<br> 
<?php grabmain($username, "10");  ?></center></td><td valign="top"><?php grabplot($week, 10, $username, 1); ?></td>
<td valign="top"><?php grabplot($week, 10, $username, 2); ?></td>
<td valign="top"><?php grabplot($week, 10, $username, 3); ?></td>
<td valign="top"><?php grabplot($week, 10, $username, 4); ?></td>
<td valign="top"><?php grabplot($week, 10, $username, 5); ?></td>
<td valign="top"><?php grabplot($week, 10, $username, 6); ?></td> 
</tr> 

<tr height=65> <td> <center>Period 11<br> 
<?php grabmain($username, "11");  ?></center></td><td valign="top"><?php grabplot($week, 11, $username, 1); ?></td>
<td valign="top"><?php grabplot($week, 11, $username, 2); ?></td>
<td valign="top"><?php grabplot($week, 11, $username, 3); ?></td>
<td valign="top"><?php grabplot($week, 11, $username, 4); ?></td>
<td valign="top"><?php grabplot($week, 11, $username, 5); ?></td>
<td valign="top"><?php grabplot($week, 11, $username, 6); ?></td> 
</tr> 

<tr height=65> <td> <center>Period 12<br> 
<?php grabmain($username, "12");  ?></center></td><td valign="top"><?php grabplot($week, 12, $username, 1); ?></td>
<td valign="top"><?php grabplot($week, 12, $username, 2); ?></td>
<td valign="top"><?php grabplot($week, 12, $username, 3); ?></td>
<td valign="top"><?php grabplot($week, 12, $username, 4); ?></td>
<td valign="top"><?php grabplot($week, 12, $username, 5); ?></td>
<td valign="top"><?php grabplot($week, 12, $username, 6); ?></td> 
</tr> 
<tr height=65> <td> <center>Period 13<br> 
<?php grabmain($username, "13");  ?></center></td><td valign="top"><?php grabplot($week, 13, $username, 1); ?></td>
<td valign="top"><?php grabplot($week, 13, $username, 2); ?></td>
<td valign="top"><?php grabplot($week, 13, $username, 3); ?></td>
<td valign="top"><?php grabplot($week, 13, $username, 4); ?></td>
<td valign="top"><?php grabplot($week, 13, $username, 5); ?></td>
<td valign="top"><?php grabplot($week, 13, $username, 6); ?></td> 
</tr> 
<tr height=65> <td> <center>Period 14<br> 
<?php grabmain($username, "14");  ?></center></td><td valign="top"><?php grabplot($week, 14, $username, 1); ?></td>
<td valign="top"><?php grabplot($week, 14, $username, 2); ?></td>
<td valign="top"><?php grabplot($week, 14, $username, 3); ?></td>
<td valign="top"><?php grabplot($week, 14, $username, 4); ?></td>
<td valign="top"><?php grabplot($week, 14, $username, 5); ?></td>
<td valign="top"><?php grabplot($week, 14, $username, 6); ?></td> 
</tr> 
<tr height=65> <td> <center>Period 15<br> 
<?php grabmain($username, "15");  ?></center></td><td valign="top"><?php grabplot($week, 15, $username, 1); ?></td>
<td valign="top"><?php grabplot($week, 15, $username, 2); ?></td>
<td valign="top"><?php grabplot($week, 15, $username, 3); ?></td>
<td valign="top"><?php grabplot($week, 15, $username, 4); ?></td>
<td valign="top"><?php grabplot($week, 15, $username, 5); ?></td>
<td valign="top"><?php grabplot($week, 15, $username, 6); ?></td> 
</tr> 
 <?php } ?>


</table></center>
