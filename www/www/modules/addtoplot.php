<?php

include("inc/init.php");

?>
<?php 

include("inc/functions.php");

?>
<?php

$month    = $_SESSION['month'];

?>
<?php

$guestcheck = $_SESSION['guest'];
If ($guestcheck == 1) 
 { 
   die("<a href=members.php?op=revv>Guests may only review the book! Click here to go to the review page</a>");
 }

?>
<font size="6"><b>What are you doing in class today?</b></font>
<br>
<br>
<br>
<br>
Using this form you may add specifics about your lesson plan, activity, or assessment to your daily plotter....<br>
Simply click the periods for which this lesson applies, the standards being addressed in this lesson and type of lesson <br>
and TeacherPlanBook will automatically add this on your plotter<br>
<br><br>
<form action="members.php?op=addtoplot2" method=post>

<table border=0>
<tr><td>Week Number:</td>
<td>
<select name="week"> 


<?php
         include("inc/editwk.php");
?>
<?php
		 // structure the weeks
include("inc/structurewk.php");
?>
</select>
</td><td> </td> <td> </td> <td>   </td> </tr> 
<tr>
<td>Period(s):</td><td> 
<?php $g = $_GET['period']; ?>
1 <input type="checkbox" name="opt[]" value="1" <?php $n = 1; if ($g == $n) { echo "CHECKED"; }  ?> />
2 <input type="checkbox" name="opt[]" value="2" <?php $n = 2; if ($g == $n) { echo "CHECKED"; }  ?> /> 
3 <input type="checkbox" name="opt[]" value="3" <?php $n = 3; if ($g == $n) { echo "CHECKED"; }  ?> /> 
4 <input type="checkbox" name="opt[]" value="4" <?php $n = 4; if ($g == $n) { echo "CHECKED"; }  ?> /> 
5 <input type="checkbox" name="opt[]" value="5" <?php $n = 5; if ($g == $n) { echo "CHECKED"; }  ?> /> 
6 <input type="checkbox" name="opt[]" value="6" <?php $n = 6; if ($g == $n) { echo "CHECKED"; }  ?> /> 
7 <input type="checkbox" name="opt[]" value="7" <?php $n = 7; if ($g == $n) { echo "CHECKED"; }  ?> /> 
8 <input type="checkbox" name="opt[]" value="8" <?php $n = 8; if ($g == $n) { echo "CHECKED"; }  ?> /> 
9 <input type="checkbox" name="opt[]" value="9" <?php $n = 9; if ($g == $n) { echo "CHECKED"; }  ?> /> 
<?php if($_SESSION['use15'] == 1) { ?>
10 <input type="checkbox" name="opt[]" value="10" <?php $n = 10; if ($g == $n) { echo "CHECKED"; }  ?> /> 
11 <input type="checkbox" name="opt[]" value="11" <?php $n = 11; if ($g == $n) { echo "CHECKED"; }  ?> /> 
12 <input type="checkbox" name="opt[]" value="12" <?php $n = 12; if ($g == $n) { echo "CHECKED"; }  ?> /> 
13 <input type="checkbox" name="opt[]" value="13" <?php $n = 13; if ($g == $n) { echo "CHECKED"; }  ?> /> 
14 <input type="checkbox" name="opt[]" value="14" <?php $n = 14; if ($g == $n) { echo "CHECKED"; }  ?> /> 
15 <input type="checkbox" name="opt[]" value="15" <?php $n = 15; if ($g == $n) { echo "CHECKED"; }  ?> /> 
<?php } ?>
</td><td> </td> <td>   </td> </tr> <tr>
<td>
Monday:<br><input type="checkbox" name="monoff" value="true">No School</td><td><TEXTAREA NAME="monday" COLS=40 ROWS=6> 
<?php 
 $username = $_SESSION['username']; $weekid = $_GET['week']; $period = $_GET['period']; 
  editplot($username, $weekid, $period, 1); ?></TEXTAREA><br>Learning Standards #: 
