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
<head>
<script type="text/javascript" >

function handleIFRAME(thestring){
    
    var iframe = document.getElementById('reportgen');

    iframe.src = 'reportgen.php?'+thestring;
    iframe.reload();    

}
</script> 
</head>
<table border=0><tr><td> 

<font size="6"><b>What are you doing in class?</b></font>
<br>
<br>
You may add your lesson objective to the planner on this page.
<br>
<br>

<table border=0>
<form action="members.php?op=addtoplan2" method="post">
<tr><td width=55 valign=top><font color=green>Step #1:</font> </td> <td valign=top>Choose the week this objective is for.
<select name="week"> 
<?php
         include("inc/editwk.php");
?>

<?php
          // structure the weeks
include("inc/structurewk.php");

?>
</select></td></tr>
<tr><td width=55 valign=top>
<font color=green>Step #2:</font></td><td valign=top>Choose the period(s) this objective is for.
<?php $g = $_GET['period']; ?><br>
1 <input type="checkbox" name="opt[]" value="1" <?php $n = 1; if ($g == $n) { echo "CHECKED"; } ?> />
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
</td></tr></table>
<table>
<tr><td width=68 valign=top>
<font color=green>Step #3:</font></td>
<td valign=top>Choose a link to a National or State Curriculum which you would like to review by clicking on<br>that choice in the direct link list (see list to the right). Scroll down below to review box to see<br>the curriculum you chose, review, highlight, copy, and paste into objective box what you want <br>to appear in your objective.<br><textarea class="tinymce" name="objective" cols="60" rows="27"><?php if(isset($_GET['week'])) { $username = $_SESSION['username']; 
 $weekid = $_GET['week']; $period = $_GET['period']; editobj($username, $weekid, $period); }  ?></textarea><br></td></tr>
 <tr><td valign=top><font color=green>Step #4:</font></td><td valign=top>
Edit at your discretion or choose the collaborate option to search our dedicated <br>member library for more objective ideas on your topic.
</td></tr><tr><td> </td><td>
<tr><td valign=top>
<font color=green>Extra:</font></td>
<td> 

<select name="shareopt"> 
<option value=1> Share this entry </option> 
<option value=0> Do not share this entry </option> 
</select><br> Sharing plans stores your objective
into TeacherPlanBook<br> library for other members to view
through the collaborative search

</td></tr><tr><td valign=top><font color=green>Step #5:</font></td><td valign=top>
Click <font color=red>Plan It</font> when done.<br>
<INPUT type="submit" value="Plan It!">
</td></tr>
</form></table><br>Objectives are always individually editable from the objective page
<br><br>
<head>
<script type="text/javascript">
<!--

function addLoadEvent(func) {
  var oldonload = window.onload;
  if (typeof window.onload != 'function') {
    window.onload = func;
  } else {
    window.onload = function() {
      if (oldonload) {
        oldonload();
      }
      func();
    }
  }
}

addLoadEvent(function() {
  showPage1();
});
// =======================================================

var baseUrl = "https://teacherplan.server287.com";

function showPage(el) {
 	var div = document.getElementById("textDiv");
 	page = baseUrl + el.id;
 	div.innerHTML = "Press the reload button if your browser has issues loading the page<br>And re-navigate to the PDF(This may happen due to some users internet connection)<br><input type=button value=Reload onclick=Reload();><br><iframe src ='" + page +"' width='1010px' height='700px' id='iframe1' scrolling='auto'>";
}

function showPage2() {
 	var div = document.getElementById("textDiv");
 	v = document.getElementById('sites').value;
	if ( v.indexOf( "http://" ) > -1 ) {
      page = v;
    } else if ( v.indexOf( "https://" ) > -1 )  { 
	  page = v;
    } else { 
	  page = "http://" + v;
    }
 	div.innerHTML = "Press the reload button if your browser has issues loading the page<br>And re-navigate to the PDF(This may happen due to some users internet connection)<br><input type=button value=Reload onclick=Reload();><br><iframe src ='" + page +"' width='1010px' height='700px' id='iframe1' scrolling='auto'>";
}

// -->
</script>

<script type="text/javascript">
function Reload () {
var f = document.getElementById('iframe1');
f.contentWindow.location.reload(true);
}
</script>
</head>

</td><td valign="top"><?php include("inc/newb.php"); ?> </td></tr></table>

<div id=textDiv style="text-align:center;">  </div>
