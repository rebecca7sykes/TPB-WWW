<?php

if(!session_is_registered(username)) 
{
 die("<a href=members.php?op=memhome>You must login! Click here to do it</a>");
}
$userr = $_SESSION['username'];
$curpw = mysql_real_escape_string(htmlspecialchars($_POST['curpw']));
$newpw = mysql_real_escape_string(htmlspecialchars($_POST['newpw']));
$thepw = mysql_real_escape_string(htmlspecialchars($_POST['thepw']));

If ($thepw <> $newpw)
{
echo "The confirm password did not not match the new password";
}

$con = mysql_connect($host, $user, $pass)
  or die("Couldn't connect to SQL Server on HeroGaming"); 
mysql_select_db($database, $con);

$sql = "SELECT * FROM login_users where username = '$userr' and password = '$curpw' ";

$result = mysql_query($sql);
$count = mysql_num_rows($result);

If ($count == 1)
{
$sqls = "UPDATE login_users set password = '$thepw' WHERE username = '$userr' ";
mysql_query($sqls);
echo "Your password has been changed!";
}
else
{
echo "You have entered a incorrect current password";
}

?>