<?php

include("inc/init.php");

?>

<?php


?>
<?php

if(isset($_POST['opt']))
{
foreach($_POST['opt'] as $extra)
{

$con = mysql_connect($host, $user, $pass)
       or die("Can not connect to SQL Server");

mysql_select_db($database, $con);

$username = $_SESSION['username'];
$week     = mysql_real_escape_string(htmlspecialchars($_POST['week']));
$period   = mysql_real_escape_string(htmlspecialchars($_POST['period']));
$monday   = mysql_real_escape_string(htmlspecialchars($_POST['monday']));
$tuesday  = mysql_real_escape_string(htmlspecialchars($_POST['tuesday']));
$wednesday = mysql_real_escape_string(htmlspecialchars($_POST['wednesday']));
$thursday = mysql_real_escape_string(htmlspecialchars($_POST['thursday']));
$friday   = mysql_real_escape_string(htmlspecialchars($_POST['friday']));
$off = "<font color=red><b>School Closed!</b><br></font>";
if($_POST['monoff'] == "true") 
 {
  $monday = $off . $monday;
 }
if($_POST['tueoff'] == "true")
 {
  $tuesday = $off . $tuesday;
 }
if($_POST['wedoff'] == "true")
 {
  $wednesday = $off . $wednesday;
 }
 if($_POST['thuoff'] == "true")
 {
  $thursday = $off . $thursday;
 }
 if($_POST['frioff'] == "true")
 {
  $friday = $off . $friday;
 }
$mont = mysql_real_escape_string(htmlspecialchars($_POST['mont']));
$tuet = mysql_real_escape_string(htmlspecialchars($_POST['tuet']));
$wedt = mysql_real_escape_string(htmlspecialchars($_POST['wedt']));
$thut = mysql_real_escape_string(htmlspecialchars($_POST['thut']));
$frit = mysql_real_escape_string(htmlspecialchars($_POST['frit']));
$note = mysql_real_escape_string(htmlspecialchars($_POST['notes']));
$selid1 = mysql_real_escape_string(htmlspecialchars($_POST['selid1']));
$selid2 = mysql_real_escape_string(htmlspecialchars($_POST['selid2']));
$selid3 = mysql_real_escape_string(htmlspecialchars($_POST['selid3']));
$selid4 = mysql_real_escape_string(htmlspecialchars($_POST['selid4']));
$selid5 = mysql_real_escape_string(htmlspecialchars($_POST['selid5']));
$bktxt1 = mysql_real_escape_string(htmlspecialchars($_POST['bktxt1']));
$bktxt2 = mysql_real_escape_string(htmlspecialchars($_POST['bktxt2']));
$bktxt3 = mysql_real_escape_string(htmlspecialchars($_POST['bktxt3']));
$bktxt4 = mysql_real_escape_string(htmlspecialchars($_POST['bktxt4']));
$bktxt5 = mysql_real_escape_string(htmlspecialchars($_POST['bktxt5']));

    $aD1 = $_POST['stand1'];
	If (!empty($aD1))
	{
    $N = count($aD1);
    $s1 = "Standards #: ";
    for($i=0; $i < $N; $i++)
    {
      $s1 .= $aD1[$i];
	  $s1 .= ",";
    }
	}
	   $aD2 = $_POST['stand2'];
	If (!empty($aD2))
	{
    $N = count($aD2);
    $s2 = "Standards #: ";
    for($i=0; $i < $N; $i++)
    {
      $s2 .= $aD2[$i];
	  $s2 .= ",";
    }
	}
	
	   $aD3 = $_POST['stand3'];
	If (!empty($aD3))
	{
    $N = count($aD3);
    $s3 = "Standards #: ";
    for($i=0; $i < $N; $i++)
    {
      $s3 .= $aD3[$i];
	  $s3 .= ",";
    }
	}
	
	   $aD4 = $_POST['stand4'];
	If (!empty($aD4))
	{
    $N = count($aD4);
    $s4 = "Standards #: ";
    for($i=0; $i < $N; $i++)
    {
      $s4 .= $aD4[$i];
	  $s4 .= ",";
    }
	}
	
	   $aD5 = $_POST['stand5'];
	If (!empty($aD5))
	{
    $N = count($aD5);
    $s5 = "Standards #: ";
    for($i=0; $i < $N; $i++)
    {
      $s5 .= $aD5[$i];
	  $s5 .= ",";
    }
	}
	
	
$stand1 = mysql_real_escape_string(htmlspecialchars($s1));
$stand2 = mysql_real_escape_string(htmlspecialchars($s2));
$stand3 = mysql_real_escape_string(htmlspecialchars($s3));
$stand4 = mysql_real_escape_string(htmlspecialchars($s4));
$stand5 = mysql_real_escape_string(htmlspecialchars($s5));

 $sql3 = "DELETE From plotter where weeknum = '$week' and period = '$extra' and owner = '$username' ";

 $sql2 = " INSERT INTO plotter (weeknum, period, mon, tue, wed, thu, fri, note, owner, mont, tuet, wedt, thut, frit, selid1, selid2, selid3, selid4, selid5, bktxt1, bktxt2, bktxt3, bktxt4, bktxt5, stand1, stand2, stand3, stand4, stand5) 
           VALUES
           ('$week', '$extra', '$monday', '$tuesday', '$wednesday', '$thursday', '$friday', '$note', '$username', '$mont', '$tuet', '$wedt', '$thut', '$frit', '$selid1', '$selid2', '$selid3', '$selid4', '$selid5', '$bktxt1', '$bktxt2', '$bktxt3', '$bktxt4', '$bktxt5', '$stand1', '$stand2', '$stand3', '$stand4', '$stand5') ";
 
 mysql_query($sql3) or die(mysql_error());
 mysql_query($sql2) or die(mysql_error());
 
}
}
  echo "Your changes in your planbook have been made!<br> Enjoy"; 
 echo "<br>"; 
 echo "Redirecting to the new page...<a href=members.php?op=dayplotter&week="; echo "$week"; echo "> click here if it does not...</a>"; 
 echo "<script type=\"text/javascript\">
<!--
window.location = \"members.php?op=dayplotter&week=" . $week . "\"
//-->
</script>";
?>

