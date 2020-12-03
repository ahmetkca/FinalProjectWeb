<?php
session_start();
$session_value=(isset($_SESSION['username']))?$_SESSION['username']:'';

?>

<!DOCTYPE html>
	<html>
				<head>
                    <title>Book Seats</title>
						<script type="text/javascript" src="bookSeats.js"></script>
						<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
					    
						<link rel="stylesheet" href ="homestyle.css">

						<link rel="stylesheet" href = "bookSeatStyle.css">
						<link href="https://fonts.googleapis.com/css2?family=Oswald&display=swap" rel="stylesheet">
						<link rel="icon" href="images/Logo.png">
						
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

						<br>	
						<h1 style="color: rgb(81, 185, 255); font-family: 'Oswald', sans-serif;">Seat Selection</h1>
						<br>
						<h4>Screen</h4>
						<div class="seatSelection">
						<form method="POST" action="processBookSeats.php" name="myForm">
						
							<table class="selectSeat">
								<?php
								$myfile = fopen("seats.txt", "r") or die("Unable to open file!");
								$num_row = 1;
								
								//OUTPUTS ALL SEATS ONTO THE PAGE
								//Reads every line of the file
								//Creates 5 1D arrays (because feof function goes line by line)
								while(!feof($myfile)) {
									$current_line = fgets($myfile);
									$row_seats = explode(",", $current_line);	//Breaks the file(line) into an array, separates each element by 
																				//identifying commas. Puts these elements into a row of seats
								
									echo "<tr>";

									//Uses numbers from file to initialise seats (free, occupied, covid)
									for ($i = 0; $i < count($row_seats); $i+=1) {
										// 0 = free, 1 = free
										if ($row_seats[$i] == 0) {
											echo '<td><input class="free-seat" onclick="checkSeatNum(event, this.id);" type="checkbox" style="display: none;" id="'.'r'.$num_row.'c'.($i+1).'" name="seats[]" value="'.'r'.$num_row.'c'.($i+1).'"><label for="'.'r'.$num_row.'c'.($i+1).'"></label></td>';
										} else if($row_seats[$i] == 1){
											echo '<td><input type="checkbox" style="display: none;" id="'.'r'.$num_row.'c'.($i+1).'" name="seats[]" value="occupied" onclick="return false;" checked><label for="'.'r'.$num_row.'c'.($i+1).'"></label></td>';
										} else{
											echo '<td><input type="checkbox" style="display: none;" id="'.'r'.$num_row.'c'.($i+1).'" name="seats[]" value="'.'r'.$num_row.'c'.($i+1).'" disabled><label for="'.'r'.$num_row.'c'.($i+1).'"><img class="covid" src="images/covidChair.png" height="30" width="30"/></label></td>';
										}

									}
									$num_row+=1;
									echo "</tr>";
								}
								?>		
							</table>

						</div>
						<br>

						<div class="seatLegend">

							<table>
								<tr>
									<td><img src="images/occupiedseat.png" width="64" height="64"></td>
									<td><img src="images/freeseat.png" width="64" height="64"></td>
									<td><img src="images/covidChair.png" width="64" height="64"></td>
								</tr>

								<tr>
									<td>Occupied Seat</td>
									<td>Free Seat</td>
									<td>Seat Inaccessbile</td>

								</tr>


							</table>


						</div>

					<table>
						<td>
						<div class="seatLegend borderChoice">
							<h4>Select your tickets:</h4>
							<ul>
								<li>
									<label for="Adults">Adults: $12.99</label>
									<select onchange="changeSeats(); calcTotal();" name="Adults" id="Adults">
									<option value="0">0</option>
									<option value="1">1</option>
									<option value="2">2</option>
									</select>
								</li>
								<li>
									<label for="Seniors">Seniors: $8.99</label>
									<select onchange="changeSeats(); calcTotal();" name="Seniors" id="Seniors">
									<option value="0">0</option>
									<option value="1">1</option>
									<option value="2">2</option>
									</select>
								</li>
								<li>
									<label for="Children">Children: $0.99</label>
									<select onchange="changeSeats(); calcTotal();" name="Children" id="Children">
									<option value="0">0</option>
									<option value="1">1</option>
									<option value="2">2</option>
									</select>
								</li>

							</ul>
					
						</div>

						<br>
						<div class="seatLegend">

							<table>

								<tr>
									<td><img src="images/popcorn.png" width="64" height="64"></td>
									<td><img src="images/coke.png" width="64" height="64"></td>
									<td><img src="images/candy.png" width="64" height="64"></td>
									<td><img src="images/nachos.png" width="64" height="64"></td>
								</tr>


								<tr>
									
									<td>
										<button class="food add" type="button"  onclick="addPopcorn(); calcTotal();" >+</button>
										<button class="food minus" type="button"  onclick="minusPopcorn(); calcTotal();" >-</button>
										<br><br>
										<p>Popcorn($5): <input type="number" id="popcornOut" value="0" disabled></p>
									</td>
									
									<td>
										<button class="food add" type="button"  onclick="addCoke(); calcTotal();" >+</button>
										<button class="food minus" type="button"  onclick="minusCoke(); calcTotal();" >-</button>
										<br><br>
										<p>Coke($1): <input type="number" id="cokeOut" value="0" disabled></p>
									</td>
									<td>
										<button class="food add" type="button"  onclick="addCandy(); calcTotal();" >+</button>
										<button class="food minus" type="button"  onclick="minusCandy(); calcTotal();" >-</button>
										<br><br>
										<p>Candy($5): <input type="number" id="candyOut" value="0" disabled></p>
									</td>
									<td>
										<button class="food add" type="button"  onclick="addNachos(); calcTotal();" >+</button>
										<button class="food minus" type="button"  onclick="minusNachos(); calcTotal();" >-</button>
										<br><br>
										<p>Nachos($8): <input  type="number" id="nachosOut" value="0" disabled></p>
									</td>
									<td>
										<br><br>
										<button id="checkout-btn" type="submit" ><b>Checkout</b></button>
									</td>
									

								</tr>


							</table>

								<?php 
									///////////////////////////////////////////////////////////////////////////////////////
									$username = $_SESSION['username']; 
									echo '<input type="hidden" id ="userSubmission" name="userSubmission" value="'. $username . '"/>';
								?>

								<input type="hidden" id ="totalSubmission" name="totalSubmission"/>

								<input type="hidden" id ="adultSubmission" name="adultSubmission"/>
								<input type="hidden" id ="seniorSubmission" name="seniorSubmission"/>
								<input type="hidden" id ="childrenSubmission" name="childrenSubmission"/>

								<input type="hidden" id ="popcornSubmission" name="popcornSubmission"/>
								<input type="hidden" id ="cokeSubmission" name="cokeSubmission"/>
								<input type="hidden" id ="candySubmission" name="candySubmission"/>
								<input type="hidden" id ="nachoSubmission" name="nachoSubmission"/>
								
							<br>
							</form>
						</div>
						</div>
							</td>


							<td>
								<div id="reciept">
									<p>Subtotal: $<p1 id="subtotal">0.00</p1></p>
									<p>HST: $<p1 id="tax">0.00</p1></p>
									<p>Total: $<p1 id="total">0.00</p1></p>
								</div>
							</td>

							

							</table>

						<?php if(isset($_GET['error'])): ?>
							<div id="myModal" class="modal">
								<div class="modal-content">
									<span id="closeModal" class="close">&times;</span>
									<p><?= $_GET['error']; ?></p>
								</div>
							</div>
							<script>
								document.getElementById("closeModal").addEventListener("click", function() {
									document.getElementById("myModal").style.display = "none"
								});
							

								// When the user clicks anywhere outside of the modal, close it
								window.onclick = function(event) {
									if (event.target == document.getElementById("myModal")) {
										document.getElementById("myModal").style.display = "none";
									}
								}
							</script>
						<?php elseif (isset($_GET['total']) && isset($_GET['seats'])): ?>
							<div id="myModal" class="modal">
								<div class="modal-content">
									<span id="closeModal" class="close">&times;</span>
									<h2 align="center">SCREEN</h2>
									<table align="center" style="margin: 0;">
										<?php 
											$rowABC = array("A", "B", "C", "D", "E");
											for ($r = 1; $r <= 5; $r+=1) {
												echo '<tr><td style="overflow: hidden;">'.$rowABC[$r-1].'</td>';
												for ($c = 1; $c <= 9; $c+=1 ) {
													$slc = false;
													foreach($_GET['seats'] as $seat) {
														
														if ($r == $seat[1] && $c == $seat[3]) {
															
															$slc = true;
															break;
														}
													}
													//print_r($r." ".$c);
													if ($slc) {
														echo '<td><img width="20" height="20" src="images/selectedSeat.png"></td>';
														$slc = false;
													} else {
														echo '<td><img width="20" height="20" src="images/seat.png"></td>';
													}
													

												}
												echo "</tr>";
											}
										?>	
									</table>
									<h1>Thank you for purchase, <?= $_SESSION['fname']; ?> <?= $_SESSION['lname'] ?></h1>
									<strong align="center">Please Provide Your Name and Username at Event for Admission</strong><br>
									<p align="center"><u>Total:</u> <?= $_GET['total']; ?>$</p>
									<p align="center"><u>Username:</u> <?= $_SESSION['username']; ?></p>
									<p align="center"><u>Adult:</u> <?= $_GET['adult']; ?> | <u>Senior:</u> <?= $_GET['senior']; ?> | <u>Children:</u> <?= $_GET['children']; ?></p>
									<p align="center"><u>Popcorn:</u> <?= $_GET['popcorn']; ?> | <u>Coke:</u> <?= $_GET['coke']; ?> | <u>Candy:</u> <?= $_GET['candy']; ?> | <u>Nachos:</u> <?= $_GET['nacho']; ?></p>

								</div>
							</div>
							<script>
								document.getElementById("closeModal").addEventListener("click", function() {
									document.getElementById("myModal").style.display = "none";
								});
							

								// When the user clicks anywhere outside of the modal, close it
								window.onclick = function(event) {
									if (event.target == document.getElementById("myModal")) {
										document.getElementById("myModal").style.display = "none";
									}
								}
								/*var msg = document.getElementById('myModal');
								var xmlhttp = new XMLHttpRequest();
								xmlhttp.onreadystatechange = function () {
									if (this.readyState == 4 && this.status == 200) {
										
										alert("mail successfully sent.");
									}
								};
								xmlhttp.open("POST", "send_email.php", true);
								xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
								xmlhttp.send("msg="+msg);*/
							</script>
							<script src="https://smtpjs.com/v3/smtp.js">
								var msg = document.getElementById('myModal').innerHTML;
								function sendEmail() {
									Email.send({
										SecureToken : "463c10eb-7f02-4c98-a3da-09e4cd99e8bd",
										To : <?= $_SESSION['email']; ?>,
										From : "otfilms@gmail.com",
										Subject : "Thank you for your purchase.",
										Body : msg
									}).then(
										message => alert("mail sent successfully")
									);
								}
								sendEmail();
							</script>
							
						<?php endif; ?>

                        <div class="navbar-b">
							<p>2020 OT FILMS Canada LP | Privacy Policy | Terms of Use</p>
						</div>
						<script>
							var session = '<?php echo $session_value; ?>';
							var checkout_btn = document.getElementById('checkout-btn');
							if (session !== '') {
								checkout_btn.innerHTML = "Checkout";
								checkout_btn.disabled = false;
							} else {
								checkout_btn.innerHTML = "Please login to purchase";
								checkout_btn.disabled = true;
							}
						</script>

                        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
   						<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

				</body>

	</html>
