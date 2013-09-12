<?php
        header("Cache-Control: no-cache, must-revalidate");
        header("Pragma: no-cache");
        header("Expires: Thu, 01 Jan 1970 00:00:01 GMT");

?>
<html>
<head>
<TITLE></TITLE>

<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<?php
define('INC_DIR', dirname(__FILE__) . '/./inc/');//for config.php
require_once(INC_DIR.'common.php');
define("flashchat",true);
?>

<link rel="stylesheet" type="text/css" href="/history/history.css" />


<style type="text/css">
<!--

#pscroller1{
width: 158px;
height:34px;
border: 1px dashed black;
padding: 5px;
background-color: lightyellow;
}

#Layer1 {	position:absolute;
	width:620px;
	height:510px;
	z-index:1;
	left: 227px;
	top: 163px;
}
#Layer2 {
	position:absolute;
	width:200px;
	height:115px;
	z-index:2;
}
#Layer4 {	position:absolute;
	width:160px;
	height:600px;
	z-index:4;
	left: 18px;
	top: 177px;
}
#Layer3 {
	position:absolute;
	width:468px;
	height:60px;
	z-index:5;
	left: 243px;
	top: 47px;
}
#Layer5 {
	position:absolute;
	width:143px;
	height:41px;
	z-index:6;
	left: 15px;
	top: 791px;
}
.style1 {font-size: xx-small}

#Layer6 {
	position:absolute;
	width:131px;
	height:139px;
	z-index:7;
	left: 809px;
	top: 168px;
}
.style2 {
	color: #0000FF;
	font-size: 14px;
}
#Layer7 {
	position:absolute;
	width:158px;
	height:34px;
	z-index:8;
	left: 802px;
	top: 331px;
	background-color: #FFFFFF;
;
}
#Layer8 {
	position:absolute;
	width:150px;
	height:19px;
	z-index:9;
	left: 900px;
	top: 177px;
}
#Layer9 {
	position:absolute;
	width:125px;
	height:125px;
	z-index:10;
	left: 802px;
	top: 415px;
}
#Layer10 {
	position:absolute;
	width:480px;
	height:60px;
	z-index:10;
	left: 265px;
	top: 663px;
}
#Layer11 {
	position:absolute;
	width:200px;
	height:115px;
	z-index:10;
	left: 236px;
	top: 700px;
}
-->
</style>

<script type="text/javascript">

function showad(x,y)
{
var xval=x;
var yval=y;
var adserverurl="http://host/";
var rn = Math.ceil(25*Math.random())
document.write('<iframe height="'+yval+'" frameborder="0" width="'+xval+'" scrolling="no" vspace="0"  src="'+adserverurl+"adrotator.php?x="+xval+"&y="+yval+'" name="ITT_AD_FRAME'+rn+'" marginwidth="0" marginheight="0" id="ITT_AD_FRAME'+rn+'" hspace="0" allowtransparency="true">');
document.write('</iframe>');
}
</script>

<script type="text/javascript" src="js.php"></script>
<script type="text/javascript" src="fx.js"></script>
<script language="JavaScript">
      window.onbeforeunload = myOnClose;

                function myOnClose() {
                        var flex = document.flashchat || window.flashchat;
                                flex.myCloseHandler();
                                      }
</script>


</head>
<body bgcolor="#FFFFFF" text="#000000" link="#99CC33" vlink="#990033">
<script src="peel.js" type="text/javascript"></script>
<div id="Layer2"><a href="http://host/"><img src="logo.jpg" alt="Chat" width="205" height="138" border="0"></a></div>
<div id="Layer1">
  <?php
define("flashchat",true);
require_once('flashchat_inc.php');
?>
<script type="text/javascript">
function showLogger() {
				win = window.open("logger.php", "logger", "width=500,height=400,left=0,top=0,location=no,menubar=no,resizable=yes,scrollbars=no,status=no,toolbar=no");
				win.focus();
			}
</script>

<script language="JavaScript" type='text/javascript' src="javascript/ActivateFlash.js"></script>

<div id="flashchat"></div>
</div>
<div id="Layer4">
<script type="text/javascript">
showad(160,600);
</script>
</div>
<p align="center">&nbsp;</p>
<p><font color="#FFFFFF" size="-7">Chat</font></p>
<div id="Layer3">
<script type="text/javascript">
showad(468,60);
</script>
</div>
<div class="style1" id="Layer5">chat</div>
<div id="Layer8">

<script type="text/javascript">
showad(160,600);
</script>

</div>

<!-- Histats.com  START  -->
<a href="http://www.histats.com/es/" target="_blank" title="contador de visitas" ><script

type="text/javascript" language="javascript">
var s_sid = 709482;var st_dominio = 4;
var cimg = 0;var cwi =150;var che =30;
</script></a>
<script  type="text/javascript" language="javascript" src="http://s11.histats.com/js9.js"></script>
<noscript><a href="http://www.histats.com/es/" target="_blank">
<img  src="http://s103.histats.com/stats/0.gif?709482&1" alt="contador de visitas" border="0"></a>
</noscript>
<!-- Histats.com  END  -->
</body>
</html>