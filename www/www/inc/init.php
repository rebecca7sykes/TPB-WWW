<?php


if(!session_is_registered(username)) 
{
 die(header('Location:members.php?op=memhome')); 
}


$expireon = $_SESSION['expireon']; 
$cdate    = date("Y-m-d");
/*if ($expireon < $cdate && $_GET['op'] <> "recharge") 
 { 
    header('Location: members.php?op=recharge');
    exit;
 }*/

$regs     = $_SESSION['regs'];

if($regs == 0)
{
die(header('Location:members.php?op=setup'));
}

?>
