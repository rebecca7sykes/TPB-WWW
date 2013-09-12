<?php
  session_start();
  include("mysqlinfo.php");
  error_reporting(0);
?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
   "http://www.w3.org/TR/html4/loose.dtd">
<html>
  <head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="shortcut icon" href="images/favicon.ico"/>
<title>Teacher Plan Book - Made By Teachers For Teachers</title>

<meta name="description" content="Teacherplanbook - Made by teachers for teachers">
<meta name="keywords" content="teacher plan book, plan book, teachers, k-12, highschool, middle school, kindergarden, objectives, daily plotter, review plans, $20 a year, tools for teachers, teachers tools, students, school, education, lesson plans">
<meta name="googlebot" content="all, index, follow" />
<meta name="rating" content="general" />
<meta name="robots" content="all, index, follow" />
<meta name="revisit" content="3 days" />
<meta name="revisit-after" content="3 days" />
<meta name="alexa" content="100" />
<meta name="allow-search" content="yes" />
<meta name="country" content="USA" />
<meta name="author" content="Teacher Plan Book" />
<meta name="organization-email" content="support@teacherplanbook.com" />
<meta name="creator" content="Teacher Plan Book" />
<meta name="identifier" content="http://teacherplanbook.com/" />
<meta http-equiv="content-language" content="en-us">
<meta name="copyright" content="teacherplanbook.com/" />

<link href="css/ezplusstyle.css" rel="stylesheet" type="text/css" />
<!-- facebook like -->
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/all.js#xfbml=1";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

<!-- google analytic -->
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-4148930-23']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
<!-- google analytic -->
</head>
<body>
<div id="warpper_bg">
  <div id="wrapper_top">
<div id="top">
    <div id="logo"><a href="index.php?op=home"><img src="images/logo2.gif" alt="Teacher Plan Book" width="600" height="91" /></a></div>
    <div id="search"><br/><br/><br/><a href="index.php?op=register"><font size="4"> <b> New customers click here </b> </font> </a>
    </div>
</div>
<div id="banner">
<img src="images/ban.png">
</div>
<div id="menu">
    <ul>
        
        <li><a href="index.php?op=home" class="visit">Home</a></li>
        <li><img src="images/menu_div.jpg" alt="" width="1" height="40" /></li>
        <li><a href="index.php?op=mission">Mission</a></li>
        <li><img src="images/menu_div.jpg" alt="" width="1" height="40" /></li>
        <li><a href="index.php?op=howwork">How It Works</a></li>
        <li><img src="images/menu_div.jpg" alt="" width="1" height="40" /></li>
        <li><a href="index.php?op=register&x=1">Register</a></li>
        <li><img src="images/menu_div.jpg" alt="" width="1" height="40" /></li>
        <li><a href="index.php?op=contact">Contact Us</a></li>
        <li><img src="images/menu_div.jpg" alt="" width="1" height="40" /></li>
        <li><a href="index.php?op=testimonials">Testimonials</a></li>
        <li><img src="images/menu_div.jpg" alt="" width="1" height="40" /></li>
        <li><a href="members.php">Login</a></li>
    </ul>
</div>
    <div id="content">
      <div id="content_left">
	<?PHP 
if (isset($_GET['write'])) {
	$argv = explode('-',$_GET['write']);
	settype($argv,'array'); 
	$_GET['op'] = @$argv[0];
	$_GET['url'] = @$argv[1];
	$_GET['do'] = @$argv[2];
	$_GET['key'] = @$argv[3];
}
$op = !isset($_GET['op']) ? home : $_GET['op'] ;

   if (is_file("codedbysadat/".$op.".php")) {
   		include("codedbysadat/".$op.".php");
	
   } else {	
		include ('codedbysadat/home.php'); 
   }
?>
  <div id="footer">
    <div id="footer_left">&nbsp;</div>
    <div id="footer_cont"><p>
     Copyright &copy; 2012   TeacherPlanBook.com. All Rights Reserved.<br />
        <a href="index.php?op=policy">Privacy & Refund Policies / Terms & Conditions</a> 
 </table> 
 <p>&nbsp;</p>
      <p><b>Website coded by Sadat Hossain</b></p>
    </div>
    <div id="footer_right">&nbsp;</div>
  </div>
</div>
<div id="wrapper_btm"></div>
<br />
</body>
</html>