<?php
  session_start();
  include("mysqlinfo.php");
  mysql_connect($host, $user, $pass);
  $con = mysql_connect($host, $user, $pass);
  mysql_select_db($database, $con);
  error_reporting(0);
  
  //include("inc/init.php");
  include("inc/cookie.php");
  
  $ss = $_SESSION['fullname'];
  $sv = $_SESSION['username']; 
  $sz = $_SESSION['email'];
  $sk = $_SESSION['id']; 
  $si = $_SESSION['expireon']; 
  $z = date("Y-m-d");
  
  $guestcheck = $_SESSION['guest'];
  if ($guestcheck == 1) 
   { 
     die("<a href='members.php?op=revv'>Guests may only review the book! Click here to go to the review page</a>");
   }
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
   "http://www.w3.org/TR/html4/loose.dtd">
<html>
  <head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="shortcut icon" href="images/favicon.ico"/>
<title>Teacher Plan Book - Made By Teachers For Teachers</title>
<link href="css/ezplusstyle.css" rel="stylesheet" type="text/css" />

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

<!-- Tiny MCE -->
<script src="jquery.js"></script>
<script type="text/javascript" src="tiny_mce/jquery.tinymce.js"></script>
<script type="text/javascript">
	$().ready(function() {
		$('textarea.tinymce').tinymce({
			script_url : 'tiny_mce/tiny_mce.js',
			theme : "advanced",
			plugins : "paste,autolink,lists,pagebreak,layer,table,save,advhr,advimage,advlink,emotions,iespell,inlinepopups,insertdatetime,preview,media,searchreplace,print,contextmenu,paste,directionality,fullscreen,noneditable,visualchars,nonbreaking,xhtmlxtras,template,advlist",
			paste_use_dialog : false,
            paste_auto_cleanup_on_paste : true,
            paste_convert_headers_to_strong : false,
            paste_strip_class_attributes : "all",
            paste_remove_spans : true,
            paste_remove_styles : true,
			theme_advanced_toolbar_location : "top",
			theme_advanced_toolbar_align : "left",
			theme_advanced_resizing : true,
			content_css : "css/content.css",
			template_external_list_url : "lists/template_list.js",
			external_link_list_url : "lists/link_list.js",
			external_image_list_url : "lists/image_list.js",
			media_external_list_url : "lists/media_list.js",
			template_replace_values : {
				username : "Some User",
				staffid : "991234"
			}
		});
	});
</script>
<!-- End Tiny MCE -->
<script type="text/javascript">
$(document).ready(function() {
  $("input[type=radio]").mouseup(function() {
    this.__chk = this.checked;
  }).click(function() {
    if (this.__chk) this.checked = false;
  });
});
</script>
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
</head>

<body> <!-- oncontextmenu="return false;"  use to disable rightclick ! -->
<div id="warpper_bg">
  <div id="wrapper_top">
<div id="top">
    <div id="logo"><a href="members.php?op=home"><img src="images/logo.gif" alt="Teacher Plan Book" width="600" height="91" /></a></div>
    <div id="search">
  <?php 
   if(isset($_SESSION['fullname']))
     { 
      echo "<br><br><br><br><br>"; 
      $lgg = $_SESSION['username']; 
      echo "Welcome "; echo "$lgg"; // Say Welcome YOURLOGINID 
      echo "! Not "; echo "$lgg"; echo "? <a href=index.php?op=Logout> Click here to log out!</a>";
     } 
   ?> <br/><br/><br/>
    </div>
</div>
<div id="banner">
<img src="images/ban.png">
</div>
<div id="menu">
    <ul>
        
        <li><a href="members.php?op=home" class="visit">Home</a></li>
        <li><img src="images/menu_div.jpg" alt="" width="1" height="40" /></li>
        <li><a href="members.php?op=planbook">Weekly Objectives</a></li>
        <li><img src="images/menu_div.jpg" alt="" width="1" height="40" /></li>
        <li><a href="members.php?op=addtoplan">Add Objectives</a></li>
        <li><img src="images/menu_div.jpg" alt="" width="1" height="40" /></li>
        <li><a href="members.php?op=dayplotter">Daily Plotter</a></li>
        <li><img src="images/menu_div.jpg" alt="" width="1" height="40" /></li>
        <li><a href="members.php?op=addtoplot">Add to Plotter</a></li>
        <li><img src="images/menu_div.jpg" alt="" width="1" height="40" /></li>
        <li><a href="members.php?op=revv">Review / Print Plan</a></li>
        <li><img src="images/menu_div.jpg" alt="" width="1" height="40" /></li>
        <!-- <li><a href="members.php?op=chat">Chatroom</a></li> -->
         <li><a href="javascript: void(0)" onclick="window.open('https://teacherplan.server287.com/chat/flashchat.php', 'Chat', 'width=750, height=600');  return false;">Chatroom</a></li>
    </ul>
</div>
    <div id="content">
      <div id="content_left">
	<?php
	    $op = !isset($_GET['op']) ? home : $_GET['op'] ;
	  
	    if (is_file("modules/".$op.".php")) {
			  include("modules/".$op.".php");
		  
	    } else {	
		include ('modules/memhome.php'); 
	    }
  ?>
  <div id="footer">
    <div id="footer_left">&nbsp;</div>
    <div id="footer_cont">
      <p>Copyright &copy; 2012 TeacherPlanBook.com. All Rights Reserved. <br> 
        <a href="index.php?op=policy">Privacy & Refund Policies / Terms & Conditions</a> </p>
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