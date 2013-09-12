<?php
if(!session_is_registered(username)) 
{
 die("<a href=members.php?op=memhome>You must login! Click here to do it</a>");
}
$username = $_SESSION['username']; 
If($_SESSION['regs'] == 1)
 { 
  $il = 1; 
 }
?>
<?php
include("inc/functions.php");
?>


<font size="6" color="#3A6A9D"><b>Initial Setup</b></font>
<br><br>
Welcome to TeacherPlanBook.com<br>
Since you are a new, we would like to welcome you to our community<br>
Also, Lets setup your planbook<br>
<br>
Before the setup process is completed,<br>
Please fill out the following questions so we can set you up.<br>
<br>
<form action="members.php?op=setupproc" method="post"><br>
<h1>What is the first day of class for this academic year?</h1><br>
<Select name="month">
<?php If ($il == 1) {  echo "<option value="; 
  $j = $_SESSION['month']; 
  echo "$j"; echo ">"; 
   If($j == 8) { 
        echo "August"; 
       }  

else { echo "September";  }
	 echo "</option>"; 
	 }   ?>
<option value="8">August</option><br>
<option value="9">September</option<br>
</select>
<select name="day">
<?php  If ($il == 1) {
   $iz = $_SESSION['day']; 
   echo "<option value="; echo "$iz"; echo ">"; 
   echo "$iz"; echo "</option>"; 
   }
   
    ?>

<option value="1">1</option>
<option value="2">2</option>
<option value="3">3</option>
<option value="4">4</option>
<option value="5">5</option>
<option value="6">6</option>
<option value="7">7</option>
<option value="8">8</option>
<option value="9">9</option>
<option value="10">10</option>
<option value="11">11</option>
<option value="12">12</option>
<option value="13">13</option>
<option value="14">14</option>
<option value="15">15</option>
<option value="16">16</option>
<option value="17">17</option>
<option value="18">18</option>
<option value="19">19</option>
<option value="20">20</option>
<option value="21">21</option>
<option value="22">22</option>
<option value="23">23</option>
<option value="24">24</option>
<option value="25">25</option>
<option value="26">26</option>
<option value="27">27</option>
<option value="28">28</option>
<option value="29">29</option>
<option value="30">30</option>
<option value="31">31</option>
</select>
<select name="year">
<?php
If ($il == 1) {
   $io = $_SESSION['year']; 
   echo "<option value="; echo "$io"; echo ">"; 
   echo "$io"; echo "</option>"; 
   } ?>
   
<!-- <option value="2013">2013</option> -->
<option value="2013">2013</option>
<option value="2012">2012</option>
<option value="2011">2011</option>
</select>
<br>
<br>
<h1>What subjects are you teaching each period, and what time?</h1><br>
<script type="text/javascript" src="jquery.js"></script>
<script>
$(function() {
    $("[name=use15]").click(function(){
            $('.toHide').hide();
            $("#blk-"+$(this).val()).show('fast');
    });
 });
 </script>