<?php
$st1 = $_GET['st1']; 
$st2 = $_GET['st2']; 
$st3 = $_GET['st3'];
$st4 = $_GET['st4'];
$st5 = $_GET['st5'];
?>
<input type="checkbox" name="stand1[]" value="1"  <?php $es = strpos($st1, "1"); if($es === false) { } else { echo " CHECKED "; } ?> />1
<input type="checkbox" name="stand1[]" value="2"  <?php $es = strpos($st1, "2"); if($es === false) { } else { echo " CHECKED "; } ?> />2
<input type="checkbox" name="stand1[]" value="3" <?php $es = strpos($st1, "3"); if($es === false) { } else { echo " CHECKED "; } ?> />3
<input type="checkbox" name="stand1[]" value="4" <?php $es = strpos($st1, "4"); if($es === false) { } else { echo " CHECKED "; } ?> />4
<input type="checkbox" name="stand1[]" value="5" <?php $es = strpos($st1, "5"); if($es === false) { } else { echo " CHECKED "; } ?> />5 
<input type="checkbox" name="stand1[]" value="6" <?php $es = strpos($st1, "6"); if($es === false) { } else { echo " CHECKED "; } ?> />6 
<input type="checkbox" name="stand1[]" value="7" <?php $es = strpos($st1, "7"); if($es === false) { } else { echo " CHECKED "; } ?> />7 </td>
<td>
<input type="radio" name="mont" value="1" <?php editradio($username, $weekid, $period, 1, 1);  ?> /> Assesment - Quiz <br />
<input type="radio" name="mont" value="2" <?php editradio($username, $weekid, $period, 1, 2);  ?> /> Assesment - Test <br />
</td><td>
<input type="radio" name="mont" value="3" <?php editradio($username, $weekid, $period, 1, 3);  ?> /> Activity <br />
<input type="radio" name="mont" value="4"  <?php editradio($username, $weekid, $period, 1, 4);  ?> /> Activity - Textbook <?php $username = $_SESSION['username']; $selectid = "selid1";  bkname($username, $selectid); ?> <input type="text" name="bktxt1" value="Description Here" >  
<br />
<input type="radio" name="mont" value="5"  <?php editradio($username, $weekid, $period, 1, 5);  ?> /> Activity - Worksheet <br />
<input type="radio" name="mont" value="6"  <?php editradio($username, $weekid, $period, 1, 6);  ?> /> Activity - Presentation <br />
<input type="radio" name="mont" value="7"  <?php editradio($username, $weekid, $period, 1, 7);  ?> /> Activity - Essay Writing <br />
<input type="radio" name="mont" value="8"  <?php editradio($username, $weekid, $period, 1, 8);  ?> /> Activity - Assembly <br />
<input type="radio" name="mont" value="9"  <?php editradio($username, $weekid, $period, 1, 9);  ?> /> Activity - Movie <br />
<div style="height:20px;width:100%"></div>
</td><td valign=top><br>
</td>
</tr>
<tr><td>
Tuesday:<br><input type="checkbox" name="tueoff" value="true">No School</td><td> <TEXTAREA NAME="tuesday" COLS=40 ROWS=6> <?php 
 $username = $_SESSION['username']; $weekid = $_GET['week']; $period = $_GET['period']; 
  editplot($username, $weekid, $period, 2); ?> </TEXTAREA>><br>Learning Standards #: 
 <input type="checkbox" name="stand2[]" value="1" <?php $es = strpos($st2, "1"); if($es === false) { } else { echo " CHECKED "; } ?> />1
