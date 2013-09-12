
<?php
if(!isset($_POST['loginid']))
{ 
echo
"
<font size=4 color=#3A6A9D> Register </font><br><br>
New members must register for this service on this page<br> 
<form action=index.php?op=register method=post>
<table border=0>
<tr><td>Login ID</td><td><input type=text name=loginid></td></tr>
<tr><td>Password</td><td><input type=password name=password></td></tr>
<tr><td>Confirm Password</td><td><input type=password name=cpassword></td></tr>
<tr><td>Full Name</td><td><input type=text name=fullname></td></tr>
<tr><td>Position in Education</td><td><input type=text name=posit></td></tr>
<tr><td>Street Address</td><td><input type=text name=streetaddress></td></tr>
<tr><td>City</td><td><input type=text name=city></td></tr>
<tr><td>State</td><td>";

echo "<select name=\"state\">\n"; 
echo "	<option value=\"AL\">Alabama</option>\n"; 
echo "	<option value=\"AK\">Alaska</option>\n"; 
echo "	<option value=\"AZ\">Arizona</option>\n"; 
echo "	<option value=\"AR\">Arkansas</option>\n"; 
echo "	<option value=\"CA\">California</option>\n"; 
echo "	<option value=\"CO\">Colorado</option>\n"; 
echo "	<option value=\"CT\">Connecticut</option>\n"; 
echo "	<option value=\"DE\">Delaware</option>\n"; 
echo "	<option value=\"DC\">District of Columbia</option>\n"; 
echo "	<option value=\"FL\">Florida</option>\n"; 
echo "	<option value=\"GA\">Georgia</option>\n"; 
echo "	<option value=\"HI\">Hawaii</option>\n"; 
echo "	<option value=\"ID\">Idaho</option>\n"; 
echo "	<option value=\"IL\">Illinois</option>\n"; 
echo "	<option value=\"IN\">Indiana</option>\n"; 
echo "	<option value=\"IA\">Iowa</option>\n"; 
echo "	<option value=\"KS\">Kansas</option>\n"; 
echo "	<option value=\"KY\">Kentucky</option>\n"; 
echo "	<option value=\"LA\">Louisiana</option>\n"; 
echo "	<option value=\"ME\">Maine</option>\n"; 
echo "	<option value=\"MD\">Maryland</option>\n"; 
echo "	<option value=\"MA\">Massachusetts</option>\n"; 
echo "	<option value=\"MI\">Michigan</option>\n"; 
echo "	<option value=\"MN\">Minnesota</option>\n"; 
echo "	<option value=\"MS\">Mississippi</option>\n"; 
echo "	<option value=\"MO\">Missouri</option>\n"; 
echo "	<option value=\"MT\">Montana</option>\n"; 
echo "	<option value=\"NE\">Nebraska</option>\n"; 
echo "	<option value=\"NV\">Nevada</option>\n"; 
echo "	<option value=\"NH\">New Hampshire</option>\n"; 
echo "	<option value=\"NJ\">New Jersey</option>\n"; 
echo "	<option value=\"NM\">New Mexico</option>\n"; 
echo "	<option value=\"NY\">New York</option>\n"; 
echo "	<option value=\"NC\">North Carolina</option>\n"; 
echo "	<option value=\"ND\">North Dakota</option>\n"; 
echo "	<option value=\"OH\">Ohio</option>\n"; 
echo "	<option value=\"OK\">Oklahoma</option>\n"; 
echo "	<option value=\"OR\">Oregon</option>\n"; 
echo "	<option value=\"PA\">Pennsylvania</option>\n"; 
echo "	<option value=\"RI\">Rhode Island</option>\n"; 
echo "	<option value=\"SC\">South Carolina</option>\n"; 
echo "	<option value=\"SD\">South Dakota</option>\n"; 
echo "	<option value=\"TN\">Tennessee</option>\n"; 
echo "	<option value=\"TX\">Texas</option>\n"; 
echo "	<option value=\"UT\">Utah</option>\n"; 
echo "	<option value=\"VT\">Vermont</option>\n"; 
echo "	<option value=\"VA\">Virginia</option>\n"; 
echo "	<option value=\"WA\">Washington</option>\n"; 
echo "	<option value=\"WV\">West Virginia</option>\n"; 
echo "	<option value=\"WI\">Wisconsin</option>\n"; 
echo "	<option value=\"WY\">Wyoming</option>\n"; 
echo "</select></td></tr>\n";
echo 
"
<tr><td>Zip Code</td><td><input type=text name=zip></td></tr>
<tr><td>Phone(Optional)</td><td><input type=text name=phone></td></tr>
<tr><td>E-Mail</td><td><input type=text name=email></td></tr>
<!--<tr><td>Promo Code</td><td><input type=text name=promocode></td></tr>-->
<tr><td>          </td><td><input type=submit value=Submit></td></tr>
</form>
</table>
<br>
<!--<font color=red>You can cancel anytime within 30 days for a full refund.</font>-->
";
} else 
{
	if(isset($_GET['x']))
	   {
	   if($_GET['x'] == 1)
		{
	   unset($_POST['loginid']);
	   header('Location: https://teacherplanbook.com/index.php?op=register&x=1');
	   exit();
		}
	   }
$con          = mysql_connect($host, $user, $pass) or die("Can not connect to SQL Server");
                mysql_select_db($database, $con); //database connection
				If($_POST['password'] <> $_POST['cpassword'])
				    {
					   die("The password did not match the confirmation password.</div>");
					} // check if pass match
$u            = mysql_real_escape_string(htmlspecialchars($_POST['loginid']));
$sql          = "SELECT * FROM login_users where username = '$u' LIMIT 1";
$res          = mysql_query($sql); $count = mysql_num_rows($res);
                If($count != 0) 
				   { die("The Login ID is already taken please select another one</div>");
				   } // check if id is taken
// check promo codes
//$p            = mysql_real_escape_string(htmlspecialchars($_POST['promocode']));
$p = "FREETPB";
$q            = "SELECT * FROM pcode where promocode = '$p' and timesused < 2000 ";
$r            = mysql_query($q); $c = mysql_num_rows($r);
				if($c != 0)
				  {   
				    while($row = mysql_fetch_array($r))
					  {
					    $strtotime = $row['val'];
					  }
				      $logid = htmlspecialchars($_POST['loginid']);
					  $logpw = htmlspecialchars($_POST['password']);
					  $fname = htmlspecialchars($_POST['fullname']);
					  $posit = htmlspecialchars($_POST['posit']);
					  $email = htmlspecialchars($_POST['email']);
					  $promo = htmlspecialchars($_POST['promocode']);
					  $st    = htmlspecialchars($_POST['streetaddress']);
					  $city  = htmlspecialchars($_POST['city']);
					  $zip   = htmlspecialchars($_POST['zip']);
					  $state = htmlspecialchars($_POST['state']);
					  $phone = htmlspecialchars($_POST['phone']);
					  $day = date("Y-m-d", strtotime($strtotime));
				  	  $sql1 = " INSERT INTO login_users 
         (username, password, fullname, email, expireon, pcode, street, zipcode, city, state, posit, phone)
         VALUES
         ('$logid', '$logpw', '$fname', '$email', '$day', '$promo', '$st', '$zip', '$city', '$state', '$posit', '$phone') ";
				     
					  $ql2 = "UPDATE pcode SET timesused = timesused + 1 WHERE promocode = '$p' "; 
				     mysql_query($sql1); mysql_query($ql2);
					  echo "You have been registered!</div>"; 
/* end promo code checker	*/			  
                   }  else  {   // start gateway
				      echo "<font size=4 color=#3A6A9D> Make Payment</font><br><br>";
				      echo "Please enter credit card information to continue";
					  If($p == "10off") { $a = "&a=10off"; } else { $a = ""; } // 10 off code.
				      echo "<form action=index.php?op=gateway" . $a . " method=post>";
					  echo "<table border=0>";
					  echo "<input type=hidden name=loginid value=\"" . $_POST['loginid'] . "\">";
				      echo "<input type=hidden name=password value=\"" . $_POST['password'] . "\">";
				      echo "<input type=hidden name=fullname value=\"" . $_POST['fullname'] . "\">";
				      echo "<input type=hidden name=email value=\"" . $_POST['email'] . "\">";
				      echo "<input type=hidden name=streetaddress value=\"" . $_POST['streetaddress'] . "\">";
				      echo "<input type=hidden name=city value=\"" . $_POST['city'] . "\">";
				      echo "<input type=hidden name=zip value=\"" . $_POST['zip'] . "\">";
					  echo "<input type=hidden name=state value=\"" . $_POST['state'] . "\">";
					  echo "<input type=hidden name=posit value=\"" . $_POST['posit'] . "\">";
					  echo "<input type=hidden name=phone value=\"" . $_POST['phone'] . "\">";
					  echo "<tr><td>Card Number:</td><td><input type=text name=cardnum></td></tr>";
					  echo "<tr><td>Card Expiration:</td><td><select name=cardexpm>";
					  $i   = 1;
					  while($i != 13)
					     {
						   echo "<option>" . $i . "</option>";
						   $i++;
						 } 
					  echo "</select> / ";
					  echo "<select name=cardexpy>";
					  $int = 1;
					  while($int != 32) 
					     {
					       echo "<option>" . $int . "</option>";
						   $int++;
					     } 
					  echo "</select></td></tr>";
					  echo "<tr><td>Card Security Code</td><td><input type=text name=cvv></td></tr>";
					  echo "<tr><td> </td><td><input type=submit value=Submit></td></tr>";
					  echo "</table></form>";
					  echo "<br>";
					  echo "The information provided is encrypted to protect against fraud.<br>";
				      echo "Please make sure the following information is correct before continuing:<br>";
					  echo "-----------------------------------------------------------------------";
					  $logid = htmlspecialchars($_POST['loginid']);
					  $logpw = htmlspecialchars($_POST['password']);
					  $fname = htmlspecialchars($_POST['fullname']);
					  $email = htmlspecialchars($_POST['email']);
					  $promo = htmlspecialchars($_POST['promocode']);
					  $st    = htmlspecialchars($_POST['streetaddress']);
					  $city  = htmlspecialchars($_POST['city']);
					  $zip   = htmlspecialchars($_POST['zip']);
					  $state = htmlspecialchars($_POST['state']);
					  $posit = htmlspecialchars($_POST['posit']);
					  $phone = htmlspecialchars($_POST['phone']);
					  echo "<table border=0>
							<tr><td>Login ID:</td><td>" . $logid . "</td></tr>
							<tr><td>E-mail:</td><td>" . $email . "</td></tr>
							<tr><td>Full Name:</td><td>" . $fname . "</td></tr>
							<tr><td>Position in Education:</td><td>" . $posit . "</td></tr>
							<tr><td>Street Address:</td><td>" . $st . "</td></tr>
							<tr><td>State:</td><td>" . $state . "</td></tr>
							<tr><td>City:</td><td>" . $city . "</td></tr>
							<tr><td>Zip Code:</td><td>" . $zip . "</td></tr>
							<tr><td>Phone:</td><td>" . $phone . "</td></tr>
							<tr><td>Payment Amount:</td><td>"; 
							if($p == "10off") { echo "9.95"; } else { echo "19.95"; } 
				     echo   "</td></tr></table>";

				   }
}
echo "</div>";
include("inc/lefthome.php");
?>