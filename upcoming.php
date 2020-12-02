<?php
session_start();
?>


<!DOCTYPE html>
	<html>
				<head>
                    <title>Upcoming</title>
                        <script type="text/javascript" src="upcoming.js"></script>
						<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
						<link rel="stylesheet" type="text/css" href="homestyle.css">
						<link href="https://fonts.googleapis.com/css2?family=Oswald&display=swap" rel="stylesheet">	
						<link rel="stylesheet" href ="upcomingStyle.css">
                        
				</head>


				<body>
						<nav class="navbar navbar-custom ">
                            <img src="images/Logo.png" alt="Logo is missing from the current directory" height="200" width="200"/>
                           <a class="navbar-brand" href="home.html">Home</a> 
                           <a class="navbar-brand" href="upcoming.html">Upcoming</a>
                           <a class="navbar-brand" href="nowPlaying.html">Now Playing</a>
                           <a class="navbar-brand" href="bookSeats.php">Book Seats</a>
                           <a class="navbar-brand" href="covid.html">COVID-19</a> 
                           <?php if (isset($_SESSION['username'])): ?>
							<div class="navbar-nav">
								<a class="navbar-item nav-link" href="#" style="color: white">Welcome <?= $_SESSION['username'] ?></a>
								<a class="navbar-item nav-link" href="logout.php" style="color: white">Logout</a>
						   </div>
						   <?php else: ?>
							<div class="navbar-nav">
								<a class="navbar-item nav-link" href="login.html" style="color: white">Login</a> or
								<a class="navbar-item nav-link" href="signup.html" style="color: white">Register</a>
						   </div>
						   <?php endif; ?>    				
        				</nav>

        				<!-- Star wars -->
        				<div class="row">
        					<!-- movie image column -->
        					<div class="column">
        						<img class="imageSize" src="images/empire.png" style="padding:30pt";>
        					</div>
        					<!-- movie info column -->


        					  					


        					<div class="column2" >
        							<br><h1><u>Star Wars The Empire Strikes Back</u></h1><br>
		        						<p class="upcoming-p">
		        							Run time: 2h 4m<br>
		        							Rating: PG<br>
		        							Genre: Scifi, Action<br>
		        							Date: 12/04/2020 <br><br><br>
		        							Trailer: <a rel="stylesheet" type="text/css" href="https://www.youtube.com/watch?v=JNwNXF9Y6kY&ab_channel=StarWars" target="_blank"><img class="imgply" src="images/play.PNG" target="_blank"></a>
		        						</p>
        						<!-- Like/Dislike buttons -->	
        							<div class="btn-group-vertical">
        						
        									<button type="button" style="background-color:orange" onclick="AddLike()">Like</button>
											<p>Likes: <a id="lClicks">0</a></p>
											<button type="button"style="background-color:orange" onclick="AdddisLike()">Dislike</button>
											<p>Dislikes: <a id="dClicks">0</a></p>
									</div>
        					</div>



			        					<div class="column">

			        						<br><h1><u>Testimonials</u></h1>
								<div style="width:auto; margin-right: 50pt; vertical-align: middle;">
									<p style="vertical-align: middle;">Most intense in the original trilogy but also the most entertaining! <u>November 20 2020</u></p>
									<br>
									<br>
									<p style="vertical-align: middle;">The Empire Strikes back is widely regarded to be the best chapter for a good reason. It is very well directed and has one of the best story lines of any episode. <u>October 04 2020</u></p>
									<br>
									<br>
									The star wars name is now a household name, with 9 movies in its line-up. The original trilogy is no doubt incredible, but honestly this movie is as close to perfect as it gets. <u>January 01 2020</u>
								</div>
			        					</div>  				


					

        				</div>

        				<!-- Freaky -->
    					<div class="row">
    								<!-- movie image column -->
        							<div class="column">
        								<img class="imageSize" src="images/freaky.JPG" style="padding:30pt";>
									</div>
									<!-- movie info column -->
									<div class="column2" >
										
										<h1><u>Freaky</u></h1><br>
										<p>
											Run time: 1h 41m<br>
		        							Rating: R<br>
		        							Genre: Horror Comedy<br>
		        							Date: 12/11/2020 <br><br><br>
		        							Trailer: <a rel="stylesheet" type="text/css" href="https://www.youtube.com/watch?v=EqPnIcDW9g0&ab_channel=UniversalPictures" target="_blank"><img class="imgply" src="images/play.PNG" target="_blank"></a>
										</p>


										<div class="btn-group-vertical">
        						
        									<button type="button" style="background-color:orange" onclick="AddLike()">Like</button>
											<p>Likes: <a id="lClicks">0</a></p>
											<button type="button"style="background-color:orange" onclick="AdddisLike()">Dislike</button>
											<p>Dislikes: <a id="dClicks">0</a></p>
										</div>
									</div>

									<div class="column">
			        						<br>
											<h1><u>Testimonials</u></h1>
											
											<div style="width:auto; margin-right: 50pt; vertical-align: middle;">
												<p style="vertical-align: middle;">Vince Vaughn explores his feminine side when his character inhabits the body of a high-school girl in this slasher comedy. <u>May 04 2020</u></p>
												<br>
												<br>
												<p style="vertical-align: middle;">Director Christopher Landon's Freaky is breathlessly stolen by Vince Vaughn, who delivers a character both terrifying and lovable in equal measure. <u>July 17 2020</u></p>
												<br>
												<br>
												Vaughn steals more than a body in this snarky, over-the-top mashup -- he steals the whole show. <u>September 07 2020</u>
											</div>

			        				</div>  	
							</div>
						</div>

						<!-- Downton Abbey -->
						<div class="row">
    								<!-- movie image column -->
        							<div class="column">
        								<img class="imageSize" src="images/downton.JPG" style="padding:30pt";>
									</div>
									<!-- movie info column -->
									<div class="column2" >
										<br>
										<h1><u>Downton Abbey</u></h1><br>
										<p>
											Run time: 2h 2m<br>
		        							Rating: PG<br>
		        							Genre: Drama<br>
		        							Date: 12/18/2020 <br><br><br>
		        							Trailer: <a rel="stylesheet" type="text/css" href="https://www.youtube.com/watch?v=tu3mP0c51hE&ab_channel=FocusFeatures" target="_blank"><img class="imgply" src="images/play.PNG" target="_blank"></a>
										</p>


										<div class="btn-group-vertical">
        						
        									<button type="button" style="background-color:orange" onclick="AddLike()">Like</button>
											<p>Likes: <a id="lClicks">0</a></p>
											<button type="button"style="background-color:orange" onclick="AdddisLike()">Dislike</button>
											<p>Dislikes: <a id="dClicks">0</a></p>
										</div>
									</div>
									<div class="column">
			        						<br>
											<h1><u>Testimonials</u></h1>
											
											<div style="width:auto; margin-right: 50pt; vertical-align: middle;">
												<p style="vertical-align: middle;">Sumptuous and lovely, this film is a fitting capper to the hugely popular series; it will positively thrill longtime fans. All the flowers are in the bouquet. <u>January 24 2020</u></p>
												<br>
												<br>
												<p style="vertical-align: middle;">From its spectacularly detailed aesthetic to the characters' march down well-worn personality paths, the movie argues insistently for the status quo. <u>February 03 2020</u></p>
												<br>
												<br>
												For a few fleeting moments, they've returned us to a time of bygone glamor when class trumped crass and even treachery was sweetly done. <u>April 16 2020</u>
											</div>

			        				</div>  
								</div>
						</div>
						<!-- Moonlight -->
						<div class="row">
    								<!-- movie image column -->
        							<div class="column">
        								<img class="imageSize" src="images/moonlight.JPG" style="padding:30pt";>
									</div>
									<!-- movie info column -->
									<div class="column2" >
										<br>
										<h1><u>Moonlight</u></h1><br>
										<p>
											Run time: 1h 51m<br>
		        							Rating: R<br>
		        							Genre: Drama<br>
		        							Date: 12/26/2020 <br><br><br>
		        							Trailer: <a rel="stylesheet" type="text/css" href="https://www.youtube.com/watch?v=9NJj12tJzqc&ab_channel=A24" target="_blank"><img class="imgply" src="images/play.PNG" target="_blank"></a>
										</p>


										<div class="btn-group-vertical">
        						
        									<button type="button" style="background-color:orange" onclick="AddLike()">Like</button>
											<p>Likes: <a id="lClicks">0</a></p>
											<button type="button"style="background-color:orange" onclick="AdddisLike()">Dislike</button>
											<p>Dislikes: <a id="dClicks">0</a></p>
										</div>
									</div>
									<div class="column">
			        						<br>
											<h1><u>Testimonials</u></h1>
											
											<div style="width:auto; margin-right: 50pt; vertical-align: middle;">
												<p style="vertical-align: middle;">This film about a young black man's coming of age is both a disarmingly personal film and an urgent social document. <u>April 20 2020</u></p>
												<br>
												<br>
												<p style="vertical-align: middle;">It's difficult to distill the power, grace, and grit that make this drama so unforgettable. <u>April 25 2020</u></p>
												<br>
												<br>
												Hype would bruise Barry Jenkins' Moonlight, which is so delicate in its touch that the usual superlatives sound unusually shrill. It's the gentlest, most suggestive of great films. <u>April 27 2020</u>
											</div>

			        				</div>  
							</div>
						</div>
						<!-- Interstellar -->
						<div class="row">
    								<!-- movie image column -->
        							<div class="column">
        								<img class="imageSize" src="images/stellar.JPG" style="padding:30pt";>
									</div>
									<!-- movie info column -->
									<div class="column2" >
										<br>
										<h1><u>Interstellar</u></h1><br>
										<p>
											Run time: 2h 45m<br>
		        							Rating: PG-13<br>
		        							Genre: Action, Adventure, Sci-Fi<br>
		        							Date: 01/01/2021 <br><br><br>
		        							Trailer: <a rel="stylesheet" type="text/css" href="https://www.youtube.com/watch?v=zSWdZVtXT7E&ab_channel=WarnerBros.UK%26Ireland" target="_blank"><img class="imgply" src="images/play.PNG" target="_blank"></a>
										</p>


										<div class="btn-group-vertical">
        						
        									<button type="button" style="background-color:orange" onclick="AddLike()">Like</button>
											<p>Likes: <a id="lClicks">0</a></p>
											<button type="button"style="background-color:orange" onclick="AdddisLike()">Dislike</button>
											<p>Dislikes: <a id="dClicks">0</a></p>
										</div>
									</div>
									<div class="column">
			        						<br>
											<h1><u>Testimonials</u></h1>
											
											<div style="width:auto; margin-right: 50pt; vertical-align: middle;">
												<p style="vertical-align: middle;">In 2001, Kubrick saw a future that was out of our hands. For Nolan, our reliance on one another is all we've got. <u>June 12 2020</u></p>
												<br>
												<br>
												<p style="vertical-align: middle;">Unless you're well-versed in the physics of wormholes, don't expect to understand the intricacies of "Interstellar" science. <u>July 06 2020</u></p>
												<br>
												<br>
												<p>In Christopher Nolan's science-fiction parable "Interstellar," Earth is dying, and a team of astronauts searches the universe for a new home for the human race. <u>July 09 2020</u></p>
											</div>

			        				</div>  
							</div>
						</div>	

						<!-- Thor -->
						<div class="row">
    								<!-- movie image column -->
        							<div class="column">
        								<img class="imageSize" src="images/thor.JPG" style="padding:30pt";>
									</div>
									<!-- movie info column -->
									<div class="column2" >
										<br>
										<h1><u>Thor</u></h1><br>
										<p>
											Run time: 1h 53m<br>
		        							Rating: PG-13<br>
		        							Genre: Adventure, Action, Fantasy<br>
		        							Date: 01/08/2021 <br><br><br>
		        							Trailer: <a rel="stylesheet" type="text/css" href="https://www.youtube.com/watch?v=JOddp-nlNvQ&ab_channel=MarvelEntertainment" target="_blank"><img class="imgply" src="images/play.PNG" target="_blank"></a>	
										</p>


										<div class="btn-group-vertical">
        						
        									<button type="button" style="background-color:orange" onclick="AddLike()">Like</button>
											<p>Likes: <a id="lClicks">0</a></p>
											<button type="button"style="background-color:orange" onclick="AdddisLike()">Dislike</button>
											<p>Dislikes: <a id="dClicks">0</a></p>
										</div>
									</div>
									<div class="column">
			        						<br>
											<h1><u>Testimonials</u></h1>
											
											<div style="width:auto; margin-right: 50pt; vertical-align: middle;">
												<p style="vertical-align: middle;">Armed with lessons about international politics and diplomacy, this is an entertaining, surprisingly astute film defined by top-shelf special effects and a compelling, if crowded, storyline. <u>August 24 2020</u></p>
												<br>
												<br>
												<p style="vertical-align: middle;">"Thor," directed by Kenneth Branagh, is a programmed triumph of commercial calculation over imagination. <u>October 16 2020</u></p>
												<br>
												<br>
												Turn off the snark-o-meter, and this is a return to form for Marvel, introducing a new hero we'll be happy to see again in, oh, about a year or so. <u>November 09 2020</u>
											</div>

			        				</div>  
							</div>
						</div>	



                        <div class="navbar-b">
							<p>2020 OT FILMS Canada LP | Privacy Policy | Terms of Use</p>
						</div>


                        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
   						<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

				</body>

	</html>
