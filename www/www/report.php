<?php
$i = 0; 
/* Enable $i = 1 to allow user report to be sent! */
#$i = 1; #
/* Enable $i = 1 to allow user report to be sent! */
$u = "
<style type=\"text/css\">
table.gridtable {
	font-family: verdana,arial,sans-serif;
	font-size:11px;
	color:#333333;
	border-width: 1px;
	border-color: #666666;
	border-collapse: collapse;
}
table.gridtable th {
	border-width: 1px;
	padding: 8px;
	border-style: solid;
	border-color: #666666;
	background-color: #dedede;
}
table.gridtable td {
	border-width: 1px;
	padding: 8px;
	border-style: solid;
	border-color: #666666;
	background-color: #ffffff;
}
</style>
<table class=\"gridtable\">
<tr>
<th>ID</th>
<th>Username</th>
<th>Full Name</th>
<th>Position In Education</th>
<th>E-mail</th>
<th>Expires On</th>
<th>Promo Code Used</th>
<th>Street Address</th>
<th>City</th>
<th>Zip Code</th>
<th>State</th>
<th>Phone</th>
</tr>
"; ?>
<?php
include("mysqlinfo.php"); 
$con    = mysql_connect($host,$user,$pass) or die("CAN NOT CONNECT TO SQL SERVER"); 
          mysql_select_db($database,$con);
$sql    = "SELECT * FROM login_users";
$result = mysql_query($sql); 
          while($row = mysql_fetch_array($result))
		    {
			  $u .=  "<tr>";
			  $u .=  "<td> " . $row['id']       . "</td>";
			  $u .=  "<td> " . $row['username'] . "</td>";
			  $u .=  "<td> " . $row['fullname'] . "</td>";
			  $u .=  "<td> " . $row['posit']    . "</td>";
			  $u .=  "<td> " . $row['email']    . "</td>";
			  $u .= "<td> " . $row['expireon'] . "</td>";
			  $u .= "<td> " . $row['pcode']    . "</td>";
			  $u .= "<td> " . $row['street']   . "</td>";
			  $u .= "<td> " . $row['city']     . "</td>";
			  $u .= "<td> " . $row['zipcode']  . "</td>";
			  $u .= "<td> " . $row['state']    . "</td>";
			  $u .= "<td> " . $row['phone']    . "</td>";
			  $u .= "</tr>";
			} $u .= "</table>";
			
			if($i == 1)
			 {
						$to       = "jcondrill@hotmail.com";
						$to2      = "jcondrill@teacherplanbook.com";
						$subject  = "TeacherPlanBook User Reports!";
						$headers  = 'MIME-Version: 1.0' . "\r\n";
						$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
						$headers .= 'From: Teacher PlanBook <noreply@teacherplanbook.com>' . "\r\n";
					//	mail($to, $subject, $u, $headers);
					//	mail($to2, $subject, $u, $headers);
						mail("shaikat11@hotmail.com, jcondrill@teacherplanbook.com", $subject, $u, $headers);
						echo "Sent!";
						}
						
?>