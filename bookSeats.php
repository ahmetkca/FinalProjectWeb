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
                           <a class="navbar-brand" href="home.html">Home</a> 
                           <a class="navbar-brand" href="upcoming.html">Upcoming</a>
                           <a class="navbar-brand" href="nowPlaying.html">Now Playing</a>
                           <a class="navbar-brand" href="bookSeats.php">Book Seats</a>
                           <a class="navbar-brand" href="covid.html">COVID-19</a> 
                           <a class="navbar-brand"></a>     				
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
											echo '<td><input onclick="checkSeatNum(event, this.id);" type="checkbox" style="display: none;" id="'.'r'.$num_row.'c'.($i+1).'" name="seats" value="'.'r'.$num_row.'c'.($i+1).'"><label for="'.'r'.$num_row.'c'.($i+1).'"><img src="images/freeseat.png" height="20" width="20"/></label></td>';
										} else if($row_seats[$i] == 1){
											echo '<td><input type="checkbox" style="display: none;" id="'.'r'.$num_row.'c'.($i+1).'" name="seats" value="'.'r'.$num_row.'c'.($i+1).'" disabled><label for="'.'r'.$num_row.'c'.($i+1).'"><img src="images/occupiedseat.png" height="20" width="20"/></label></td>';
										} else{
											echo '<td><input type="checkbox" style="display: none;" id="'.'r'.$num_row.'c'.($i+1).'" name="seats" value="'.'r'.$num_row.'c'.($i+1).'" disabled><label for="'.'r'.$num_row.'c'.($i+1).'"><img src="images/covidChair.png" height="20" width="20"/></label></td>';
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


						<div class="seatLegend">

							<ul>
								<li>
									<label for="Adults">Adults: $12.99</label>
									<select onchange="changeSeats();" name="Adults" id="Adults">
									<option value="0">0</option>
									<option value="1">1</option>
									<option value="2">2</option>
									</select>
								</li>
								<li>
									<label for="Seniors">Seniors: $8.99</label>
									<select onchange="changeSeats();" name="Seniors" id="Seniors">
									<option value="0">0</option>
									<option value="1">1</option>
									<option value="2">2</option>
									</select>
								</li>
								<li>
									<label for="Children">Children: $0.99</label>
									<select onchange="changeSeats();" name="Children" id="Children">
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
										<button class="food" type="button"  onclick="addPopcorn()" class="add">+</button>
										<button class="food" type="button"  onclick="minusPopcorn()" class="minus">-</button>
										<p>Popcorn($5): <input type="number" id="popcornOut" value="0" disabled></p>
									</td>
									
									<td>
										<button class="food" type="button"  onclick="addCoke()" class="add">+</button>
										<button class="food" type="button"  onclick="minusCoke()" class="minus">-</button>
										<p>Coke($1): <input type="number" id="cokeOut" value="0" disabled></p>
									</td>
									<td>
										<button class="food" type="button"  onclick="addCandy()" class="add">+</button>
										<button class="food" type="button"  onclick="minusCandy()" class="minus">-</button>
										<p>Candy($5): <input type="number" id="candyOut" value="0" disabled></p>
									</td>
									<td>
										<button class="food" type="button"  onclick="addNachos()" class="add">+</button>
										<button class="food" type="button"  onclick="minusNachos()" class="minus">-</button>
										<p>Nachos($8): <input  type="number" id="nachosOut" value="0" disabled></p>
									</td>
									<td>
										<button type="submit" ><b>Checkout</b></button>
									</td>
									

								</tr>


							</table>
								
							<br>
							</form>
						</div>
						</div>



                        <div class="navbar-b">
							<p>2020 OT FILMS Canada LP | Privacy Policy | Terms of Use</p>
						</div>
                        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
   						<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

				</body>

	</html>
