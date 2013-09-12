<?php
	error_reporting(E_ERROR);
	ini_set('display_errors', 'off');
	ob_start();

	$GLOBALS['my_file_name'] = 'preloader_settings.php';

	require_once('inc/common.php');

  $GLOBALS['fc_config']['preloader']['backgroundImage'] = $GLOBALS['fc_config']['themes'][$GLOBALS['fc_config']['login']['theme']]['backgroundImage'];

	header('Pragma: public');
	header('Expires: 0');
	header('Content-type: text/xml');
?>
<preloader_settings <?php echo array2attrs($GLOBALS['fc_config']['preloader'])?>>
	<text <?php echo array2attrs($GLOBALS['fc_config']['preloader']['text'])?>/>
</preloader_settings>
<?php
	ob_end_flush();
?>