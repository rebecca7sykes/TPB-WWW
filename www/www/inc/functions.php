<?php

$username = $_SESSION['username'];
function edits($period, $weekid, $vkk, $op, $i) 
   {
    If (isset($_GET['week']))
	 {
	  If ($op != 1 || $op != 2)
	    {
      echo "<br>"; 
      echo "<a href=members.php?op="; echo "$vkk"; "&week="; echo "$weekid"; echo "&period="; echo "$period"; 
	      if ($i == 3)
		    {
	  echo ">[Edit]</a>"; 
	        }
			elseif ($i == 2)
			  {
			  $username = $_SESSION['username'];
			 editls($weekid, $period, $username);
			 echo ">[Edit]</a>"; 
			  }
	     }
	  }
   }
   
function grabmain($username, $period)
  {
  
$host = "localhost";
$user = "teacherplan";
$pass = "10773208";
$database = "teacherplan_tpbsadat";

  $con = mysql_connect($host, $user, $pass) 
            or die("Cannot connect to SQL Server");
  mysql_select_db($database, $con);
  
    $sql = " SELECT * FROM main where username = '$username' ";
    $result = mysql_query($sql); 
	$row = mysql_fetch_array($result);
	echo $row['per' . $period . 'name']; 
	echo "<br>";
	echo "Time: " . $row['per' . $period . 'time1'] . " - " .    $row['per' . $period . 'time2'];
	 If($_GET['op'] == "dayplotter")
	   {
		 echo "<br>"; 
		 $weekid = $_GET['week']; 
		 edits($period, $weekid, "addtoplot&week=", $op, 2);   
	   }
	 If($_GET['op'] == "planbook")
	   {
		echo "<br>";
		$weekid = $_GET['week'];
		edits($period, $weekid, "addtoplan&week=", $op, 3); 
		//edits($period, $weekid, "addtoplan&week=", edits, 3)
	   }
}


// this one gets objective info, do not touch unless you know what to do

function grabobj($weekid, $period, $username)
{
  
    $host = "localhost";
	$user = "teacherplan";
	$pass = "10773208";
	$database = "teacherplan_tpbsadat";
    $con = mysql_connect($host, $user, $pass) 
            or die("Cannot connect to SQL Server");
    mysql_select_db($database, $con);
    $sql = " 
             SELECT * FROM planbook 
             where owner = '$username' 
             and weeknum = '$weekid' 
             and period  = '$period'
              ";
    $result = mysql_query($sql); 
    $count  = mysql_num_rows($result); 
    If ($count < 1)
      {
      echo " "; 
      } 
    else 
      { 
      while ($row = mysql_fetch_array($result))
         {
          echo "<b>"; // bold 
          $vk1 = $row['content']; 
          echo "$vk1"; 
          echo "</b>";  // end bold 
		  //edits($period, $weekid, "addtoplan&week=", edits, 3);
         }
      } 

}


