<?php
$host = "localhost";
$user = "teacherplan";
$pass = "10773208";
$database = "teacherplan_tpbsadat";
	//Connect to MySQL Server
mysql_connect($host, $user, $pass);
	//Select Database
mysql_select_db($database) or die(mysql_error());
	// Retrieve data from Query String
$age = $_GET['age'];
	// Escape User Input to help prevent SQL Injection
$age = mysql_real_escape_string($age);
	//build query
$query = "SELECT DISTINCT content FROM planbook WHERE content LIKE '%$age%' and share <> 0";
	//Execute query
$qry_result = mysql_query($query) or die(mysql_error());

	//Build Result String
$display_string = "<table>";
$display_string .= "<tr>";
$display_string .= "<th>Results</th>";
$display_string .= "</tr>";

	// Insert a new row in the table for each person returned
while($row = mysql_fetch_array($qry_result)){
	$display_string .= "<tr>";
	$display_string .= "<td>$row[content]</td>";
	$display_string .= "</tr>";
	
}
$display_string .= "</table>";
echo $display_string;
?>
