<?php
session_start();
$session_value=(isset($_SESSION['username']))?$_SESSION['username']:'';
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


				<body style="background-color:rgb(81, 185, 255)">
					
						<nav class="navbar navbar-custom" >
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
						   </div>
						   <?php else: ?>
							<div class="navbar-nav">
								<a class="navbar-item nav-link" href="login.html" style="color: white">Login</a> or
								<a class="navbar-item nav-link" href="signup.html" style="color: white">Register</a>
						   </div>
						   <?php endif; ?>       				
        				</nav>
						


						<!-- margin top of page -->
						<div class="container">
							<div class="movie-grid"></div>
						</div>

						<!-- first nav bar -->
						<div	class="container-md" >
							<nav>
								<div class="nav nav-tabs navbar-dark bg-dark justify-content-center nav-fill" id="nav-tab" role="tablist">
								  <a class="nav-item nav-link active" id="nav-movie-tab" data-toggle="tab" href="#nav-movie1" role="tab" aria-controls="nav-movie1" aria-selected="true">Star Wars</a>
								  <a class="nav-item nav-link" id="nav-movie-tab" data-toggle="tab" href="#nav-movie2" role="tab" aria-controls="nav-movie2" aria-selected="false">Freaky</a>
								  <a class="nav-item nav-link" id="nav-movie-tab" data-toggle="tab" href="#nav-movie3" role="tab" aria-controls="nav-movie3" aria-selected="false">Moonlight</a>
								  <a class="nav-item nav-link" id="nav-movie-tab" data-toggle="tab" href="#nav-movie4" role="tab" aria-controls="nav-movie4" aria-selected="false">Thor</a>
								</div>
							  </nav>
							<!-- tab content-->
							
							<!-- Star wars tab-->
							<div class="tab-content shadowbox" id="nav-tabContent" style="border:solid 10pt orange; margin-bottom: 50pt; border-radius: 7pt;">
								<div class="tab-pane fade show active" id="nav-movie1" role="tabpanel" aria-labelledby="nav-movie1-tab">
									<div class="container">
										<div class="row">
											<div class="col" style="background-color: rgb(0, 0, 0);">
												<img class="Thumb" src="images/new empire.png"  >
											</div>
										
										</div>
									</div>

									<!-- Inside tabs -->
									<nav>
										<div class="nav nav-pills navbar-light bg-dark justify-content-center nav-fill " id="nav-tab"  role="tablist">
										  <a class="nav-item nav-link active" id="nav-synop-tab" data-toggle="tab" href="#nav-synop" role="tab" aria-controls="nav-synop" aria-selected="false">Movie Info</a>
										  <a class="nav-item nav-link" id="nav-trailer-tab" data-toggle="tab" href="#nav-trailer" role="tab" aria-controls="nav-trailer" aria-selected="true">Trailer</a>
										  <a class="nav-item nav-link" id="nav-review-tab" data-toggle="tab" href="#nav-review" role="tab" aria-controls="nav-review" aria-selected="false">Review</a>
										</div>
									</nav>
									<!-- Trailer Tab-->
									<div class="tab-content" id="nav-tabContent2" >
										<div class="tab-pane fade show " id="nav-trailer" role="tabpanel" aria-labelledby="nav-trailer-tab">
											<div class="container2">
												<div class="row">
													<div class="col" >
														<div class="youtube" align="center"><iframe src="https://www.youtube.com/embed/JNwNXF9Y6kY"></iframe></div>
													</div>													
												</div>
											</div>
										</div>
									<!-- Synop Tab -->
										<div class="tab-pane fade show active" id="nav-synop" role="tabpanel" aria-labelledby="nav-synop-tab">
											<div class="container2" >
												<div class="row">
													<div class="col">
													<div class="card text-white bg-dark" style="max-width: 80rem;">
 														<div class="card-header"></div>
  														<div class="card-body">
														<h5 class="card-title">Description</h5>
																<p>
																The adventure continues in this "Star Wars" sequel. Luke Skywalker (Mark Hamill), Han Solo (Harrison Ford), Princess Leia (Carrie Fisher)
																and Chewbacca (Peter Mayhew) face attack by the Imperial forces and its AT-AT walkers on the ice planet Hoth. While Han and Leia escape in the Millennium Falcon, 
																Luke travels to Dagobah in search of Yoda. Only with the Jedi master's help will Luke survive when the dark side of the Force beckons him into the ultimate duel with Darth Vader (David Prowse).	
																</p>
																<div class="row">
																	<div class="col" style="text-align: right;">
																		<p>	Rating:	</p>
																		<p>	Genre:</p>
																		<p>	Original Language:</p>
																		<p>	Director:	</p>
																		<p>	Producer:	</p>
																		<p>	Release Date (Theaters):	</p>
																		<p>	Release Date (Streaming):	</p>
																		<p>	Box Office (Gross USA):	</p>
																		<p>	Runtime:	</p>
																		<p>	Production Co:	</p>
																		<p>	Sound Mix:	</p>
																		<p>	Aspect Ratio:	</p>
																		<p>	View the collection:	</p>
																	</div>
																	<div class="col" >
																		<p>PG (Sci-Fi Action Violence)</p>
																		<p>	Action, Sci Fi, Adventure, Fantasy</p>
																		<p>	English</p>
																		<p> Irvin Kershner</p>
																		<p> Gary Kurtz</p>
																		<p>May 21, 1980  Wide</p>
																		<p>Apr 10, 2015</p>
																		<p>$291.9M</p>
																		<p>2h 4m</p>
																		<p>Lucasfilm Ltd.</p>
																		<p>Surround, Dolby Stereo, Dolby A, Magnetic Stereo 6 Track</p>
																		<p>Scope (2.35:1)</p>
																		<p>Star Wars Saga</p>
																	</div>
																</div>
													
 													 	</div>
													</div>
													</div>
												</div>
											</div>
										</div>
									<!-- Review Tab (4divs) -->
										<div class="tab-pane fade show" id="nav-review" role="tabpanel" aria-labelledby="nav-review-tab">
											<div class="container2">
												<div class="row">
													<div class="col">
														<img class="imageSize" src="images/empire.png" style="padding:30pt" width="300pt" height="300pt">
													</div>
												</div>
											</div>
										</div>
									</div>
									
								</div>

						<!-- Freaky Tab -->			
						<div class="tab-pane fade show " id="nav-movie2" role="tabpanel" aria-labelledby="nav-movie2-tab">
							<div class="container">
								<div class="row">
									<div class="col"  style="background-color: rgb(0, 0, 0);">
										<img class="Thumb" src="images/freaky.jpg" style="">
									</div>
								
							</div>
											</div>
		
											<!-- Inside tabs -->
											<nav>
												<div class="nav nav-pills  navbar-light bg-dark justify-content-center nav-fill " id="nav-tab" role="tablist">
												<a class="nav-item nav-link active" id="nav-synop-tab" data-toggle="tab" href="#nav-synop2" role="tab" aria-controls="nav-synop2" aria-selected="false">Movie Info</a>
												<a class="nav-item nav-link" id="nav-trailer-tab" data-toggle="tab" href="#nav-trailer2" role="tab" aria-controls="nav-trailer2" aria-selected="true">Trailer</a>
												<a class="nav-item nav-link" id="nav-review-tab" data-toggle="tab" href="#nav-review2" role="tab" aria-controls="nav-review2" aria-selected="false">Review</a>
												</div>
											</nav>
											<!-- Trailer Tab-->
											<div class="tab-content" id="nav-tabContent2">
												<div class="tab-pane fade show" id="nav-trailer2" role="tabpanel" aria-labelledby="nav-trailer2-tab">
													<div class="container2">
														<div class="row">
															<div class="col" >
																<div class="youtube" align="center"><iframe src="https://www.youtube.com/embed/JNwNXF9Y6kY"></iframe></div>
															</div>													
														</div>
													</div>
												</div>
											<!-- Synop Tab -->
												<div class="tab-pane fade show active" id="nav-synop2" role="tabpanel" aria-labelledby="nav-synop2-tab">
													<div class="container2" >
														<div class="row">
															<div class="col">

																<div class="card text-white bg-danger mb-3" style="max-width: 80rem;">
																	<div class="card-header"></div>
																		<div class="card-body">
																			<h5 class="card-title">Description</h5>
																			<p>
																			Seventeen-year-old Millie Kessler spends her days trying to survive high school and the cruel actions of the popular crowd. But when she becomes the latest target of the Butcher,
																			the town's infamous serial killer, her senior year becomes the least of her worries. When the Butcher's mystical dagger causes him and Millie to magically switch bodies,
																			the frightened teen learns she has just 24 hours to get her identity back before she looks like a middle-aged maniac forever.
																			</p>
																			<div class="row">
																				<div class="col" style="text-align: right;">	
																					<p> Rating: </p>
																					<p> Genre:</p>
																					<p> Original Language:</p>
																					<p> Director:   </p>
																					<p> Producer:   </p>
																					<p> Writer      </p>
																					<p> Box Office (Gross USA): </p>
																					<p> Runtime:    </p>
																					<p> Production Co. </p>
																					<p> Aspect Ratio:   </p>
																				</div>
																				<div class="col">
																					<p> R (Sexual Content|Strong Bloody Horror Violence)</p>
																					<p> Comedy, Horror</p>
																					<p> English</p>
																					<p> Christopher Landon</p>
																					<p> Jason Blum</p>
																					<p> Michael Kennedy, Christopher Landon</p>
																					<p> Nov 13, 2020  Wide</p>
																					<p> $7.0M</p>
																					<p> 1h 41m</p>
																					<p> Blumhouse Productions</p>																		
																				
																				</div>
																			</div>
																	</div>
																</div>	
															</div>
														</div>
													</div>
												</div>
											<!-- Review Tab (4divs) -->
												<div class="tab-pane fade show" id="nav-review2" role="tabpanel" aria-labelledby="nav-review2-tab">
													<div class="container2">
														<div class="row">
															<div class="col" >
																<img class="imageSize" src="images/empire.png" style="padding:30pt" width="300pt" height="300pt">
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
																
								<!-- Moonlight -->
								<div class="tab-pane fade" id="nav-movie3" role="tabpanel" aria-labelledby="nav-movie3-tab">
								
									<div class="container">
										<div class="row">
											<div class="col" style="background-color: rgb(0, 0, 0);" >
												<img class="Thumb" src="images/moonlight.jpg" >
											</div>
											
										</div>
									</div>

									<!-- Inside tabs -->
									<nav>
										<div class="nav nav-pills  navbar-light bg-dark justify-content-center nav-fill " id="nav-tab" role="tablist">
										<a class="nav-item nav-link active" id="nav-synop3-tab" data-toggle="tab" href="#nav-synop3" role="tab" aria-controls="nav-synop3" aria-selected="false">Movie Info</a>
										<a class="nav-item nav-link" id="nav-trailer3-tab" data-toggle="tab" href="#nav-trailer3" role="tab" aria-controls="nav-trailer3" aria-selected="true">Trailer</a>
										<a class="nav-item nav-link" id="nav-review3-tab" data-toggle="tab" href="#nav-review3" role="tab" aria-controls="nav-review3" aria-selected="false">Review</a>
										</div>
									</nav>
									<!-- Trailer Tab-->
									<div class="tab-content" id="nav-tabContent2">
										<div class="tab-pane fade show " id="nav-trailer3" role="tabpanel" aria-labelledby="nav-trailer3-tab">
											<div class="container2">
												<div class="row">
													<div class="col" >
														<div class="youtube" align="center"><iframe src="https://www.youtube.com/embed/9NJj12tJzqc"></iframe></div>
													</div>													
												</div>
											</div>
										</div>
									<!-- Synop Tab -->
										<div class="tab-pane fade show active" id="nav-synop3" role="tabpanel" aria-labelledby="nav-synop3-tab">
											<div class="container2" >
												<div class="row">
													<div class="col">
															
														<div class="card text-white bg-primary mb-3" style="max-width: 80rem;">
															<div class="card-header"></div>
															<div class="card-body">
																<h5 class="card-title">Description</h5>
																<p class="card-text text-white">A look at three defining chapters in the life of Chiron, a young black man growing up in Miami. 
																His epic journey to manhood is guided by the kindness, support and love of the community that helps raise him.</p>
																
																			<div class="row">
																				<div class="col" style="text-align: right;">	
																					<p>	Rating:	</p>
																					<p>	Genre:</p>
																					<p>	Original Language:</p>
																					<p>	Director:	</p>
																					<p>	Producer:	</p>
																					<p>	Release Date (Theaters):	</p>
																					<p>	Release Date (Streaming):	</p>
																					<p>	Box Office (Gross USA):	</p>
																					<p>	Runtime:	</p>
																					<p>	Production Co:	</p>
																					<p>	Sound Mix:	</p>
																					
																					
																				</div>
																				<div class="col">
																					<p> R (Drug Use|Brief Violence|Some Sexuality)</p>
																					<p> Drama</p>
																					<p> English</p>
																					<p> Barry Jenkins</p>
																					<p> Adele Romanski, Dede Gardner, Jeremy Kleiner</p>
																					<p> Nov 18, 2016  Wide</p>
																					<p> Feb 21, 2017</p>
																					<p> $27.9M</p>
																					<p> 1h 51m</p>
																					<p> Plan B Entertainment, Upload Films, Pastel</p>	
																					<p>	Dolby Digital</p>
																					<p> Scope (2.35:1)</p>																	
																				
																			</div>
																			</div>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									<!-- Review Tab (4divs) -->
										<div class="tab-pane fade show" id="nav-review3" role="tabpanel" aria-labelledby="nav-review3-tab">
											<div class="container2">
												<div class="row">
													<div class="col">
														<img class="imageSize" src="images/empire.png" style="padding:30pt" width="300pt" height="300pt">
													</div>
												</div>
											</div>
										</div>
									
									
								
								</div>
							</div>
							<!-- thor -->
								<div class="tab-pane fade" id="nav-movie4" role="tabpanel" aria-labelledby="nav-movie4-tab">
									<div class="container">
										<div class="row">
											<div class="col" style="background-color: rgb(0, 0, 0);" >
												<img class="Thumb" src="images/thor.jpg" >
											</div>
										
										</div>
									</div>

									<!-- Inside tabs -->
									<nav>
										<div class="nav nav-pills  navbar-light bg-dark justify-content-center nav-fill " id="nav-tab" role="tablist">
										<a class="nav-item nav-link active" id="nav-synop4-tab" data-toggle="tab" href="#nav-synop4" role="tab" aria-controls="nav-synop4" aria-selected="false">Movie Info</a>
										<a class="nav-item nav-link" id="nav-trailer4-tab" data-toggle="tab" href="#nav-trailer4" role="tab" aria-controls="nav-trailer4" aria-selected="true">Trailer</a>
										<a class="nav-item nav-link" id="nav-review4-tab" data-toggle="tab" href="#nav-review4" role="tab" aria-controls="nav-review4" aria-selected="false">Review</a>
										</div>
									</nav>
									<!-- Trailer Tab-->
									<div class="tab-content" id="nav-tabContent2">
										<div class="tab-pane fade show" id="nav-trailer4" role="tabpanel" aria-labelledby="nav-trailer4-tab">
											<div class="container2">
												<div class="row">
													<div class="col" >
														<div class="youtube" align="center"><iframe src="https://www.youtube.com/embed/JNwNXF9Y6kY"></iframe></div>
													</div>													
												</div>
											</div>
										</div>
									<!-- Synop Tab -->
										<div class="tab-pane fade show active" id="nav-synop4" role="tabpanel" aria-labelledby="nav-synop4-tab">
											<div class="container2" >
												<div class="row">
													<div class="col" >
													<div class="card text-white bg-warning mb-3" style="max-width: 80rem;">
														<div class="card-header"></div>
														<div class="card-body">
															<h5 class="card-title">Warning Panel title</h5>
															<p class="card-text text-white">Some quick example text to build on the panel title and make up the bulk of the panel's content.</p>

															<div class="row">
																				<div class="col" style="text-align: right;">	
																					<p>	Rating:	</p>
																					<p>	Genre:</p>
																					<p>	Original Language:</p>
																					<p>	Director:	</p>
																					<p>	Producer:	</p>
																					<p> Writer: </p>
																					<p>	Release Date (Theaters):	</p>
																					<p>	Release Date (Streaming):	</p>
																					<p>	Box Office (Gross USA):	</p>
																					<p>	Runtime:	</p>
																					<p>	Production Co:	</p>
																					<p>	Sound Mix:	</p>
																					<p>	Aspect Ratio:	</p>
																					
																				</div>
																				<div class="col">
																					<p> PG-13 (Intense Sci-Fi Action/Violence)</p>
																					<p> Action, Adventure, Fantasy</p>
																					<p> English</p>
																					<p> Kenneth Branagh</p>
																					<p> Kevin Feige</p>
																					<p> Ashley Miller, Zack Stentz, Don Payne</p>
																					<p> May 6, 2011  Wide</p>
																					<p> Nov 23, 2015</p>
																					<p> $268.0M</p>
																					<p> 1h 53m</p>	
																					<p>	Marvel Studios</p>
																					<p> SDDS, Dolby Digital, Datasat</p>																	
																				
																				</div>
																			</div>
														</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									<!-- Review Tab (4divs) -->
										<div class="tab-pane fade show" id="nav-review4" role="tabpanel" aria-labelledby="nav-review4-tab">
											<div class="container2">
												<div class="row">
													<div class="col">
														<img class="imageSize" src="images/empire.png" style="padding:30pt" width="300pt" height="300pt">
													</div>
												</div>
											</div>
										</div>
								</div>
								</div>
							</div>
						</div>

						
                        <div  class="navbar-b" >
							<p>2020 OT FILMS Canada LP | Privacy Policy | Terms of Use</p>
						</div>


                        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
   						<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

				</body>

	</html>