function determine($input, $selid, $bktxt)
{
  If ($input == 1) 
  { 
   echo "<b>Assesment - Quiz</b> <br>";
  }
  ElseIf ($input == 2)
  {
   echo "<b>Assesment - Test</b> <br>";
  }
  ElseIf ($input == 3)
  {
   echo "<b>Activity</b> <br>";
  }
  ElseIf ($input == 4)
  {
   echo "<b>Activity - Textbook</b><br>";
   echo "$selid";            echo "<br>";
   echo "$bktxt";            echo "<br>";
  }
  ElseIf ($input == 5)
  {
   echo "<b>Activity - Worksheet</b> <br>";
  }
  ElseIf ($input == 6)
  {
   echo "<b>Activity - Presentation</b> <br>";
  }
  ElseIf ($input == 7)
  {
   echo "<b>Activity - Essay Writing</b> <br>";
  }
  ElseIf ($input == 8)
  {
   echo "<b>Activity - Assembly </b> <br>";
  }
  ElseIf ($input == 9)
  {
   echo "<b>Activity - Movie</b> <br>";
  }
  Else
  {
    // no selection, don't do anything!
   // echo "<b>Activity</b> <br>";
  } 

}
function editls($weekid, $period, $username)
{
    $host = "localhost";
	$user = "teacherplan";
	$pass = "10773208";
	$database = "teacherplan_tpbsadat";
    $con = mysql_connect($host, $user, $pass) 
            or die("Cannot connect to SQL Server");
    mysql_select_db($database, $con);
    $sql = " SELECT * FROM plotter WHERE weeknum = '$weekid' AND period = '$period' 
             and owner = '$username' "; 
    $result = mysql_query($sql);
    $count = mysql_num_rows($result);
    $row  = mysql_fetch_array($result);
  /*  If ($count < 1)
    { 
     echo " &nbsp; "; 
    } 
    else
    { */
	$stand1 = $row['stand1']; 
    $stand2 = $row['stand2']; 
	$stand3 = $row['stand3']; 
	$stand4 = $row['stand4']; 
	$stand5 = $row['stand5'];
	$stand1 = str_replace(" ", "", $stand1);
	$stand1 = str_replace("Standards", "", $stand1);
	$stand1 = str_replace("#:", "", $stand1);
	$stand1 = str_replace(",", "-", $stand1);
	$stand2 = str_replace(" ", "", $stand2);
	$stand2 = str_replace("Standards", "", $stand2);
	$stand2 = str_replace("#:", "", $stand2);
	$stand2 = str_replace(",", "-", $stand2);
	$stand3 = str_replace(" ", "", $stand3);
	$stand3 = str_replace("Standards", "", $stand3);
	$stand3 = str_replace("#:", "", $stand3);
	$stand3 = str_replace(",", "-", $stand3);
	$stand4 = str_replace(" ", "", $stand4);
	$stand4 = str_replace("Standards", "", $stand4);
	$stand4 = str_replace("#:", "", $stand4);
	$stand4 = str_replace(",", "-", $stand4);
	$stand5 = str_replace(" ", "", $stand5);
	$stand5 = str_replace("Standards", "", $stand5);
	$stand5 = str_replace("#:", "", $stand5);
	$stand5 = str_replace(",", "-", $stand5);	
	echo "&st1=" . $stand1;
	echo "&st2=" . $stand2;
	echo "&st3=" . $stand3;
    echo "&st4=" . $stand4;
    echo "&st5=" . $stand5;	
	// }
}
function grabplot($weekid, $period, $username, $day)
{
    $host = "localhost";
	$user = "teacherplan";
	$pass = "10773208";
	$database = "teacherplan_tpbsadat";
    $con = mysql_connect($host, $user, $pass) 
            or die("Cannot connect to SQL Server");
    mysql_select_db($database, $con);
    $sql = " SELECT * FROM plotter WHERE weeknum = '$weekid' AND period = '$period' 
             and owner = '$username' "; 
    $result = mysql_query($sql);
    $count = mysql_num_rows($result);
    $row  = mysql_fetch_array($result);
    If ($count < 1)
    { 
     echo " &nbsp; "; 
    } 
    else
    {
    $mon  = $row['mon'];
    $tue  = $row['tue'];
    $wed  = $row['wed']; 
    $thu  = $row['thu']; 
    $fri  = $row['fri']; 
    $note = $row['note']; 
    $mont = $row['mont'];
    $tuet = $row['tuet']; 
    $wedt = $row['wedt']; 
    $thut = $row['thut']; 
    $frit = $row['frit']; 
    $selid1 = $row['selid1']; 
    $selid2 = $row['selid2']; 
    $selid3 = $row['selid3']; 
    $selid4 = $row['selid4']; 
    $selid5 = $row['selid5']; 
    $bktxt1 = $row['bktxt1']; 
    $bktxt2 = $row['bktxt2']; 
    $bktxt3 = $row['bktxt3']; 
    $bktxt4 = $row['bktxt4']; 
    $bktxt5 = $row['bktxt5']; 
	$stand1 = $row['stand1']; 
    $stand2 = $row['stand2']; 
	$stand3 = $row['stand3']; 
	$stand4 = $row['stand4']; 
	$stand5 = $row['stand5']; 

      If ($day == 1) 
      {
       determine($mont, $selid1, $bktxt1);
       echo "$mon";
	   echo "<p class=lower><font color=red>";
	   $stand1 = substr_replace($stand1,"",-1);
	    echo "$stand1"; 
	    echo "</font></p>";
      }

      If ($day == 2) 
      {
       determine($tuet, $selid2, $bktxt2);
       echo "$tue";
	   echo "<p class=lower><font color=red>";
	    $stand2 = substr_replace($stand2,"",-1);
	   echo "$stand2"; 
	   echo "</font></p>";
      }

      If ($day == 3) 
      {
       determine($thut, $selid3, $bktxt3);
       echo "$wed";
	    echo "<p class=lower><font color=red>";
		 $stand3 = substr_replace($stand3,"",-1);
	   echo "$stand3";
	    echo "</font></p>";
      }

      If ($day == 4) 
      {
       determine($wedt, $selid4, $bktxt4);
       echo "$thu";
	    echo "<p class=lower><font color=red>";
		 $stand4 = substr_replace($stand4,"",-1);
	   echo "$stand4"; 
	    echo "</font></p>";
      }

      If ($day == 5) 
      {
       determine($frit, $selid5, $bktxt5);
       echo "$fri";
	    echo "<p class=lower><font color=red>";
		 $stand5 = substr_replace($stand5,"",-1);
	   echo "$stand5"; 
	    echo "</font></p>";
      }

      If ($day == 6) 
      {
       echo "<b>Notes</b> <br>";
       echo "$note";
      }
    }
}

