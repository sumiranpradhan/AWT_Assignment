<!DOCTYPE html>
<html>
<head>
	<title>My Image Gallery | Cars</title>
  <link rel="icon" type="img/png" href="img.png"/>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Karla&display=swap" rel="stylesheet">
	<script src="https://kit.fontawesome.com/fe786c7701.js" crossorigin="anonymous"></script>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body style="background-color:#2d323e;">
	<div class="container">
		<div class="jumbotron mt-2" id="div11">
		
		
		<h1 id="h11"><a href="index.php"> <span style="color:#161625;">My Image Gallery</span> </a></h1>
		</div>
		<div id="bdiv">
			<button type="button" class="btn btn-primary" id="movb11" onclick = "window.location.href='./movie_images.php';">Movies</button>
			<button type="button" class="btn btn-warning" id="fampb11" onclick = "window.location.href='./famp_images.php';">Favourite Personalities</button>
			<button type="button" class="btn btn-danger" id="carb11" onclick = "window.location.href='./car_images.php';">Cars</button>
			<br>
			<img src="./smit_logo.png" alt="" id = "smit_logo">
		</div>

		
<!-- SMIT LOGO -->


		
<!-- HEYYYYYYYYYYYYYYYYYYYYYY-->


		<div id="calbmi">
			<center><b>Know your BMI  :</b></center>
			<form name="bmi">
				<center>
					<table bgcolor="#ffffff" border="2"  bordercolor="#2d323e" rules="none" cellspacing="0" cellpadding="4">
						<tr style="color:#2d323e;"><td><b><i>Weight(kg) : </i></b></td>
						<td ><div align="right"><input type=TEXT size="15" name=weight  value="Enter your weight" onClick=value=""></div></td>
						<tr style="color:#2d323e;"><td><b><i>Height(cm) : </i></b></td>
						<td ><div align="right"><input type=TEXT size="15" name=height  value="Enter your height"  onClick=value=""></td>

						<td><input type="button" value="Calculate" style="background-color:#2c3e50; color:#ecf0f1;" onClick="computeform(this.form)"></td></tr></div>
						<!--td><input type="reset" value = "Reset" onClick="ClearForm(this.form)"-->

						<tr><TD><DIV ALIGN=CENTER style="color:#2d323e;"><b> <i>Your BMI: </i> </b></DIV></TD>
							<TD><DIV ALIGN=CENTER style="color:#2d323e;"><b><i>My Comment:</i></b></DIV></TD></tr>





						<tr>	<TD><INPUT TYPE=TEXT NAME=bmi     SIZE=8 ></TD>
							<TD><INPUT TYPE=TEXT NAME=my_comment size=45></TD></tr>
						</TABLE>


					</form>

					
					<HR>
					<B style="color:red;align:center;">Disclaimer :</B> This form is based on the calculation of
					<A HREF="http://phaster.com/unpretentious/bmi.html"><I>"Body Mass Index"</I></A>
					and is only meant to be a demonstration of how Javascript(tm) could be used
					on a Web Page. Information it contains may not be accurate and is not designed
					or intended to serve as medical advice. I am not liable for any physical or
					psychological damages suffered as a result of using this script.

				<hr>

		</div>

	<!---FAMOUS-->

		<div id="car">
		<h2 id="h22"><u>My Favourite Cars</u></h2>

			<?php
			$pic = array('https://images.pexels.com/photos/3354648/pexels-photo-3354648.jpeg?auto=compress&cs=tinysrgb&dpr=3&h=750&w=1260',
						'https://images.pexels.com/photos/4024484/pexels-photo-4024484.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940',
						'https://images.pexels.com/photos/1402787/pexels-photo-1402787.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940',
						'https://images.pexels.com/photos/3311574/pexels-photo-3311574.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940',
						'https://images.pexels.com/photos/3422964/pexels-photo-3422964.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940'
						
					);
			shuffle($pic);
			$checker = array();
			?>


			<ul>
				<?php
				for( $i = 0; $i < 5; $i++)
					echo "<li style=\"display: inline-block; margin-right:10px; margin-bottom:10px; border: 3px solid #ddd;
						border-radius: 4px; \">
										<img src=\"$pic[$i]\" width=\"400\" height=\"300\">
									</li>";


				?>
			</ul>
		</div>

		<div>
		<h2 id="introclick"><b>Click on the header above to go to the index page.</b></h2>

		</div>
		
	

  <div class="container" style="padding: 1.5%; ">
    <div class="footer" style="background-color:#ecf0f1; color:#2d323e;; text-align: center; box-shadow: 1px 1px 6px 0px #000; padding: 5px;">
      <h1 style="font-family=Times New Roman, serif;"><b>Contact Me</h1>
      <h3 style="font-family: Zapf Chancery, cursive;">Name : Sumiran Pradhan</h3>
      <h3 style="font-family: Zapf Chancery, cursive;">Regn. No. : 201800291</h3>
      <h3 style="font-family: Zapf Chancery, cursive;">Email : sumiran_201800291@smit.smu.edu.in</h3>


    </div>
  </div>


	<script type="text/javascript" src="gallery.js"></script>
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>
