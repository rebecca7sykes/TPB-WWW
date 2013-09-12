<a href="JavaScript:;" onmousedown=
"if 
(document.getElementById('q123').style.display == 'none') 
{document.getElementById('q123').style.display = 'block';} 
else {document.getElementById('q123').style.display = 'none';}">
<b> View members[ADMIN] </b>  

</a>
<div id="q123" style="display:none;" > 
<?php


$con = mysql_connect($host, $user, $pass) 
             or die("Can not connect to SQL Server"); 

mysql_select_db($database, $con); 
 
$sql = "SELECT * FROM login_users"; 
 
$result = mysql_query($sql) or die("Error in Query");
 
$count = mysql_num_rows($result); 

echo "There are "; 

echo "$count";

echo " members registered."; 



?>

</div>