<input type="checkbox" name="stand2[]" value="2" <?php $es = strpos($st2, "2"); if($es === false) { } else { echo " CHECKED "; } ?> />2
<input type="checkbox" name="stand2[]" value="3" <?php $es = strpos($st2, "3"); if($es === false) { } else { echo " CHECKED "; } ?> />3
<input type="checkbox" name="stand2[]" value="4" <?php $es = strpos($st2, "4"); if($es === false) { } else { echo " CHECKED "; } ?> />4
<input type="checkbox" name="stand2[]" value="5" <?php $es = strpos($st2, "5"); if($es === false) { } else { echo " CHECKED "; } ?> />5
<input type="checkbox" name="stand2[]" value="6" <?php $es = strpos($st2, "6"); if($es === false) { } else { echo " CHECKED "; } ?>  />6
<input type="checkbox" name="stand2[]" value="7" <?php $es = strpos($st2, "7"); if($es === false) { } else { echo " CHECKED "; } ?> />7
</td>
<td>
<input type="radio" name="tuet" value="1" <?php editradio($username, $weekid, $period, 2, 1);  ?> /> Assesment - Quiz <br />
<input type="radio" name="tuet" value="2" <?php editradio($username, $weekid, $period, 2, 2);  ?> /> Assesment - Test <br />
</td><td>
<input type="radio" name="tuet" value="3" <?php editradio($username, $weekid, $period, 2, 3);  ?> /> Activity <br />
<input type="radio" name="tuet" value="4" <?php editradio($username, $weekid, $period, 2, 4);  ?> /> Activity - Textbook <?php $username = $_SESSION['username']; $selectid = "selid2";  bkname($username, $selectid); ?> <input type="text" name="bktxt2" value="Description Here" >  <br />
<input type="radio" name="tuet" value="5" <?php editradio($username, $weekid, $period, 2, 5);  ?> /> Activity - Worksheet <br />
<input type="radio" name="tuet" value="6" <?php editradio($username, $weekid, $period, 2, 6);  ?> /> Activity - Presentation <br />
<input type="radio" name="tuet" value="7" <?php editradio($username, $weekid, $period, 2, 7);  ?> /> Activity - Essay Writing <br />
<input type="radio" name="tuet" value="8" <?php editradio($username, $weekid, $period, 2, 8);  ?> /> Activity - Assembly <br />
<input type="radio" name="tuet" value="9" <?php editradio($username, $weekid, $period, 2, 9);  ?> /> Activity - Movie <br />
<div style="height:20px;width:100%"></div>
</td> <td valign=top> <br>
</td> </tr> <tr>
<td>
Wednesday:<br> <input type="checkbox" name="wedoff" value="true">No School</td><td> <TEXTAREA NAME="wednesday" COLS=40 ROWS=6> <?php 
 $username = $_SESSION['username']; $weekid = $_GET['week']; $period = $_GET['period']; 
  editplot($username, $weekid, $period, 3); ?> </TEXTAREA><br>Learning Standards #: 
  <input type="checkbox" name="stand3[]" value="1" <?php $es = strpos($st3, "1"); if($es === false) { } else { echo " CHECKED "; } ?> />1
