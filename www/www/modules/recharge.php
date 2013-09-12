<?php

include("inc/init.php");

?>
<?php 

include("inc/functions.php");

?>
Your TeacherPlanBook has expired! <br>
Please re-order for one year to continue using your book.<br>
<br><?php 

$cdate    = date("Y-m-d");
If ($expireon > $cdate) 
 { 
    die("Your book has not been expired yet!");
 }
 
if(!isset($_POST['cardnum'])) 
  {
                      echo "<form action=members.php?op=recharge method=post>";
					  echo "<table border=0>";
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
    } else 
	{					  function gen($length)
						{
						$characters = "0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ";
						$string = "";    
						for ($p = 0; $p < $length; $p++) {
							$string .= $characters[mt_rand(0, strlen($characters))];
						}
						return $string;
					   }
						$oid = gen(4) . "-" . gen(4) . "-" . gen(4) . "-" . gen(4) . "-" . gen(4);
					  
					  include("inc/lphp.php");	 
					  $mylphp                  = new lphp;
                      // gateway connection					  
					  $myorder["host"]         = "secure.linkpt.net";
					  $myorder["port"]         = "1129";
					  $myorder["keyfile"]      = "1001278116.pem";  // Change this to the name and location of your certificate file 
					  $myorder["configfile"]   = "1001278116"; 
					  // pass over info?
					  $myorder["name"]     = $_SESSION['fullname'];
				      $myorder["company"]  = $_SESSION['posit'];
				      $myorder["state"]    = $_SESSION['state'];
					  $myorder["address1"] = $_SESSION['street'];
					  $myorder["city"]     = $_SESSION['city'];
					  $myorder["email"]    = $_SESSION['email'];
					  $myorder["zip"]      = $_SESSION['zipcode'];
					  $myorder["oid"]      = $oid;
					  $myorder["phone"]    = $_SESSION['phone'];
					  // types and other
					  $myorder["ordertype"]    = "SALE";
					  $myorder["result"]       = "LIVE";  //  For a test, set result to GOOD, DECLINE, or DUPLICATE
					  // card information
					  $myorder["cardnumber"]   = $_POST['cardnum'];
					  $myorder["cardexpmonth"] = $_POST['cardexpm'];
					  $myorder["cardexpyear"]  = $_POST['cardexpy'];
					  $myorder["cvmindicator"] = "PROVIDED";
					  $myorder["cvmvalue"]     = $_POST['cvv'];
					  $myorder["chargetotal"]  = "19.95";
					  $ctotal                  = "19.95";
					  
					  if ($result["r_approved"] != "APPROVED") 
					  { 
					     echo "Sorry! The credit card information you have entered is not valid.</div>";
					  } else
					  { 
					    $u = $_SESSION['username']; 
						$day   = date("Y-m-d", strtotime("+1 years"));
						$_SESSION['expireon'] = $day;
						mysql_query(" UPDATE users set expireon = '$day' where username = '$u' ");
					     echo "Thank you, your payment has been received. A confirmation email will be sent to you shortly.<br>";
						 echo "Please check your <b>junk</b> mail folder if confirmation does not appear immediaty in your inbox.<br>";
						 echo "---------------------------------------------------------<br>";
						 //start emails							 
						$to       = $_SESSION['email'];
						$subject  = "TeacherPlanBook Confirmation";
						$headers  = 'MIME-Version: 1.0' . "\r\n";
						$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
						$headers .= 'From: Teacher PlanBook <noreply@teacherplanbook.com>' . "\r\n";
						$ms       = "
						Dear " . $fname . ", <br>
						Your order has completed, here are the following details.<br>
						---------------------------------------------------------<br>
						<table border=0>
						<tr><td>Login ID:</td><td>" . $_SESSION ['username']. "</td></tr>
						<tr><td>Full Name:</td><td>" . $_SESSION['fullname'] . "</td></tr>
						<tr><td>Position in Education:</td><td>" . $_SESSION['posit'] . "</td></tr>
						<tr><td>Street Address:</td><td>" . $_SESSION['street'] . "</td></tr>
						<tr><td>State:</td><td>" . $_SESSION['state'] . "</td></tr>
						<tr><td>City:</td><td>" . $_SESSION['city'] . "</td></tr>
						<tr><td>Zip Code:</td><td>" . $_SESSION ['zipcode'] . "</td></tr>
						<tr><td>Phone:</td><td>" . $_SESSION['phone'] . "</td></tr>
						<tr><td>Payment Amount:</td><td>" . $ctotal . " </td></tr>
						<tr><td>Order ID:</td><td>" . $oid . "</td></tr>
						<tr><td>Todays Date:</td><td>" . date("Y-m-d") . "</td></tr>
						<tr><td>Expiration Date:</td><td>" . $day . "</td></tr>
						</table>
						";
						$msg      = "
						<img src=https://teacherplanbook.com/images/logo.gif><br>" . $ms;
						echo "" . $ms;
						mail($to, $subject, $msg, $headers);
						// end email
					  }
	}
					  ?>