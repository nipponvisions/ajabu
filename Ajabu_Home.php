	<?php

	define('ajabu_links', True);
	define('SIGN_IN_form', True);
	define('SIGN_UP_form', True);

		//display links on the side
	include "ajabu_links.php";

	?>



<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title> Ajabu_html </title>
<link rel="stylesheet" type="text/css" href="ajabu.css">
</head>

<body>

<div class="barner"> <h1> Halo Ajabu  home </h1>  </div>

<h1> Ajabu Africa Two </h1>

<p id="">  Ajabu the uber driver from Mangu <br>
      some litelrature here forever. and a history of Mwarimu<br>
     Ajabu the uber driver from Mangu <br>
    some litelrature here forever. and a history of Mwarimu<br>
    Ajabu the uber driver from Mangu <br>
    some litelrature here forever. and a history of Mwarimu<br>
</p>

<div id="caroldiv">
	<img id="carol" width="200px" src="carol.jpg" alt="carol_pic" onMouseDown="delta()"> <br>
	<p id="attnimage"> CLICK ON THE IMAGE TO START </p>
</div>
   
   <?php
	   	//signing forms
	    include "SIGN_IN_form.PHP";
		include "SIGN_UP_form.PHP"; 
    ?>
   



		<!-- script to controll the functionality and visibility   while loging in -->
	<script type="text/javascript">

			function delta(){ 
				// alert("The Dreaded Ajabu Wants To Harvest your Data. Click Close to allow");
				
					// after clicking to allow, the signup and sign in widgets will appear
				document.getElementById("form_containerup").style.visibility = "visible";
				document.getElementById("form_containerin").style.visibility = "visible";
					// hide the picture div
				
						// change multiple CSS properties.
				document.getElementById("caroldiv").style.cssText =' border:dashed;  opacity:0.3; background-color:green ';		
				document.getElementById("links").disabled = "disabled";
				
				}
				
				// https://www.html5andbeyond.com/javascript-css-change-single-or-multiple-css-properties/
	</script>
    
    </body>
</html>
