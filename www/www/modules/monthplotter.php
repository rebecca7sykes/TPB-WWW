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
Choose month and click view:
<form action="members.php" action="get">
<input type="hidden" name="op" value="monthplotter">
<select name="week" id="week">
<option value="1">January</option>
<option value="2">February</option>
<option value="3">March</option>
<option value="4">April</option>
<option value="5">May</option>
<option value="6">June</option>
<option value="7">July</option>
<option value="8">August</option>
<option value="9">September</option>
<option value="10">October</option>
<option value="11">November</option>
<option value="12">December</option>
</select>
<INPUT type="submit" value="View">
</form>