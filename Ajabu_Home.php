
	<?php
	define('ajabu_links', True);
	define('SIGN_IN_form', True);
	define('SIGN_UP_form', True);
		//display links on the side
	include 'header.html';
	include "ajabu_links.php";
	?>

			<h1> Ajabu Africa Two </h1>

			<p id="">  Ajabu the uber driver from Mangu <br>
			some litelrature here forever. and a history of Mwarimu<br>
			Ajabu the uber driver from Mangu <br>
			some litelrature here forever. and a history of Mwarimu<br>
			Ajabu the uber driver from Mangu <br>
			some litelrature here forever. and a history of Mwarimu<br>
			</p>

			<div id="caroldiv">
				<img id="carol" width="200px" src="carol.jpg" alt="carol_pic" onMouseDown="delta()">
				<h4 id="attnimage"> CLICK ON THE IMAGE TO START </h4>
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
			// after clicking to allow, the signup and sign in fwidgets will appear
			document.getElementById("form_containerup").style.visibility = "visible";
			document.getElementById("form_containerin").style.visibility = "visible";
			// reduce the picture opacity and changebackground color

			// change multiple CSS properties.
			document.getElementById("caroldiv").style.cssText =' border:dashed;  opacity:0.3; background-color:green ';		
			document.getElementById("links").disabled = "disabled";
			}
			// https://www.html5andbeyond.com/javascript-css-change-single-or-multiple-css-properties/
		</script>
	</body>
</html>