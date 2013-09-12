<?php

$val = $_GET['sect']; 
$username = $_SESSION['username']; 

?>
<?php

If($val == 0 || $val == 1) 
   {
   
$con = mysql_connect($host, $user, $pass); 
mysql_select_db($database, $con);
$sql = "update login_users set guestlock = '$val' where username = '$username' ";

mysql_query($sql) or die("Error Code: 12737! Contact Staff"); 
  $_SESSION['guestlock'] = $val; 
  
  echo "Your guest-lock status has been updated"; 
 
   } else { 
   
   echo "Exploit detected, contact staff";
   
   }
?>
