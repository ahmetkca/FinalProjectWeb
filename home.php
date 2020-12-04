<?php
session_start();
?>

<!DOCTYPE html>
	<html>
				<head>
                    <title>Home</title>
                        
						<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

						<link rel="stylesheet" href ="homepagestyle.css">
						<link href="https://fonts.googleapis.com/css2?family=Oswald&display=swap" rel="stylesheet">						
						<script type="text/javascript" src ="homepagejava.js"></script>
						<link rel="icon" href="images/Logo.png">
				</head>


				<body style="background-image: url('images/starnight.jpg');">
						<nav class="navbar navbar-custom ">
                            <img src="images/Logo.png" alt="Logo is missing from the current directory" height="200" width="200"/>
                           <a class="navbar-brand" href="home.php">Home</a> 
                           <a class="navbar-brand" href="upcoming.php">Upcoming</a>
                           <a class="navbar-brand" href="nowPlaying.php">Now Playing</a>
                           <a class="navbar-brand" href="bookSeats.php">Book Seats</a>
						   <a class="navbar-brand" href="covid.php">COVID-19</a> 
						   <?php if (isset($_SESSION['username'])): ?>
							<div class="navbar-nav">
								<a class="navbar-item nav-link" href="#" style="color: white">Welcome <?= $_SESSION['username'] ?></a>
								<a class="navbar-item nav-link" href="logout.php" style="color: white">Logout</a>
								<a class="navbar-item nav-link" href="bookings.php" style="color: white">Your Receipts</a>
						   </div>
						   <?php else: ?>
							<div class="navbar-nav">
								<a class="navbar-item nav-link" href="login.html" style="color: white">Login</a> or
								<a class="navbar-item nav-link" href="signup.html" style="color: white">Register</a>
						   </div>
						   <?php endif; ?>	
						   
						   				
						</nav>

						<!-------------------------------------------------------------------------------------------------------------->

							<h1>UPCOMING RELEASES</h1>

							<!-- Slideshow container -->
							<table class="center">

								<tr>
									
									<!-- previous button -->
									<td>
										<a id="prev" onclick="prevslide()">&#10094;</a>
									</td>

									<!-- each image given and id used for slideshow -->
									<td>
										<img src="images/freaky.jpg" height="450" width="800" id="0" style="border: 5px solid rgb(81, 185, 255);">
										<img src="images/downton.jpg" height="450" width="800" id="1" style="display: none; border: 5px solid rgb(81, 185, 255);">
										<img src="images/moonlight.jpg" height="450" width="800" id="2" style="display: none; border: 5px solid rgb(81, 185, 255);">
										<img src="images/stellar.jpg" height="450" width="800" id="3" style="display: none; border: 5px solid rgb(81, 185, 255);">
										<img src="images/simpsons.jpg" height="450" width="800" id="4" style="display: none; border: 5px solid rgb(81, 185, 255);">
										<p id="slidenum" style="color: rgb(81, 185, 255); text-align: center; font-size: 20pt;">1/5</p>
									</td>

									<!-- next button -->
									<td>
										<a id="next" onclick="nextslide()">&#10095;</a>
									</td>

								</tr>

							</table>

							<div style="height: 100px;"> </div>

							<h1>OUR LOCATIONS</h1>
						
						<!-- styled table with locations, contact info, and linked images -->
						<div style="background-image: url('images/moviesback.jpg');">
							<table border="10" class="center" style="border-color: rgb(81, 185, 255); background-color: orange;">

								<tr id="maps">

									<td style="padding: 30pt;">
										4630  Islington Ave <br>
										Toronto <br>
										Ontario <br>
										M9V 2X5 <br>
										416-745-1168 <br>
										otfilms.islington@gmail.com <br>
									</td>

									<td>
										<a href="https://www.google.ca/maps/place/Cineplex+Odeon+Oshawa+Cinemas/@43.9415283,-78.8390465,17z/data=!3m1!4b1!4m5!3m4!1s0x89d51b4ca18d190d:0xbb7765b56a1ec70e!8m2!3d43.9415283!4d-78.8368578">
											<img src="images/map1.png" height="450" width="600">
										</a>
									</td>

								</tr>

								<tr id="maps">

									<td style="padding: 30pt;">
										1991  Carling Ave <br>
										Ottawa <br>
										Ontario <br>
										K1Z 7B5 <br>
										613-292-9997 <br>
										otfilms.carling@gmail.com <br>
									</td>

									<td>
										<a href="https://www.google.ca/maps/place/Cineplex+Cinemas+Markham+and+VIP/@43.849049,-79.3253107,17z/data=!3m1!4b1!4m5!3m4!1s0x89d4d45be01aa7cd:0xad91b4bf28ce834a!8m2!3d43.849049!4d-79.323122">
											<img src="images/map2.png" height="450" width="600">
										</a>
									</td>

								</tr>

								<tr id="maps">

									<td style="padding: 30pt;">
										4876 Jasper Avenue <br>
										Edmonton <br>
										Alberta <br>
										T5J 3N2 <br>
										780-242-8397 <br>
										otfilms.jasper@gmail.com <br>
									</td>

									<td>
										<a href="https://www.google.ca/maps/place/Cineplex+Cinemas+Scarborough/@43.7755422,-79.2578534,17z/data=!3m2!4b1!5s0x89d4d1a656fe1fc3:0x938ce8ab9e24870!4m5!3m4!1s0x89d4d1a53b902955:0xb0f5c56eb5ae7de9!8m2!3d43.7755422!4d-79.2556647">
											<img src="images/map3.png" height="450" width="600">
										</a>
									</td>

								</tr>

							</table>
						</div>

						<div style="height: 100px;"> </div>
						
						<!-- imax link/image -->
						<a href="https://www.imax.com/">
							<img src="images/imax.jpg" style="display: block; margin-left: auto; margin-right: auto;">
						</a>

							<img src="images/stars.png" class="rotate180" style="width: 100%; z-index: 0;">
						<!-------------------------------------------------------------------------------------------------------------->
						

						<div class="navbar-b">
							<p>2020 OT FILMS Canada LP | Privacy Policy | Terms of Use</p>
						</div>
                        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
   						<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

				</body>

	</html>
