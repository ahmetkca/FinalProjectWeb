<?php
session_start();
?>

<!DOCTYPE html>
	<html>
				<head>
                    <title>COVID-19</title>
                        
						<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
					    
						<link rel="stylesheet" href ="homestyle.css">
						<link rel="stylesheet" href="covidstyle.css">
						<link href="https://fonts.googleapis.com/css2?family=Oswald&display=swap" rel="stylesheet">	
						<link rel="icon" href="images/Logo.png">
                        
				</head>


				<body>
						<!a navigation header bar atop the page/>
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
                               				
						</nav><!an information bar at the bottom og the page/>
						<div class="navbar-b">
							<p>2020 OT FILMS Canada LP | Privacy Policy | Terms of Use</p>
						</div>
                        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
   						<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
						
						<br>
						<h1>Covid-19 Policies</h1>

						<div class="container-md"><!creates a sub navigation bar that hides the infromation without the matching id so only the corispoding information is vissable/>
							<nav>
								<div class="nav nav-tabs justify-content-center nav-fill" id="nav-tab" role="tablist">

								  <a class="nav-item nav-link active" id="Face-Mask-Policy" data-toggle="tab" href="#nav-Policy" role="tab" aria-controls="nav-Policy" aria-selected="true">Face Mask Policy</a>
								  <a class="nav-item nav-link" id="Plane-your-Visit" data-toggle="tab" href="#nav-Plan" role="tab" aria-controls="nav-Plan" aria-selected="false">Plan Your Visit</a>
								  <a class="nav-item nav-link" id="Contact-Tracing" data-toggle="tab" href="#nav-Contact" role="tab" aria-controls="nav-Contact" aria-selected="false">Contact Tracing</a>  
								  <a class="nav-item nav-link" id="What-Were-Doing" data-toggle="tab" href="#nav-Doing" role="tab" aria-controls="nav-Doing" aria-selected="false">What We're Doing</a>
								</div>
							  </nav>
						</div>
						<div class="tab-content" id="nav-tabContent"><!foramts the shown information at the top of the navigation area instead of displaying it in the notrmal part of the page />
						<div class="tab-pane fade show active" id="nav-Policy" role="tabpanel" aria-labelledby="Face-Mask-Policy">
							<div class="shown">
								<h1>Face Mask Policy</h1><!the first sub page of info auto loaded upon page enetry/>
								<h2>Policy</h2>
								<p>In compliance with local health regulations and/or by-laws, it is mandatory to wear a non-medical face covering over your nose, mouth and chin while you are on the premises of any OT Film's locations. You may remove your face covering to enjoy your concessions when seated in your auditorium.</p>
								<ul>
									<li>Every OT Film Cast and Crew member will be wearing proper protective equipment as physical distancing might not always be possible.</li>
									<li>Although physical distancing may not always be possible at all OT Film locations, we strogly recommend all vistors make their best attempts at physical distancing</li>
									<li>Masks are required to be worn by patrons at all times during their visit when not seated in the theatre</li>
								</ul>
								<h2><img src="images/mask.png" alt="error loading mask image" width="500" height="250"/></h2>
							</div>
						</div>

						<div class="tab-pane fade" id="nav-Contact" role="tabpanel" aria-labelledby="Contact-Tracing">		
							<div class="shown">
							<h1>Contact Tracing</h1><!Seconf subpage loaded when user select the optioon form the nav bar/>
							<div>
								<h2>Tracing</h2>
								<p>As per provincial requirements, OT Films has implemented contact tracing measures at all locations. To ensure a safe and physically-distanced movie-going experience, we encourage all guests to purchase their tickets and reserve their seats in advance at <a href="bookSeats.php" class="override">OTFilms.com</a>.<!a brings the user to the book eats page so it is done online not in person/>
								</br><a href="https://www.cdc.gov/coronavirus/2019-ncov/community/contact-tracing-nonhealthcare-workplaces.html" class="override" margin-left="20%">Why Do We Trace</a></p>
								</br><img src="images/Ct.png" alt="Why to trace" class="center"/> 

							</div>
						   </div>
						</div>
					
                        <div class="tab-pane fade" id="nav-Plan" role="tabpanel" aria-labelledby="Plane-your-Visit">
							<div class="shown">
								<h1>Plan Your Visit</h1><!thierd subpage loaded when user select the optioon form the nav bar/>
							<div>
								<h2>Can I go to the Movies?</h2>
								<p>Please stay home if you have any of the following symptoms:</p>
								<ul>
									<li>Fever</li>
									<li>Cough</li>
									<li>Difficulty breathing</li>
									<li>Sore throat</li>
									<li>Loss of taste or smell</li>
									<li>Severe dizziness</li>
									<li><a href="https://covid-19.ontario.ca/?gclid=Cj0KCQiAtqL-BRC0ARIsAF4K3WGQULbkh7CjJ1NOtXMYNZaBcghb4IfEffVvUnQiHnplRcmYfnW3j3MaAk9lEALw_wcB" class="override" margin-left="20%">Think you might be sick? Check Here</a></li>
								</ul>
								<img src="images/symptoms.jpg" alt="error loading stay home image" class="center"/> </br>
								
							</div>

							<div>
								<h2>Movie Tickets</h2>
								<ul>
									<li>We encourage guests to purchase their movie tickets in advance at <a href="bookSeats.php" class="override">OTFilms.com</a>. Tickets may also be purchased at the theatre using a purposefully-distanced automated box office kiosk with touchscreens that are covered with an antimicrobial copper film to provide enhanced cleanliness.</li>
									<li>We encourage in-theatre ticket and concession purchases using contactless payment methods (credit/debit, mobile payments, gift cards and vouchers).</li>
									<li>Please note that we have maintained Free Reserved Seating, and introduced Free Reserved Seating in select locations.</li>
								</ul>
							</div>

							<div>
								<h2>Plan Ahead</h2>
								<ul>
									<li>To achieve the recommended physical distancing for our Guests, we ask that you arrive no sooner than 20 minutes (15 minutes in Ontario) prior to your movie’s scheduled showtime</li>
									<li>If you arrive earlier, you may be asked to remain outside the theatre until your movie is ready for seating.</li>
								</ul>
							</div>

							<div>
								<h2>Physical Distancing And Hygiene</h2>
								<ul>
									<li>Please follow all directional and physical distancing signs, and the guidance of our Cast and Crew members as you move from the front doors, to concession, to your movie, and finally when you exit the theatre following your movie.</li>
									<li>Throughout the theatre, we have installed protective safety shields at interaction points to safeguard both our Guests and our Crew members.</li>
									<li>We have temporarily removed lobby seating for added Guest safety.</li>
									<li>Hand sanitizer will be available throughout your theatre experience including at the entries, concessions, washrooms and the entrance to each theatre corridor.</li>
								</ul>
							</div>

							<div>
								<h2>Leaving the theatre</h2>
								<p>To maintain physical distancing when exiting the theatre, we ask:</p>
								<ul>
									<li>When your movie is over, please follow the instructions of the OT Films Cast members or all directional signage and exit by row, starting at the front.</li>
									<li>After you exit the auditorium, additional directional signage will assist you to exit the theatre.</li>
									<li>Where possible you will be directed through an alternative exit path that does not require you to travel back through the lobby area.</li>
									<li>As you exit the theatre please be kind - deposit your own garbage in the appropriate bins. Our Cast and Crew will truly appreciate your assistance in keeping our theatres clean for all Movie Lovers.</li>
								</ul>
							</div>

							<div>
								<h2>How To Stay Safe</h2>
								<img src="images/safetyguidlines.jpg" alt="error loading stay home image" class="center"/> 
							</div>
						   </div>
						</div>

						<div class="tab-pane fade" id="nav-Doing" role="tabpanel" aria-labelledby="What-Were-Doing">
							<div class="shown">
							<h1>What We're Doing</h1><!forth subpage loaded when user select the optioon form the nav bar/>
							<div>
								<h2>Our Cast And Crew</h2>
								<ul>
									<li>Our Fit for Work policy requires that each Cast member complete a health questionnaire to confirm they have not been exposed to anyone with COVID-19, and are symptom-free before they enter the theatre and start their shift.</li>
									<li>Every OT Films Cast and Crew member will always be wearing proper protective equipment. PPE will be supplied by OT Films for its Cast and Crew members.</li>
									<li>Every OT Films Cast and Crew member will be required to wash their hands every 30 minutes.</li>
								</ul>
							</div>

							<div>
								<h2>Enhanced Cleaning</h2>
								<ul>
									<li>As an enhanced cleaning practice, we will be disinfecting our auditoriums, seating surfaces, washrooms and common areas with an odorless and 100% biodegradable cleaning product which has been proven to kill 99.9999% of bacteria and has been approved by Health Canada and the EPA for use against SARS-CoV-2, the Coronavirus that causes COVID-19.</li>
									<li>OT Films will have a dedicated Hygiene Officer scheduled on each shift, with the sole responsibility of ensuring that cleaning and safety standards are completed as scheduled and to specification.</li>
									<li>There will be extra time provided between movies to complete our enhanced cleaning standards. Only after the Manager on Duty or Hygiene Officer has inspected and signed-off on the cleaning of the auditorium—will it be released to seat our next Guests.</li>
									<li>We have deployed additional cleaning Crew members who are dedicated to enhanced cleaning of high-contact areas throughout the theatre every 30 minutes.</li>
								</ul>
							</div>
						   

							<div>
								<h2>Washrooms</h2>
								<ul>
									<li>All sinks and stalls are available. Alternate urinals will be closed to provide physical distancing.</li>
									<li>Please always respect others and maintain physical distancing when entering, occupying, and exiting the restrooms.</li>
								</ul>
							</div>
							</div>
						</div>	
						<div  class="block"></div>
											
					</body>

	</html>