function bkname($username, $selectid) 
  {
    $host = "localhost";
	$user = "teacherplan";
	$pass = "10773208";
	$database = "teacherplan_tpbsadat";
    $con = mysql_connect($host, $user, $pass) 
            or die("Cannot connect to SQL Server");
    mysql_select_db($database, $con);
    $sql = "SELECT * FROM main where username = '$username' "; 
    $result = mysql_query($sql); 
    $row = mysql_fetch_array($result); 
    echo "<select name="; echo "$selectid"; echo ">";    
    echo "<option>"; echo $row['bk1']; echo "</option>"; 
    echo "<option>"; echo $row['bk2']; echo "</option>"; 
    echo "<option>"; echo $row['bk3']; echo "</option>"; 
    echo "<option>"; echo $row['bk4']; echo "</option>"; 
    echo "<option>"; echo $row['bk5']; echo "</option>"; 
    echo "<option>"; echo $row['bk6']; echo "</option>"; 
    echo "<option>"; echo $row['bk7']; echo "</option>"; 
    echo "<option>"; echo $row['bk8']; echo "</option>"; 
    echo "<option>"; echo $row['bk9']; echo "</option>"; 
    echo "</select>"; 

  }

  function cweeknum($i)
  {
  If (isset($_GET['week']))
	    {
	      $ik   = $_GET['week']; 
		  $iv   = str_replace("aug", "", $ik);
		  $iv   = str_replace("sept", "", $iv); 
		  $my   = $iv - $i; 
		  echo "<font size=5>"; 
		  echo "Week Number: "; echo "$my"; 
		  echo "</font>"; 
		  $my = intval($my);
	$month = $_SESSION['month'];	
     		If ($month == 8)
		 {
		 $d = "aug";
		 }
		 If ($month == 9)
		 {
		 $d = "sept";
		 }
		  $iv = $iv - 1;
		  $o  = $iv . $d;
		  $iv = $iv + 2;
		  $z  = $iv . $d;
		  $href1 = "href=members.php?op=" . $_GET['op'] . "&week=" . $o;
		  $href2 = "href=members.php?op=" . $_GET['op'] . "&week=" . $z;
		  echo "<font size=3>";
		  if($my == 1) {   } else { echo "<div style=\"float: left; text-align: left;\"><a " . $href1 . "><< Previous</a></div>"; }
		  if($my == 52) {   } else { echo "<div style=\"float: right; text-align: right;\"><a " . $href2 . ">Next >></a></div>"; }
		  echo "</font>";
		}
  
  }
  
  function editobj($username, $weekid, $period) 
  { 
    If (isset($_GET['week'])) 
    {
    $host = "localhost";
	$user = "teacherplan";
	$pass = "10773208";
	$database = "teacherplan_tpbsadat";
    $con = mysql_connect($host, $user, $pass) 
    or die("Cannot connect to SQL Server");
    mysql_select_db($database, $con);
	    $sql = " 
             SELECT * FROM planbook 
             where owner = '$username' 
             and weeknum = '$weekid' 
             and period  = '$period'
               ";
	$result = mysql_query($sql);
	    while ($row = mysql_fetch_array($result))
		   {
		     echo $row['content'];
		   }
	 
  } 
  }
  
  function editplot($username, $weekid, $period, $day)
  {
    If (isset($_GET['week'])) 
    {
    $host = "localhost";
	$user = "teacherplan";
	$pass = "10773208";
	$database = "teacherplan_tpbsadat";
    $con = mysql_connect($host, $user, $pass) 
    or die("Cannot connect to SQL Server");
    mysql_select_db($database, $con);
    $sql = " 
           SELECT * FROM plotter
           where owner = '$username'		 
           and weeknum = '$weekid' 
           and period  = '$period' 
           "; 	
		  
    $result = mysql_query($sql);
    while ($row = mysql_fetch_array($result))
	 {
    $mon  = $row['mon'];
    $tue  = $row['tue'];
    $wed  = $row['wed']; 
    $thu  = $row['thu']; 
    $fri  = $row['fri']; 
    $note = $row['note']; 
	  If ($day == 1) 
      {
       echo "$mon";
      }

      If ($day == 2) 
      {
       echo "$tue";
      }

      If ($day == 3) 
      {
       echo "$wed";
      }

      If ($day == 4) 
      {
       echo "$thu";
      }

      If ($day == 5) 
      {
       echo "$fri";
      }

      If ($day == 6) 
      {
       echo "$note";
	  }
	 }
  }
  }
  
  function editradio($username, $weekid, $period, $day, $val) 
  {
  If (isset($_GET['week'])) 
    {
    $host = "localhost";
	$user = "teacherplan";
	$pass = "10773208";
	$database = "teacherplan_tpbsadat";
    $con = mysql_connect($host, $user, $pass) 
    or die("Cannot connect to SQL Server");
    mysql_select_db($database, $con);
    $sql = " 
           SELECT * FROM plotter
           where owner = '$username'		 
           and weeknum = '$weekid' 
           and period  = '$period' 
           "; 	
	$result = mysql_query($sql);
    $row    = mysql_fetch_array($result);
	$mont = $row['mont'];
    $tuet = $row['tuet']; 
    $wedt = $row['wedt']; 
    $thut = $row['thut']; 
    $frit = $row['frit'];
	If ($day == 1)
	 { 
	    If ($mont == $val) 
		   {
		     echo "CHECKED";
		   }
	 }	
	 If ($day == 2)
	 { 
	      If ($tuet == $val) 
		   {
		     echo " CHECKED ";
		   }
	 }
	 	If ($day == 3)
	 { 
	      	    If ($wedt == $val) 
		   {
		     echo "CHECKED";
		   }
	 }
	 	If ($day == 4)
	 { 
	      	    If ($thut == $val) 
		   {
		     echo "CHECKED";
		   }
	 }
	 	If ($day == 5)
	 { 
	      If ($frit == $val) 
		   {
		     echo "CHECKED";
		   }
	 }
} 
}	   

function editset($username, $a) 
  {
    $host = "localhost";
	$user = "teacherplan";
	$pass = "10773208";
	$database = "teacherplan_tpbsadat";
    $con = mysql_connect($host, $user, $pass) 
    or die("Cannot connect to SQL Server");
    mysql_select_db($database, $con);
    $sql = " 
           SELECT * FROM main where username = '$username' 
		   ";
	$result = mysql_query($sql);
	$count  = mysql_num_rows($result);

	     while ($row = mysql_fetch_array($result)) 
		   {
		     $ikk = $row['$a']; 
			 $ikv = $row[$a]; 
			 echo "$ikv"; 
			 echo "$ikk"; 
		   }
	  
  }
function wkdate($week,$yryr)
  {
     $yryr   = $_SESSION['year'];
	 If ($yryr == 2010)
	 {
	 include("inc/2010-2011.php");
	 }
	ElseIf ($yryr == 2011)
	 {
	 include("inc/2011-2012.php");
	 } 
	ElseIf ($yryr == 2012)
	 {
	 include("inc/2012-2013.php");
	 } 
	return " (" . $mdate . " -> " . $fridate . ") ";
  }
  
?>
