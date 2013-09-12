<?php
  $expire=time()+60*60*24*30;
  setcookie("username", $_SESSION['username'], $expire);
  setcookie("month", $_SESSION['month'], $expire);
  setcookie("year", $_SESSION['year'], $expire);
  setcookie("myint", $_SESSION['myint'], $expire);
  setcookie("use15", $_SESSION['use15'], $expire);
 ?>