<input type="checkbox" name="stand3[]" value="2" <?php $es = strpos($st3, "2"); if($es === false) { } else { echo " CHECKED "; } ?> />2
<input type="checkbox" name="stand3[]" value="3" <?php $es = strpos($st3, "3"); if($es === false) { } else { echo " CHECKED "; } ?> />3
<input type="checkbox" name="stand3[]" value="4" <?php $es = strpos($st3, "4"); if($es === false) { } else { echo " CHECKED "; } ?> />4
<input type="checkbox" name="stand3[]" value="5" <?php $es = strpos($st3, "5"); if($es === false) { } else { echo " CHECKED "; } ?> />5
<input type="checkbox" name="stand3[]" value="6" <?php $es = strpos($st3, "6"); if($es === false) { } else { echo " CHECKED "; } ?> />6
<input type="checkbox" name="stand3[]" value="7" <?php $es = strpos($st3, "7"); if($es === false) { } else { echo " CHECKED "; } ?> />7
</td><td>
<input type="radio" name="wedt" value="1" <?php editradio($username, $weekid, $period, 3, 1); ?> /> Assesment - Quiz <br />
<input type="radio" name="wedt" value="2" <?php editradio($username, $weekid, $period, 3, 2); ?> /> Assesment - Test <br />
</td><td>
<input type="radio" name="wedt" value="3" <?php editradio($username, $weekid, $period, 3, 3); ?> /> Activity <br />
<input type="radio" name="wedt" value="4" <?php editradio($username, $weekid, $period, 3, 4); ?> /> Activity - Textbook <?php $username = $_SESSION['username']; $selectid = "selid3";  bkname($username, $selectid); ?> <input type="text" name="bktxt3" value="Description Here" >  <br />
<input type="radio" name="wedt" value="5" <?php editradio($username, $weekid, $period, 3, 5); ?> /> Activity - Worksheet <br />
<input type="radio" name="wedt" value="6" <?php editradio($username, $weekid, $period, 3, 6); ?> /> Activity - Presentation <br />
<input type="radio" name="wedt" value="7" <?php editradio($username, $weekid, $period, 3, 7); ?> /> Activity - Essay Writing <br />
<input type="radio" name="wedt" value="8" <?php editradio($username, $weekid, $period, 3, 8); ?> /> Activity - Assembly <br />
<input type="radio" name="wedt" value="9" <?php editradio($username, $weekid, $period, 3, 9); ?> /> Activity - Movie <br />
<div style="height:20px;width:100%"></div>
</td> <td valign=top> <br>

  </td> </tr> <tr>
<td>
Thursday:<br><input type="checkbox" name="thuoff" value="true">No School</td><td> <TEXTAREA NAME="thursday" COLS=40 ROWS=6> <?php 
 $username = $_SESSION['username']; $weekid = $_GET['week']; $period = $_GET['period']; 
  editplot($username, $weekid, $period, 4); ?> </TEXTAREA><br>Learning Standards #: 
  <input type="checkbox" name="stand4[]" value="1" <?php $es = strpos($st4, "1"); if($es === false) { } else { echo " CHECKED "; } ?> />1
<input type="checkbox" name="stand4[]" value="2"   <?php $es = strpos($st4, "2"); if($es === false) { } else { echo " CHECKED "; } ?> />2
<input type="checkbox" name="stand4[]" value="3"   <?php $es = strpos($st4, "3"); if($es === false) { } else { echo " CHECKED "; } ?> />3
<input type="checkbox" name="stand4[]" value="4"   <?php $es = strpos($st4, "4"); if($es === false) { } else { echo " CHECKED "; } ?> />4
<input type="checkbox" name="stand4[]" value="5"   <?php $es = strpos($st4, "5"); if($es === false) { } else { echo " CHECKED "; } ?> />5
<input type="checkbox" name="stand4[]" value="6"   <?php $es = strpos($st4, "6"); if($es === false) { } else { echo " CHECKED "; } ?> />6
<input type="checkbox" name="stand4[]" value="7"   <?php $es = strpos($st4, "7"); if($es === false) { } else { echo " CHECKED "; } ?> />7
</td>
<td><input type="radio" name="thut" value="1" <?php editradio($username, $weekid, $period, 4, 1); ?> /> Assesment - Quiz <br />
<input type="radio" name="thut" value="2" <?php editradio($username, $weekid, $period, 4, 2); ?>/> Assesment - Test <br />
</td><td><input type="radio" name="thut" value="3" <?php editradio($username, $weekid, $period, 4, 3); ?> /> Activity <br />
<input type="radio" name="thut" value="4" <?php editradio($username, $weekid, $period, 4, 4); ?> /> Activity - Textbook <?php $username = $_SESSION['username']; $selectid = "selid4";  bkname($username, $selectid); ?> <input type="text" name="bktxt4" value="Description Here" >  <br />
<input type="radio" name="thut" value="5" <?php editradio($username, $weekid, $period, 4, 5); ?> /> Activity - Worksheet <br />
<input type="radio" name="thut" value="6" <?php editradio($username, $weekid, $period, 4, 6); ?> /> Activity - Presentation <br />
<input type="radio" name="thut" value="7" <?php editradio($username, $weekid, $period, 4, 7); ?> /> Activity - Essay Writing <br />
<input type="radio" name="thut" value="8" <?php editradio($username, $weekid, $period, 4, 8); ?> /> Activity - Assembly <br />
<input type="radio" name="thut" value="9" <?php editradio($username, $weekid, $period, 4, 9); ?> /> Activity - Movie <br />
<div style="height:20px;width:100%"></div>
</td> <td valign=top> <br>

 </td> </tr> <tr>
