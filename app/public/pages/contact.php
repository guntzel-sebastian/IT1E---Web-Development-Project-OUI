<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Contact</title>
        <link rel="stylesheet" type="text/css" href="../css/contactstyle.css"/>
        <link rel="stylesheet" href="../css/normalize.css">
	</head>

	<body>
		<div id="container">   

            <header> <!--header-->
                <div class="titlelocation">
                    <img src="../img/Logo-02.png" alt="logo">
                </div>

                <ul><!--nav bar-->
                    <li><a href="../index.html">Home</a></li>
                    <li><a href="menu.html">Menu</a></li>
                    <li><a href="aboutus.html">About Us</a></li>
                    <li><a href="contact.php"><u>Contact</u></a></li>
                </ul>

				<div class="dropdown"><!--drop down nav bar-->
					<button class="dropbtn"><img src="../img/dropbut.png" alt="dropbut"></button>
					<div class="dropdown-content">
						<a href="../index.html">Home</a>
		                <a href="menu.html">Menu</a>
		                <a href="aboutus.html">About Us</a>
		                <a href="contact.php">Contact</a>
					</div>
				</div>

            </header>

            <div class="contentlocation"><!--body-->

            	<div class="content"><!--content-->

			            <h1><u>Contact Us</u></h1>
			            <h2>06-89562345</h2>
			            <h2>info@oui.nl</h2>
			            <br>

			            <div class="singleicon">
			            <img src="../img/Facebook_red.png" alt="Facebookred">
			            <h2>[Facebook]</h2>
			        	</div>

			        	<div class="singleicon">
			            <img src="../img/instagram_red.png" alt="instagramred">
			            <h2>[@Instagram]</h2>
			        	</div>

			        	<div class="singleicon">
			            <img src="../img/Twitter_red.png" alt="Twitterred">
			            <h2>[@Twitter]</h2>
			            </div>

			            <div class="singleicon">
			            <img src="../img/YouTube_red.png" alt="YouTubered">
			            <h2>[YouTube]</h2>
			        	</div>

			            <br/>
			            
			            <div class="signuptogether"><!--newsletter-->
			            <h1><u>Sign up for our Newsletter!</u></h1>
			        	</div>

			        	<?php
							if($_SERVER["REQUEST_METHOD"] == "POST"){
							$email = filter_input(INPUT_POST, "email", FILTER_VALIDATE_EMAIL);
				
							
							}
						?>
		
						<form name="contact" action="contact.php" method="POST">
							<div>
								<input type="text" name="email" id="email" required placeholder="Enter your email">		
								<input type="submit" name="submit" value="Sign Up">
							</div>

						</form>


					<!--icon of body part-->
		            <img id="croissant" src="../img/illustrations_red_croissant.png" alt="croissant">
	            	<img id="tea" src="../img/illustrations_red_tea.png" alt="tea">

	            </div>
       	    </div>

         
		
			 <footer><!--footer-->

            	<div class="location">
                	<a href = "https://www.google.com/maps/place/%D0%93%D1%80%D0%BE%D0%BD%D0%B8%D0%BD%D0%B3%D0%B5%D0%BD/@53.2217873,6.4956538,12z/data=!3m1!4b1!4m5!3m4!1s0x47c83286b462cca7:0xcb4b5086f9a6c8dc!8m2!3d53.2193835!4d6.566501"><img src="../img/location.png" alt="location"></a>

                	<p><a href = "https://www.google.com/maps/place/%D0%93%D1%80%D0%BE%D0%BD%D0%B8%D0%BD%D0%B3%D0%B5%D0%BD/@53.2217873,6.4956538,12z/data=!3m1!4b1!4m5!3m4!1s0x47c83286b462cca7:0xcb4b5086f9a6c8dc!8m2!3d53.2193835!4d6.566501"><b>Grotedrip 31 | Groenigen</b></a></p>
                </div>

                <!--social media icon-->
                	<ul>

	                <li><a href="https://www.instagram.com/"><img src="../img/instagram.png" alt="instagram"></a></li>
	                <li><a href="https://www.facebook.com/"><img src="../img/fcb.png" alt="Facebook"></a></li>
					<li><a href="https://twitter.com/"><img src="../img/twitter.png" alt="Twitter"></a></li>
					<li><a href="https://www.youtube.com/"><img src="../img/youtube.png" alt="YouTube"></a></li>

					</ul>
                
                
            </footer>
            
        </div>
	</body>
</html>