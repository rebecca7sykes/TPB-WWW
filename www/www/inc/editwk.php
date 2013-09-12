<?php

if(isset($_GET['week']))
  {
   $w = $_GET['week']; 
   echo "<option value=" . $w . ">Editor Mode</option>";
  }
  
?>
