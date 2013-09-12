<?php
$myusername = mysql_real_escape_string(htmlspecialchars($_POST['hofid']));
  $con = mysql_connect($host, $user, $pass)
  or die("Couldn't connect to SQL Server on HeroGaming"); 
mysql_select_db($database, $con);
$sql = " SELECT * FROM login_users where id = '$myusername' and guestlock = '0'  ";
$result = mysql_query($sql);
$count = mysql_num_rows($result);
if($count == 1) 
{
  while ($row = mysql_fetch_array($result)) 
  { 
  $_SESSION['id']       = $row['id']; 
  $_SESSION['myint']    = $row['week'];
  $_SESSION['email']    = $row['email'];
  $_SESSION['fullname'] = $row['fullname']; 
  $_SESSION['regs']     = $row['regs'];
  $_SESSION['month']    = $row['month'];
  $_SESSION['year']     = $row['year'];
  $_SESSION['admin']    = $row['admin'];
  $_SESSION['username'] = $row['username'];
  $_SESSION['expireon'] = $row['expireon']; 
  $_SESSION['pcode']    = $row['pcode'];
  $_SESSION['use15']     = $row['use15'];
  } 
  $_SESSION['guest']     = 1; 
  $_SESSION['password'] = $mypassword;
    ?><?php include("inc/cookie.php");
  ?><?php
 //  header('Location:members.php?op=revv')
 echo "<a href='members.php?op=revv'> Welcome! Click here to go to the review page!</a>"; 
} else { echo "This member ID does NOT exist, OR This member might have locked their planbook."; }
?>
  