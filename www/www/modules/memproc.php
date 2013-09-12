<?php
$myusername = htmlspecialchars($_POST['hofid']);
$mypassword = htmlspecialchars($_POST['hofpw']);
$con = mysql_connect($host, $user, $pass)
  or die("Couldn't connect to SQL Server on HeroGaming"); 
mysql_select_db($database, $con);
$sql = " SELECT * FROM login_users where username = '$myusername' and password = '$mypassword'";
$result = mysql_query($sql);
$count = mysql_num_rows($result);
if($count == 1) 
{
  while ($row = mysql_fetch_array($result)) 
  { 
  $_SESSION['id']        = $row['id']; 
  $_SESSION['myint']     = $row['week'];
  $_SESSION['email']     = $row['email'];
  $_SESSION['fullname']  = $row['fullname']; 
  $_SESSION['regs']      = $row['regs'];
  $_SESSION['month']     = $row['month'];
  $_SESSION['year']      = $row['year'];
  $_SESSION['admin']     = $row['admin'];
  $_SESSION['expireon']  = $row['expireon']; 
  $_SESSION['guestlock'] = $row['guestlock']; 
  $_SESSION['day']       = $row['day']; 
  $_SESSION['pcode']     = $row['pcode'];
  $_SESSION['city']      = $row['city'];
  $_SESSION['street']    = $row['street'];
  $_SESSION['zipcode']   = $row['zipcode'];
  $_SESSION['posit']     = $row['posit'];
  $_SESSION['phone']     = $row['phone'];
  $_SESSION['use15']     = $row['use15'];
  } 
  $_SESSION['guest']    = 2; 
  $_SESSION['username'] = $myusername;
  $_SESSION['password'] = $mypassword;
  ?><?php include("inc/cookie.php");
  ?><?php
  header('Location:members.php?op=home');
 echo "<a href=members.php?op=home> Welcome! Click here to go to the members area!</a><br/><br/><b>If this is your first time using Teacher Plan Book, please <a href='members.php?op=setup' style='text-decoration:underline;'>Setup your Plan Book</a></b>"; 
} else { echo "Wrong username or password!"; }
  ?>
  