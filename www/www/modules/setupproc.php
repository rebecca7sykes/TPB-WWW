<?php

if(!session_is_registered(username)) 
{
 die("<a href=members.php?op=memhome>You must login! Click here to do it</a>");
}


?>



<?php

$month = mysql_real_escape_string(htmlspecialchars($_POST['month'])); // 8 = aug 9 = sep
$day   = mysql_real_escape_string(htmlspecialchars($_POST['day'])); // day 1-30 on month
$year  = mysql_real_escape_string(htmlspecialchars($_POST['year'])); // year
// stick those into login_users table


// start the maininfo collecter

$username = $_SESSION['username'];
$per1name = mysql_real_escape_string(htmlspecialchars($_POST['class']));
$per1time1 = mysql_real_escape_string(htmlspecialchars($_POST['timestart'])); 
$per1time2 = mysql_real_escape_string(htmlspecialchars($_POST['timeend'])); 
$per2name = mysql_real_escape_string(htmlspecialchars($_POST['class2']));
$per2time1 = mysql_real_escape_string(htmlspecialchars($_POST['timestart2'])); 
$per2time2 = mysql_real_escape_string(htmlspecialchars($_POST['timeend2'])); 
$per3name = mysql_real_escape_string(htmlspecialchars($_POST['class3']));
$per3time1 = mysql_real_escape_string(htmlspecialchars($_POST['timestart3'])); 
$per3time2 = mysql_real_escape_string(htmlspecialchars($_POST['timeend3'])); 
$per4name = mysql_real_escape_string(htmlspecialchars($_POST['class4']));
$per4time1 = mysql_real_escape_string(htmlspecialchars($_POST['timestart4'])); 
$per4time2 = mysql_real_escape_string(htmlspecialchars($_POST['timeend4'])); 
$per5name = mysql_real_escape_string(htmlspecialchars($_POST['class5']));
$per5time1 = mysql_real_escape_string(htmlspecialchars($_POST['timestart5'])); 
$per5time2 = mysql_real_escape_string(htmlspecialchars($_POST['timeend5'])); 
$per6name = mysql_real_escape_string(htmlspecialchars($_POST['class6']));
$per6time1 = mysql_real_escape_string(htmlspecialchars($_POST['timestart6'])); 
$per6time2 = mysql_real_escape_string(htmlspecialchars($_POST['timeend6'])); 
$per7name = mysql_real_escape_string(htmlspecialchars($_POST['class7']));
$per7time1 = mysql_real_escape_string(htmlspecialchars($_POST['timestart7'])); 
$per7time2 = mysql_real_escape_string(htmlspecialchars($_POST['timeend7'])); 
$per8name = mysql_real_escape_string(htmlspecialchars($_POST['class8']));
$per8time1 = mysql_real_escape_string(htmlspecialchars($_POST['timestart8'])); 
$per8time2 = mysql_real_escape_string(htmlspecialchars($_POST['timeend8'])); 
$per9name = mysql_real_escape_string(htmlspecialchars($_POST['class9']));
$per9time1 = mysql_real_escape_string(htmlspecialchars($_POST['timestart9'])); 
$per9time2 = mysql_real_escape_string(htmlspecialchars($_POST['timeend9'])); 

$per10name = mysql_real_escape_string(htmlspecialchars($_POST['class10']));
$per10time1 = mysql_real_escape_string(htmlspecialchars($_POST['timestart10'])); 
$per10time2 = mysql_real_escape_string(htmlspecialchars($_POST['timeend10'])); 
$per11name = mysql_real_escape_string(htmlspecialchars($_POST['class11']));
$per11time1 = mysql_real_escape_string(htmlspecialchars($_POST['timestart11'])); 
$per11time2 = mysql_real_escape_string(htmlspecialchars($_POST['timeend11'])); 
$per12name = mysql_real_escape_string(htmlspecialchars($_POST['class12']));
$per12time1 = mysql_real_escape_string(htmlspecialchars($_POST['timestart12'])); 
$per12time2 = mysql_real_escape_string(htmlspecialchars($_POST['timeend12'])); 
$per13name = mysql_real_escape_string(htmlspecialchars($_POST['class13']));
$per13time1 = mysql_real_escape_string(htmlspecialchars($_POST['timestart13'])); 
$per13time2 = mysql_real_escape_string(htmlspecialchars($_POST['timeend13'])); 
$per14name = mysql_real_escape_string(htmlspecialchars($_POST['class14']));
$per14time1 = mysql_real_escape_string(htmlspecialchars($_POST['timestart14'])); 
$per14time2 = mysql_real_escape_string(htmlspecialchars($_POST['timeend14'])); 
$per15name = mysql_real_escape_string(htmlspecialchars($_POST['class15']));
$per15time1 = mysql_real_escape_string(htmlspecialchars($_POST['timestart15'])); 
$per15time2 = mysql_real_escape_string(htmlspecialchars($_POST['timeend15'])); 
$bk1 = mysql_real_escape_string(htmlspecialchars($_POST['bk1']));
$bk2 = mysql_real_escape_string(htmlspecialchars($_POST['bk2']));
$bk3 = mysql_real_escape_string(htmlspecialchars($_POST['bk3']));
$bk4 = mysql_real_escape_string(htmlspecialchars($_POST['bk4']));
$bk5 = mysql_real_escape_string(htmlspecialchars($_POST['bk5']));
$bk6 = mysql_real_escape_string(htmlspecialchars($_POST['bk6']));
$bk7 = mysql_real_escape_string(htmlspecialchars($_POST['bk7']));
$bk8 = mysql_real_escape_string(htmlspecialchars($_POST['bk8']));
$bk9 = mysql_real_escape_string(htmlspecialchars($_POST['bk9']));

