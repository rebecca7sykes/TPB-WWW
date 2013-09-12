<html>
<body>

<script language="javascript" type="text/javascript">
<!-- 
//Browser Support Code
function ajaxFunction(){
	var ajaxRequest;  // The variable that makes Ajax possible!
	
	try{
		// Opera 8.0+, Firefox, Safari
		ajaxRequest = new XMLHttpRequest();
	} catch (e){
		// Internet Explorer Browsers
		try{
			ajaxRequest = new ActiveXObject("Msxml2.XMLHTTP");
		} catch (e) {
			try{
				ajaxRequest = new ActiveXObject("Microsoft.XMLHTTP");
			} catch (e){
				// Something went wrong
				alert("Your browser broke!");
				return false;
			}
		}
	}
	// Create a function that will receive data sent from the server
	ajaxRequest.onreadystatechange = function(){
		if(ajaxRequest.readyState == 4){
			var ajaxDisplay = document.getElementById('ajaxDiv');
			ajaxDisplay.innerHTML = ajaxRequest.responseText;
		}
	}
	var age = document.getElementById('age').value;
	var queryString = "?age=" + age;
	ajaxRequest.open("GET", "svlink.php" + queryString, true);
	ajaxRequest.send(null); 
}

//-->
</script>



<form name='myForm'>
Keywords: <input type='text' id='age' /> <br />
<input type='button' onclick='ajaxFunction()' value='Search' />
</form>
<div id='ajaxDiv'> </div>
</body>
</html>
