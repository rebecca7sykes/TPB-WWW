<?php
if(isset($_POST['loginid']))
 { 
                      
					  // form data 
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
					  $day   = date("Y-m-d", strtotime("+1 years"));
					  // generate order-ids
					  function gen($length)
						{
						$characters = "0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ";
						$string = "";    
						for ($p = 0; $p < $length; $p++) {
							$string .= $characters[mt_rand(0, strlen($characters))];
						}
						return $string;
					   }
						$oid = gen(4) . "-" . gen(4) . "-" . gen(4) . "-" . gen(4) . "-" . gen(4);
					  
					  /* Begin Card Check */	  
					  
					  // lphp library
					  include("inc/lphp.php");	 
					  $mylphp                  = new lphp;
                      // gateway connection					  
					  $myorder["host"]         = "secure.linkpt.net";
					  $myorder["port"]         = "1129";
					  $myorder["keyfile"]      = "1001278116.pem";  // Change this to the name and location of your certificate file 
					  $myorder["configfile"]   = "1001278116";  //  Change this to your store number                          
					  // pass over info?
					  $myorder["name"]     = $fname . "//UserID:" . $loginid;
				      $myorder["company"]  = $posit;
				      $myorder["state"]    = $state;
					  $myorder["address1"] = $st;
					  $myorder["city"]     = $city;
					  $myorder["email"]    = $email;
					  $myorder["zip"]      = $zip;
					  $myorder["oid"]      = $oid;
					  $myorder["phone"]    = $phone;
					  // types and other
					  $myorder["ordertype"]    = "SALE";
					  $myorder["result"]       = "LIVE";  //  For a test, set result to GOOD, DECLINE, or DUPLICATE
					  // card information
					  $myorder["cardnumber"]   = $_POST['cardnum'];
					  $myorder["cardexpmonth"] = $_POST['cardexpm'];
					  $myorder["cardexpyear"]  = $_POST['cardexpy'];
					  $myorder["cvmindicator"] = "PROVIDED";
					  $myorder["cvmvalue"]     = $_POST['cvv'];
					 
					  //price 
					  if($_GET['a'] == "10off") // if they have 10 off
					  { 
					  $myorder["chargetotal"] = "9.95"; // charge 9.95 
					  } else        // else 
					  {
					  $myorder["chargetotal"]  = "19.95"; // charge 19.95 ..
					  }
					  $ctotal                  = $myorder["chargetotal"];
					  // hook & get results
					  $result = $mylphp->curl_process($myorder);  // use curl methods
					  if ($result["r_approved"] != "APPROVED") 
					  { 
					     echo "Sorry! The credit card information you have entered is not valid.</div>";
					  } else
					  { // register them
					    //hash
					  $con = mysql_connect($host, $user, $pass) or die("Can not connect to SQL Server");
					  mysql_select_db($database, $con); //database connection
					  // register query
				  	  $sql1  = " INSERT INTO login_users 
                      (username, password, fullname, email, expireon, pcode, street, zipcode, city, state, posit, phone)
                      VALUES
                      ('$logid', '$logpw', '$fname', '$email', '$day', '$promo', '$st', '$zip', '$city', '$state', '$posit', '$phone') ";
					  mysql_query($sql1) or die(mysql_error());
					  $sql2 = "INSERT INTO orderids (orderid, user) VALUES ('$ordernum', '$logid') ";
					  mysql_query($sql2);
						 echo "Thank you, your payment has been received. A confirmation email will be sent to you shortly.<br>";
						 echo "Please check your <b>junk</b> mail folder if confirmation does not appear immediaty in your inbox.<br>";
						 echo "You have been registered! Please log-in and enjoy TeacherPlanBook.com!<br>---------------------------------------------------------<br>";
						 //start emails							 
						$to       = $email;
						$subject  = "TeacherPlanBook Confirmation";
						$headers  = 'MIME-Version: 1.0' . "\r\n";
						$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
						$headers .= 'From: Teacher PlanBook <noreply@teacherplanbook.com>' . "\r\n";
						$ms       = "
						Dear " . $fname . ", <br>
						Your order has completed, here are the following details.<br>
						---------------------------------------------------------<br>
						<table border=0>
						<tr><td>Login ID:</td><td>" . $logid . "</td></tr>
						<tr><td>Full Name:</td><td>" . $fname . "</td></tr>
						<tr><td>Position in Education:</td><td>" . $posit . "</td></tr>
						<tr><td>Street Address:</td><td>" . $st . "</td></tr>
						<tr><td>State:</td><td>" . $state . "</td></tr>
						<tr><td>City:</td><td>" . $city . "</td></tr>
						<tr><td>Zip Code:</td><td>" . $zip . "</td></tr>
						<tr><td>Phone:</td><td>" . $phone . "</td></tr>
						<tr><td>Payment Amount:</td><td>" . $ctotal . " </td></tr>
						<tr><td>Order ID:</td><td>" . $ordernum . "</td></tr>
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
 } else
 {
   echo "Please fill in all the fields necessary </div>";
 }
 echo "</div>";
 include("inc/lefthome.php");
?>