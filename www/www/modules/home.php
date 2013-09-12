
<table border=0>
<tr><td><b>Main Details<b></td><td><?php echo " "; ?></tr></td>
<tr><td><b>Full Name:<b></td><td><?php echo "$ss"; ?></tr></td>
<tr><td><b>User ID:<b></td><td><?php echo "$sv"; ?></tr></td>
<tr><td><b>Member #:<b></td><td><?php echo "$sk"; echo "<b><i> &nbsp; &nbsp; &nbsp; Give your member # to people you wish to login to view your planbook</b></i>" ?></tr></td>
<tr><td><b>Guest Viewer Lock:<b></td><td>
<?php
$var5 = $_SESSION['guestlock']; 
If ($var5 == 0) 
  {
    echo "Off <a href=members.php?op=locks&sect=1> [Click here to lock it] </a>"; 
  } 
If ($var5 == 1)
  {
   echo "On <a href=members.php?op=locks&sect=0> [Click here to unlock it] </a>"; 
  }
?>
</tr></td>
<tr><td><b>Registered E-mail:<b></td><td><?php echo "$sz"; ?></tr></td>
<tr><td><b>Todays Date:<b></td><td><?php echo "$z"; ?>[YYYY-MM-DD]</tr></td>
<tr><td><b>Subscription Expires on:<b></td><td><?php echo "$si"; ?>[YYYY-MM-DD]</tr></td>
</table>
<br><br><br>

<a href="JavaScript:;" onmousedown=
"if 
(document.getElementById('svqq').style.display == 'none') 
{document.getElementById('svqq').style.display = 'block';} 
else {document.getElementById('svqq').style.display = 'none';}">
<b> Change Password </b> </a></p>
<div id="svqq" style="display:none;">You may change your password with this form!<br>
Please remember the password you change it to<br>
<table border=0>
<form action="members.php?op=cpw" method=post><tr><td>Current Password:</td><td><input type="password" name="curpw" /></td></tr><br>
<tr><td>Desired Password:</td><td><input type="password" name="newpw" /></td></tr><br>
<tr><td>Confirm Password:</td><td><input type="password" name="thepw" /></td></tr><br>
<tr><td><input type="Submit" value="Change Password"/></form></td></tr>
</table>
</div>

<br><br>

<a href="JavaScript:;" onmousedown=
"if 
(document.getElementById('svdd').style.display == 'none') 
{document.getElementById('svdd').style.display = 'block';} 
else {document.getElementById('svdd').style.display = 'none';}">
<b> Contact Support </b> </a></p>
<div id="svdd" style="display:none;">
If you are having difficulties, please contact us at <b>support@teacherplanbook.com</b>. <br>
Our support team will get back to you with suggestions as soon as possible<br>
</div>

<br> <br>
<a href="JavaScript:;" onmousedown=
"if 
(document.getElementById('svdsd').style.display == 'none') 
{document.getElementById('svdsd').style.display = 'block';} 
else {document.getElementById('svdsd').style.display = 'none';}">
<b> Re-setup planbook </b> </a></p>
<div id="svdsd" style="display:none;">
If you wish to resetup your planbook, please <a href="members.php?op=setup"> click here </a>
<br>
You can setup your planbook again free of charge for any year, all your data will stay.<br>
</div>
<br><br>
<a href="JavaScript:;" onmousedown=
"if 
(document.getElementById('svdsdl').style.display == 'none') 
{document.getElementById('svdsdl').style.display = 'block';} 
else {document.getElementById('svdsdl').style.display = 'none';}">
<b> Suggestions </b> </a></p>
<?php
if(isset($_POST['suggest1']) && $_POST['suggest1'] == "ok")
  {
            $subject  = "TPB - New Suggestion";
            $to       =  "jcondrill@teacherplanbook.com";
	        $data     = "Do NOT Reply to this e-mail, reply to the information listed below!" . "<br>--------<br>" . 
                        "Sent From: " . $_SESSION['username'] . "(" . $_SESSION['email'] . ")<br>--------<br>" . 			
	                    "Message Below:<br>--------<br>" . htmlspecialchars($_POST['suggest2']);
			$headers  = 'MIME-Version: 1.0' . "\r\n";
			$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
			$headers .= 'From: Teacher PlanBook <noreply@teacherplanbook.com>' . "\r\n";
			mail($to, $subject, $data, $headers);
  }
?>
<div id="svdsdl" style="display:none;">
We value your input. In the box below please describe your suggestion, and<br>
the TeacherPlanBook team will review and work to make your planbook even better<br>
<form action="members.php?op=home" method="post">
<input type=hidden name=suggest1 value="ok">
<textarea rows=5 cols=50 name="suggest2"></textarea><br>
<input type=submit value=Submit>
</form></div>
<?php

$varadmin = $_SESSION['admin']; 
  
If ($varadmin == 1) 
 { 
  include("modules/admin.php"); 
 }

?>