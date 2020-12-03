<?php
session_start();
?>
<!DOCTYPE html>
	<html>
				<head>
                    <title>Now Playing</title>
                        
						<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
					    
						<link rel="stylesheet" href ="homestyle.css">
						<link href="https://fonts.googleapis.com/css2?family=Oswald&display=swap" rel="stylesheet">	
						<link rel="stylesheet" href="nowPlayingStyle.css">
						<link rel="icon" href="images/Logo.png">
						<script async src="https://static.addtoany.com/menu/page.js"></script>
                        
				</head>


				<body>
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
								<a class="navbar-item nav-link" href="bookings.php" style="color: white">Your Bookings</a>
						   </div>
						   <?php else: ?>
							<div class="navbar-nav">
								<a class="navbar-item nav-link" href="login.html" style="color: white">Login</a> or
								<a class="navbar-item nav-link" href="signup.html" style="color: white">Register</a>
						   </div>
						   <?php endif; ?>    				
        				</nav>

                        <div class="navbar-b">
							<p>2020 OT FILMS Canada LP | Privacy Policy | Terms of Use</p>
						</div>
                        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
   						<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

						<div>
						   <table>
							   <tr>
							   <td>
								  <p><img src="images/newhope.png" alt="Star Wars A New Hope" height="120%" width="60%" class="img"/></p>
							   </td>
							   <td>
								   <h1>Star Wars: A New Hope</h1>
								   <h2 style="color:rgb(81, 185, 255)"><strong>Current Big Premiere</strong></h2>
								   <p class="upperinfo">Run time: 125 min<br>
								   Rating: PG<br>
								   Genre: Adventure/ Sci Fi<br>
								   Trailer: <a href="https://www.youtube.com/watch?v=1g3_CFmnU7k" target="_blank" class="play-button"><i class="circle imgply"></i></a><br><br>
								   <button onclick="document.location='bookSeats.php'" class="butt" Style="margin-top: 3px">Buy Tickets </button>
								   <div class="a2a_kit a2a_kit_size_32 a2a_default_style">
									<a class="a2a_dd" href="https://www.addtoany.com/share"></a>
									<a class="a2a_button_facebook"></a>
									<a class="a2a_button_twitter"></a>
									<a class="a2a_button_email"></a>
									</div>
								   <h2>Cast</h2>
								   <p>Mark Hamill, Harrison Ford, Carrie Fisher, Alec Guinness and Peter Cushing.</p>
									</td>
							</tr>
						   </table>
						</div>
						<div class="sin">
							<h3>Synopsis</h3>
							<p>After Princess Leia, the leader of the Rebel Alliance, is held hostage by Darth Vader, Luke and Han Solo must free her and destroy the powerful weapon created by the Galactic Empire.</p>
							<h4>Initital Release</h4>
							<p>1977</p>
							<h4>Cast</h4>
							<p>Mark Hamill - Luke Skywalker, 
								Harrison Ford - Han Solo, 
								Carrie Fisher - Princess Leia Organa, 
								Peter Cushing - Grand Moff Tarkin, 
								Alec Guinness - Ben Obi-Wan Kenobi, 
								Anthony Daniels - C-3PO, 
								Kenny Baker - R2-D2, 
								Peter Mayhew - Chewbacca, 
								David Prowse - Darth Vader, 
								Phil Brown - Uncle Owen, 
								Shelagh Fraser - Aunt Beru, 
							</p>
							<h4>Director</h4>
							<p>George Lucas</p>
							<h4>Run time</h4>
							<p>125 min</p>
							<h4>Genre</h4>
							<p>Adventure/ Sci Fi</p>

							<h3>Testimonials</h3>
							<p>Few films before or after it have managed to include such a celebrated, recognizable score - thanks to the masterful compositions by John Williams. <u>August 31 2020</u>
								<br>
								<br>	
								Few films are ingrained in pop culture like Star Wars, partly because few films changed cinema like Star Wars. <u>July 5, 2020</u>
								<br>
								<br>
								Star Wars is not just a movie to me. It's not just a movie to a lot of people. It's a part of who we are. It defines us. It's an important piece of our lives and it will live on in all of us forever. <u>May 4, 2020</u>
						</p>
						</div>
						
				</body>

	</html>
