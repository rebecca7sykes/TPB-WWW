<?php
$host = "localhost";
$user = "teacherplan";
$pass = "10773208";
$database = "teacherplan_tpbsadat";

if($_SERVER["HTTPS"] != "on") {
   header("Location: https://" . $_SERVER["SERVER_NAME"] . $_SERVER["REQUEST_URI"]);
}
?>