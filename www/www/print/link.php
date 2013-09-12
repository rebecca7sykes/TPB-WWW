<?php session_start(); ?>
<frameset id="sadat" cols="50%,50%">
  <frame src="https://<?php

echo $_SERVER['HTTP_HOST'];

?>/print.php?op=1&val=1" />
  <frame src="https://<?php

echo $_SERVER['HTTP_HOST'];

?>/print.php?op=2&val=1" />
</frameset>