<td>Friday:<br><input type="checkbox" name="frioff" value="true">No School</td><td>  <TEXTAREA NAME="friday" COLS=40 ROWS=6> <?php 
 $username = $_SESSION['username']; $weekid = $_GET['week']; $period = $_GET['period']; 
  editplot($username, $weekid, $period, 5); ?> </TEXTAREA><br> Learning Standards #: 
  <input type="checkbox" name="stand5[]" value="1" <?php $es = strpos($st5, "1"); if($es === false) { } else { echo " CHECKED "; } ?> />1
<input type="checkbox" name="stand5[]" value="2"   <?php $es = strpos($st5, "2"); if($es === false) { } else { echo " CHECKED "; } ?>  />2
<input type="checkbox" name="stand5[]" value="3"   <?php $es = strpos($st5, "3"); if($es === false) { } else { echo " CHECKED "; } ?> />3
<input type="checkbox" name="stand5[]" value="4"   <?php $es = strpos($st5, "4"); if($es === false) { } else { echo " CHECKED "; } ?> />4
<input type="checkbox" name="stand5[]" value="5"   <?php $es = strpos($st5, "5"); if($es === false) { } else { echo " CHECKED "; } ?> />5
<input type="checkbox" name="stand5[]" value="6"   <?php $es = strpos($st5, "6"); if($es === false) { } else { echo " CHECKED "; } ?>  />6
<input type="checkbox" name="stand5[]" value="7"   <?php $es = strpos($st5, "7"); if($es === false) { } else { echo " CHECKED "; } ?> />7
</td>
<td>
<input type="radio" name="frit" value="1" <?php editradio($username, $weekid, $period, 5, 1); ?> /> Assesment - Quiz <br />
<input type="radio" name="frit" value="2" <?php editradio($username, $weekid, $period, 5, 2); ?> /> Assesment - Test <br />
</td><td><input type="radio" name="frit" value="3" <?php editradio($username, $weekid, $period, 5, 3); ?> /> Activity <br />
<input type="radio" name="frit" value="4" <?php editradio($username, $weekid, $period, 5, 4); ?> /> Activity - Textbook <?php $username = $_SESSION['username']; $selectid = "selid5";  bkname($username, $selectid); ?> <input type="text" name="bktxt5" value=" " >  <br />
<input type="radio" name="frit" value="5" <?php editradio($username, $weekid, $period, 5, 5); ?>  /> Activity - Worksheet <br />
<input type="radio" name="frit" value="6" <?php editradio($username, $weekid, $period, 5, 6); ?> /> Activity - Presentation <br />
<input type="radio" name="frit" value="7" <?php editradio($username, $weekid, $period, 5, 7); ?> /> Activity - Essay Writing <br />
<input type="radio" name="frit" value="8" <?php editradio($username, $weekid, $period, 5, 8); ?> /> Activity - Assembly <br />
<input type="radio" name="frit" value="9" <?php editradio($username, $weekid, $period, 5, 9); ?> /> Activity - Movie <br />
<div style="height:20px;width:100%"></div>
</td> <td valign=top> <br>

 </td> </tr> <td>
Notes: </td><td><TEXTAREA NAME="notes" COLS=40 ROWS=6> <?php 
 $username = $_SESSION['username']; $weekid = $_GET['week']; $period = $_GET['period']; 
  editplot($username, $weekid, $period, 6); ?> </textarea>
<td> </td> <td> </td> <td valign=top>  </td> </tr> </table>

<INPUT type="submit" value="Plot It!">
</form>
