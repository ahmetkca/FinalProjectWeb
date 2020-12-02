<?php
session_start();
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
						   </div>
						   <?php else: ?>
							<div class="navbar-nav">
								<a class="navbar-item nav-link" href="login.html" style="color: white">Login</a> or
								<a class="navbar-item nav-link" href="signup.html" style="color: white">Register</a>
						   </div>
						   <?php endif; ?>   				
        				</nav>


						<h1 style="color: rgb(81, 185, 255); font-family: 'Oswald', sans-serif;">Seat Selection</h1>
						<br>
						<h4>Screen</h4>
						<div class="seatSelection">
						<form method="POST" action="processBookSeats.php" name="myForm">
						
							<table class="selectSeat">
								<?php
								$myfile = fopen("seats.txt", "r") or die("Unable to open file!");
								$num_row = 1;
								while(!feof($myfile)) {
									$current_line = fgets($myfile);
									$row_seats = explode(",", $current_line);
									//var_dump($current_line);
									//var_dump($row_seats);
									echo "<tr>";
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
								<input type="hidden" id ="totalSubmission" name="totalSubmission"/>
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



                        <div class="navbar-b">
							<p>2020 OT FILMS Canada LP | Privacy Policy | Terms of Use</p>
						</div>
						<script>
							var session = <?= $_SESSION["username"] ?>;
							var checkout_btn = document.getElementById('checkout-btn');
							if (typeof session !== 'undefined') {
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