<font size="3" color="#565656"><b>Choose which format you would like for your planbook:</b></font><br>
<input type="radio" name="use15" value="2" <?php if($_SESSION['use15'] == 0) { echo "CHECKED"; } ?>>Standard 9 Period Schedule(Suggested for Jr./Sr. Highschools)
<br>
<input type="radio" name="use15" value="1" <?php if($_SESSION['use15'] == 1) { echo "CHECKED"; } ?> >Custom 15 Period Schedule(Suggested for Elementary Schools)
<br><br>
<table border=0>
<tr><td width=35><center>Period</center></td><td><center>Class Name</center></td><td><center>Time Start</center></td><td><center> to </center></td><td><center> Time End</center></td></tr>
<tr><td>1</td><td><input type="text" name="class"  value="<?php editset($username, "per1name"); ?>"></td><td><input type="text" name="timestart" value="<?php editset($username, "per1time1"); ?>"></td><td> to </td><td> <input type="text" name="timeend"  value="<?php editset($username, "per1time2"); ?>"> </td></tr>
<tr><td>2</td><td><input type="text" name="class2" value="<?php editset($username, "per2name"); ?>"></td><td><input type="text" name="timestart2" value="<?php editset($username, "per2time1"); ?>"></td><td> to </td><td> <input type="text" name="timeend2" value="<?php editset($username, "per2time2"); ?>"> </td></tr>
<tr><td>3</td><td><input type="text" name="class3" value="<?php editset($username, "per3name"); ?>"></td><td><input type="text" name="timestart3" value="<?php editset($username, "per3time1"); ?>"></td><td> to </td><td> <input type="text" name="timeend3" value="<?php editset($username, "per3time2"); ?>"> </td></tr>
<tr><td>4</td><td><input type="text" name="class4" value="<?php editset($username, "per4name"); ?>"></td><td><input type="text" name="timestart4" value="<?php editset($username, "per4time1"); ?>"></td><td> to </td><td> <input type="text" name="timeend4" value="<?php editset($username, "per4time2"); ?>"> </td></tr>
<tr><td>5</td><td><input type="text" name="class5" value="<?php editset($username, "per5name"); ?>"></td><td><input type="text" name="timestart5" value="<?php editset($username, "per5time1"); ?>"></td><td> to </td><td> <input type="text" name="timeend5" value="<?php editset($username, "per5time2"); ?>"> </td></tr>
<tr><td>6</td><td><input type="text" name="class6" value="<?php editset($username, "per6name"); ?>"></td><td><input type="text" name="timestart6" value="<?php editset($username, "per6time1"); ?>"></td><td> to </td><td> <input type="text" name="timeend6" value="<?php editset($username, "per6time2"); ?>"> </td></tr>
<tr><td>7</td><td><input type="text" name="class7" value="<?php editset($username, "per7name"); ?>"></td><td><input type="text" name="timestart7" value="<?php editset($username, "per7time1"); ?>"></td><td> to </td><td> <input type="text" name="timeend7" value="<?php editset($username, "per7time2"); ?>"> </td></tr>
<tr><td>8</td><td><input type="text" name="class8" value="<?php editset($username, "per8name"); ?>"></td><td><input type="text" name="timestart8" value="<?php editset($username, "per8time1"); ?>"></td><td> to </td><td> <input type="text" name="timeend8" value="<?php editset($username, "per8time2"); ?>"> </td></tr>
<tr><td>9</td><td><input type="text" name="class9" value="<?php editset($username, "per9name"); ?>"></td><td><input type="text" name="timestart9" value="<?php editset($username, "per9time1"); ?>"></td><td> to </td><td> <input type="text" name="timeend9" value="<?php editset($username, "per9time2"); ?>"> </td></tr>
</table>
<div id="blk-1" class="toHide" <?php if($_SESSION['use15'] == 0) { echo "style=\"display:none\""; } ?>>
<table border=0>
<tr><td width=35>10</td><td><input type="text" name="class10" value="<?php editset($username, "per10name"); ?>"></td><td><input type="text" name="timestart10" value="<?php editset($username, "per10time1"); ?>"></td><td> to </td><td> <input type="text" name="timeend10" value="<?php editset($username, "per10time2"); ?>"> </td></tr>
<tr><td>11</td><td><input type="text" name="class11" value="<?php editset($username, "per11name"); ?>"></td><td><input type="text" name="timestart11" value="<?php editset($username, "per11time1"); ?>"></td><td> to </td><td> <input type="text" name="timeend11" value="<?php editset($username, "per11time2"); ?>"> </td></tr>
<tr><td>12</td><td><input type="text" name="class12" value="<?php editset($username, "per12name"); ?>"></td><td><input type="text" name="timestart12" value="<?php editset($username, "per12time1"); ?>"></td><td> to </td><td> <input type="text" name="timeend12" value="<?php editset($username, "per12time2"); ?>"> </td></tr>
<tr><td>13</td><td><input type="text" name="class13" value="<?php editset($username, "per13name"); ?>"></td><td><input type="text" name="timestart13" value="<?php editset($username, "per13time1"); ?>"></td><td> to </td><td> <input type="text" name="timeend13" value="<?php editset($username, "per13time2"); ?>"> </td></tr>
<tr><td>14</td><td><input type="text" name="class14" value="<?php editset($username, "per14name"); ?>"></td><td><input type="text" name="timestart14" value="<?php editset($username, "per14time1"); ?>"></td><td> to </td><td> <input type="text" name="timeend14" value="<?php editset($username, "per14time2"); ?>"> </td></tr>
<tr><td>15</td><td><input type="text" name="class15" value="<?php editset($username, "per15name"); ?>"></td><td><input type="text" name="timestart15" value="<?php editset($username, "per15time1"); ?>"></td><td> to </td><td> <input type="text" name="timeend15" value="<?php editset($username, "per15time2"); ?>"> </td></tr>
</table>
</div>
<br>
<br>
<h1>What textbooks will you be using throughout the year? </h1><br>
<br>
<table border=0>
<tr><td> Book 1 </td> <td><input type="text" name="bk1" value="<?php editset($username, "bk1"); ?>"> </td> </tr>
<tr><td> Book 2 </td> <td><input type="text" name="bk2" value="<?php editset($username, "bk2"); ?>"> </td> </tr>
<tr><td> Book 3 </td> <td><input type="text" name="bk3" value="<?php editset($username, "bk3"); ?>"> </td> </tr>
<tr><td> Book 4 </td> <td><input type="text" name="bk4" value="<?php editset($username, "bk4"); ?>"> </td> </tr>
<tr><td> Book 5 </td> <td><input type="text" name="bk5" value="<?php editset($username, "bk5"); ?>"> </td> </tr>
<tr><td> Book 6 </td> <td><input type="text" name="bk6" value="<?php editset($username, "bk6"); ?>"> </td> </tr>
<tr><td> Book 7 </td> <td><input type="text" name="bk7" value="<?php editset($username, "bk7"); ?>"> </td> </tr>
<tr><td> Book 8 </td> <td><input type="text" name="bk8" value="<?php editset($username, "bk8"); ?>"> </td> </tr>
<tr><td> Book 9 </td> <td><input type="text" name="bk9" value="<?php editset($username, "bk9"); ?>"> </td> </tr>
</table><br>
<input type="submit" value="Set it up!">
</form>
