<?php
if(isset($_POST['objective']))
 {
   die($_POST['objective']);
 }
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<!-- Load jQuery -->
<script type="text/javascript" src="http://www.google.com/jsapi"></script>
<script type="text/javascript">
	google.load("jquery", "1");
</script>
<script type="text/javascript" src="tiny_mce/jquery.tinymce.js"></script>
<script type="text/javascript">
	$().ready(function() {
		$('textarea.tinymce').tinymce({
			script_url : 'tiny_mce/tiny_mce.js',
			theme : "advanced",
			plugins : "autolink,lists,pagebreak,layer,table,save,advhr,advimage,advlink,emotions,iespell,inlinepopups,insertdatetime,preview,media,searchreplace,print,contextmenu,paste,directionality,fullscreen,noneditable,visualchars,nonbreaking,xhtmlxtras,template,advlist",
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

</head>
<body>

<form method="post" action="test.php">
	<div>
		<div>
			<textarea id="objective" name="objective" rows="27" cols="60" class="tinymce">
		
			</textarea>
		</div>

		<br />
		<input type="submit" name="save" value="Submit" />
	</div>
</form>

</body>
</html>
