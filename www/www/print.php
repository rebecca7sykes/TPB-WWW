<?php

session_start();

$op = $_GET['op'];

If ($op == 1) 
 { 
  include("print/pbook.php");
 } 

If ($op == 2)
 {
 include("print/pday.php");
 }

If ($op == 3)
 {
 include("print/link.php");
 }

?>
