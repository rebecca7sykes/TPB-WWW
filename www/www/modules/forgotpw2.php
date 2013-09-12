<?php
$e  = mysql_real_escape_string($_POST['email']);
$s  = "Your TeacherPlanBook Password";
$h  = 'From: Teacher Planbook <noreply@teacherplanbook.com>' . "\r\n";
/*
-----------------------
var e = e-mail        |
var s = subject       |
----------------------|
var h = headers       |
----------------------|
var r = sql results   |
var c = sql # of row  |
----------------------
*/
$con = mysql_connect($host, $user, $pass) 
       or die("Cannot connect to SQL Server");
	   mysql_Select_db($database, $con);
$sql = "SELECT * FROM login_users where email = '$e' ";
$r   = mysql_query($sql);
$c   = mysql_num_rows($r); 
		If($c == 0)
			{
			echo "No e-mail has been registered to this account"; 
			} 
		else 
			{ 
			echo "Your username(s) and password(s) has been e-mailed to <b>" . $e . 
			     "</b><br>Note: It may be in the <b>junk</b> folder depending on your mail provider."; 
			   while($row = mysql_fetch_array($r))
			          {
					  $m  = "";
					  $m .= "Username: "; 
					  $m .= $row['username'];
					  $m .= "\n";
					  $m .= "Password: ";
					  $m .= $row['password'];
					  mail($e, $s, $m, $h);
					   // mail add $h for header
					  }
			}
?>
