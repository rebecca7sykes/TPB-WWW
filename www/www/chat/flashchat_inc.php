<?php

// Fix For flashchat.php To Secure From Direct Access To Script
// Fix For flashchat.php To Secure From Direct Login Via URI
// Fix Contribution By Ricky Huckle

if(!defined("flashchat")) { die('Direct access to this location is not allowed.'); exit; }

if ($_SERVER['REQUEST_URI'] == $_SERVER['SCRIPT_NAME'] . "?username=" . $_REQUEST['username']) { die('Direct login is not allowed.'); exit(); }

// End Fix For Secure flashchat_inc.php

$GLOBALS['my_file_name'] = 'flashchat';

//-------------------------------------------------------------------------------------
//check if flahchat is installing
//-------------------------------------------------------------------------------------
$fname = dirname(__FILE__).'/temp/config.srv.php';
if(!file_exists($fname))
{
	Header('Location: install.php');
	die;
} else {
	require_once $fname;
}

if($GLOBALS['fc_config']['cacheType'] != 2)
{
	$query = 'SELECT * FROM '.$GLOBALS['fc_config']['db']['pref'].'connections LIMIT 1';
	@mysql_connect($GLOBALS['fc_config']['db']['host'], $GLOBALS['fc_config']['db']['user'], $GLOBALS['fc_config']['db']['pass']);
	@mysql_select_db($GLOBALS['fc_config']['db']['base']);
	$result = @mysql_query($query);
	if($result == null)
	{
		Header('Location: install.php');
		die;
	}
	else
	{
		if($GLOBALS['fc_config']['cacheType'] == 1)
		{
			$i = 0;
			$files_arr = array('bans', 'configinst', 'configmain', 'connections', 'ignors', 'messages', 'users', 'tables');
			$d = dir('temp/templates/cache/');
			while(false !== ($entry = $d->read()))
			{
				if($entry == '.' || $entry == '..') continue;

				$entries = explode('_', $entry);
				if(substr($entry, -6, -5) == '_')
				{
					$check = $entries[count($entries)-3];
				}
				else
				{
					$check = $entries[count($entries)-2];
				}
				if(in_array($check, $files_arr))
				{
					$i++;
				}
			}
			$d->close();
			if($i < count($files_arr))
			{
				Header('Location: install.php');
				die;
			}
		}
	}
} else {
	$fname = dirname(__FILE__).'/temp/templates/cache/'.$GLOBALS['fc_config']['db']['pref'].'config_'.$GLOBALS['fc_config']['cacheFilePrefix'].'_1.txt';
	if(!file_exists($fname))
	{
		Header('Location: install.php');
		die;
	}
}
//-------------------------------------------------------------------------------------
//check if flahchat is installing
//-------------------------------------------------------------------------------------

require_once('inc/common.php');

$_SESSION['session_inst'] = 1;
$_SESSION['session_chat'] = 1;
//------------------------------------------------------------------------------
//added 180907 default id of session chat and session inst
//------------------------------------------------------------------------------


$id = 'flashchat';
$params = array();

if(isset($_REQUEST['username']) && !isset($_REQUEST['flash_login']))
{
	if($_REQUEST['username'] == '__random__') $_REQUEST['username'] = 'user_' . time();
	if(!isset($_REQUEST['lang'])) $_REQUEST['lang'] = $GLOBALS['fc_config']['defaultLanguage'];
	if(!isset($_REQUEST['password'])) $_REQUEST['password'] = '';
	if(!isset($_REQUEST['room'])) $_REQUEST['room'] = 0;
	if(!isset($_REQUEST['session_inst'])) $_REQUEST['session_inst'] = 1; // added on 090706 for chat instances

	$params = array_merge($params, array(
			'login' => $_REQUEST['username'],
			'password' => $_REQUEST['password'],
			'lang'  => $_REQUEST['lang'],
			'room'  => $_REQUEST['room'],
	//'instance_id' => $_REQUEST['session_inst']  // added on 090706 for chat instances
			'instance_id' => 1  // added 180907 default id of session inst
	));
}
?>

<!--		<script type="text/javascript">-->
<!--		-->
<!--			function showLogger()-->
<!--			{-->
<!--				win = window.open("logger.php", "logger", "width=500,height=400,left=0,top=0,location=no,menubar=no,resizable=yes,scrollbars=no,status=no,toolbar=no");-->
<!--				win.focus();-->
<!--			}-->
<!--			<?php if($GLOBALS['fc_config']['debug']) {?>showLogger();<?php } ?>-->
<!--        //-->
<!--		</script>-->

<script	src="history/history.js" language="javascript"></script>
<link rel="stylesheet" href="history/history.css" type="text/css"/>

<script language="JavaScript">
			var connId = '';

			function myOnClose() {
				var flex = document.flashchat || window.flashchat;
				flex.myCloseHandler();
			}

			function setConnId(newConnId) {
				connId = newConnId;
			}


			function sendLogout()
			{
				if(connId == '') return;

				myOnClose();

				var rand = Math.floor(Math.random()*10000000000);
				var data = "rand=" + rand + "&id=" + connId;

				var xmlHttp = null;
				if (window.XMLHttpRequest)
				{
			    	xmlHttp = new XMLHttpRequest();
	    		}
				else
				{
					if (window.ActiveXObject)
					{
	        			xmlHttp = new ActiveXObject("Msxml2.XMLHTTP");
				        if(!xmlHttp)
						{
				        	xmlHttp = new ActiveXObject("Microsoft.XMLHTTP");
				        }
				    }
	    		}

				xmlHttp.open("POST", "ajax_logout.php?" + data, false);
				xmlHttp.send(data);
			}

			// Disabled window.onload (Setfocus) For Compatibility Reasons With IE8
		    // Also Was Disabled For Compatibility With Updated SWFObject
		    // IE8 Throws Cant Move Focus Error

		    //window.onload = setFocus;

			window.onbeforeunload = sendLogout;
			window.onunload = sendLogout;
		</script>
<script
	type="text/javascript" src="javascript/swfobject.js"></script>

<?php
//for autologin (by p.feklistov)
$fv = '';
$userid = ChatServer::isLoggedIn();
if($userid != null) {
	$u = ChatServer::getUser($userid);
	$fv = "login={$u['login']}&password=null&lang={$GLOBALS['fc_config']['defaultLanguage']}&instance_id=1";

}

$flashVars = array();

foreach($params as $name => $value) {
	if($value) $flashVars[] = $name.'=' . urlencode($value);
}

$fv .= join('&', $flashVars);

?>


<script type="text/javascript">
			var flashvars = false;
			var params = {};
			params.quality = "high";
			params.allowScriptAccess = "always";
			params.allowFullScreen= "true";
			params.bgcolor = "#FFFFFF";
			var attributes = {};
			attributes.id = "flashchat";
			attributes.name = "flashchatd";
			swfobject.embedSWF("chat.swf?<?php echo $fv; ?>", "flashchat", "100%", "100%", "9.0.0", false, flashvars, params, attributes);
</script>