?>
<?php

include("inc/sv.php");

?>
<?php

// end the data collection

$sql = "
INSERT INTO main (username, per1name
 , per1time1, per1time2
, per2name
, per2time1
, per2time2
, per3name
, per3time1
, per3time2
, per4name
, per4time1
, per4time2
, per5name
, per5time1
, per5time2
, per6name
, per6time1
, per6time2
, per7name
, per7time1
, per7time2
, per8name
, per8time1
, per8time2
, per9name
, per9time1
, per9time2 
, bk1
, bk2 
, bk3 
, bk4 
, bk5 
, bk6 
, bk7 
, bk8 
, bk9 
, per10name
, per10time1
, per10time2
, per11name
, per11time1
, per11time2
, per12name
, per12time1
, per12time2
, per13name
, per13time1
, per13time2
, per14name
, per14time1
, per14time2
, per15name
, per15time1
, per15time2
)

VALUES

('$username', '$per1name'
 , '$per1time1', '$per1time2'
, '$per2name'
, '$per2time1'
, '$per2time2'
, '$per3name'
, '$per3time1'
, '$per3time2'
, '$per4name'
, '$per4time1'
, '$per4time2'
, '$per5name'
, '$per5time1'
, '$per5time2'
, '$per6name'
, '$per6time1'
, '$per6time2'
, '$per7name'
, '$per7time1'
, '$per7time2'
, '$per8name'
, '$per8time1'
, '$per8time2'
, '$per9name'
, '$per9time1'
, '$per9time2' 
, '$bk1'
, '$bk2'
, '$bk3'
, '$bk4'
, '$bk5'
, '$bk6'
, '$bk7'
, '$bk8'
, '$bk9'
, '$per10name'
, '$per10time1'
, '$per10time2'
, '$per11name'
, '$per11time1'
, '$per11time2'
, '$per12name'
, '$per12time1'
, '$per12time2'
, '$per13name'
, '$per13time1'
, '$per13time2'
, '$per14name'
, '$per14time1'
, '$per14time2'
, '$per15name'
, '$per15time1'
, '$per15time2'  
)
";

$sql3 = "DELETE FROM main where username = '$username' "; 

// execute $sql to setup book
// execute $sql2 to disarm blocker

$sql2 = " UPDATE login_users set regs = 1, year = '$year', day = '$day',  week = '$vv', month = '$month' where username = '$username' "; 

$con = mysql_connect($host, $user, $pass)
  or die("Couldn't connect to SQL Server on HeroGaming"); 
mysql_select_db($database, $con);

If(!mysql_query($sql3))
 {
 $message  = '<b>Var One:</b><br>' . mysql_error() . '<br><br>';
 die($message);
 } 
 
If(!mysql_query($sql))
 {
 $message  = '<b>Var One:</b><br>' . mysql_error() . '<br><br>';
 die($message);
 } 
 
 
If(!mysql_query($sql2))
 {
 $message  = '<b>Var Two:</b><br>' . mysql_error() . '<br><br>';
 die($message);
 }
	if($_POST['use15'] == "1") 
	 {
	 $_SESSION['use15'] = 1;
	 $user = $_SESSION['username'];
	 $sqlss = "UPDATE login_users set use15 = 1 where username = '$user' ";
	 mysql_query($sqlss);
	 } else 
	 {
	 $_SESSION['use15'] = 0;
	 $user = $_SESSION['username'];
	 $sqlss = "UPDATE login_users set use15 = 0 where username = '$user' ";
	 mysql_query($sqlss);
	 }
echo "Your book has been setup! Enjoy your planbook";
echo "<br> <a href=members.php?op=home>Click here to go to the main members area </a>";
$_SESSION['regs']     = 1;
$_SESSION['month']    = $month;
// $_SESSION['year']     = $vv;
$_SESSION['myint']    = $vv;
$_SESSION['year']     = $year;
$_SESSION['day']      = $day;
?>
