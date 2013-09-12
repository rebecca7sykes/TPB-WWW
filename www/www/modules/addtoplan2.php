<?php

include("inc/init.php");

?>
<?php 

include("inc/functions.php");

?>
<?php


if(isset($_POST['opt']))
{
foreach($_POST['opt'] as $extra)
{

$con = mysql_connect($host, $user, $pass) 
       or die("Could not connect to SQL Server"); 
  
mysql_select_db($database, $con);

$week      = mysql_real_escape_string(htmlspecialchars($_POST['week']));
$period    = mysql_real_escape_string(htmlspecialchars($_POST['period']));
$objective = mysql_real_escape_string($_POST['objective']);
$share     = mysql_real_escape_string(htmlspecialchars($_POST['shareopt'])); 
$username  = $_SESSION['username']; 
$sql2 = " DELETE FROM planbook where weeknum = '$week' and period = '$extra' and owner = '$username' ";
$sql3 = " INSERT INTO planbook (weeknum, period, content, owner, share) VALUES ('$week', '$extra', '$objective', '$username', '$share') ";
 mysql_query($sql2);
 mysql_query($sql3); 
}
}
 echo "Your changes in your planbook have been made!<br> Enjoy"; 
 echo "<br>"; 
 echo "Redirecting to the new page...<a href=members.php?op=planbook&week="; echo "$week"; echo "> click here if it does not</a>"; 
 echo "<script type=\"text/javascript\">
<!--
window.location = \"members.php?op=planbook&week=" . $week . "\"
//-->
</script>";
?>
