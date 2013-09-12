        <?php		
		$myint = $_SESSION['myint'];
		if($month==9 && $_SESSION['year'] ==2013)
		{
       		$int   = $myint;
            } else {
                  $int   = $myint-1;
            }
		 If ($month == 8)
		 {
		 $d = "aug";
		 }
		 If ($month == 9)
		 {
		 $d = "sept";
		 }
		 if($_SESSION['pcode'] == "52weeks") 
		 {
		   $b   = 52;
		 } else 
		 {
	       $b    = 52; // orig is 43
		 }
	      $c    = $int+1;
	     for($a=1;$a<=$b;$a++) 
         {
		  $weekin = $c . $d;
		  $in = wkdate($weekin,$yryr);
		  echo "<option value=" . $c . $d . ">Week #" . $a . $in . "</option>\n";
          $c++;
         }
		 ?>