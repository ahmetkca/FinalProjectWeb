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
                        <link rel="stylesheet" href = "bookingsStyle.css">					
						<script type="text/javascript" src ="homepagejava.js"></script>
                        <link rel="icon" href="images/Logo.png">
                        <style>
                            /* Tooltip container */
                            .tooltip {
                                position: relative;
                                display: inline-block;
                                border-bottom: 1px dotted black; /* If you want dots under the hoverable text */
                            }

                            /* Tooltip text */
                            .tooltip .tooltiptext {
                                visibility: hidden;
                                width: 120px;
                                background-color: #555;
                                color: #fff;
                                text-align: center;
                                padding: 5px 0;
                                border-radius: 6px;

                                /* Position the tooltip text */
                                position: absolute;
                                z-index: 1;
                                bottom: 125%;
                                left: 50%;
                                margin-left: -60px;

                                /* Fade in tooltip */
                                opacity: 0;
                                transition: opacity 0.3s;
                            }

                            /* Tooltip arrow */
                            .tooltip .tooltiptext::after {
                                content: "";
                                position: absolute;
                                top: 100%;
                                left: 50%;
                                margin-left: -5px;
                                border-width: 5px;
                                border-style: solid;
                                border-color: #555 transparent transparent transparent;
                            }

                            /* Show the tooltip text when you mouse over the tooltip container */
                            .tooltip:hover .tooltiptext {
                                visibility: visible;
                                opacity: 1;
                            }
                        </style>
    
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
                        
                        <!-- --------------------------------------------------------------------------------------------------- -->
                            <div class="tooltip">Hover over me to Preview Seats
		                        <span class="tooltiptext">Seats</span>
	                        </div>
                            <?php
                                $user = $_SESSION['username'];

                                include ("setup.php");
                                $connection = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);

                                //This writes to mySQL console
                                //it selects everything from the users tables, and checks for the '$user' variable
                                $sqltask = "select * from booked where Username = '$user'";
                                $sqltype = mysqli_query($connection, $sqltask);

                                //Finds the number of bookings the user has made
                                $check = mysqli_num_rows($sqltype);

                                echo "<br>";
                                //echo '<table id="content">';
                                
                                //////////////////////////LOOP/////////////////////////////////////////////////////////
                                //$infoarray = mysqli_fetch_array($sqltype, MYSQLI_ASSOC);

                                
                                
                                ?>
                                
                                <?php if ($check >= 1): ?>
                                <table style="width:90%; margin-left: 5%;margin-right: 5%;">
                                    <thead>
                                        <tr style="border-bottom: 5px solid black;">
                                            <td><strong>Tickets:</strong></td>
                                            <td><strong>Food:</strong></td>
                                            <td><strong>Premier:</strong></td>
                                            <td><strong>Time Purchased:</strong></td>
                                            <td><strong>Total Payed:</strong></td>
                                        </tr>
                                    </thead>


                                <?php
                                    while ($infoarray = mysqli_fetch_array($sqltype)) {
                                        $adults = $infoarray["AdultNum"];
                                        $seniors = $infoarray["SeniorNum"];
                                        $children = $infoarray["ChildrenNum"];
                                        $popcorn = $infoarray["PopcornNum"];
                                        $coke = $infoarray["CokeNum"];
                                        $candy = $infoarray["CandyNum"];
                                        $nachos = $infoarray["NachoNum"];
                                        $sum = $infoarray["totalNum"];
                                        $time = $infoarray["timeNum"];

                                        echo '<tr style="border-bottom: 1px solid black;">
                                            <td>
                                                <p>Adult tickets: ' . $adults . '</p>
                                                <p>Senior tickets: ' . $seniors . '</p>
                                                <p>Children tickets: ' . $children . '</p>
                                                
                                                <br>
                                            </td>
                                            <td>
                                                <p>Popcorn: ' . $popcorn . '</p>
                                                <p>Coke: ' . $coke . '</p>
                                                <p>Candy: ' . $candy . '</p>
                                                <p>Nachos: ' . $nachos . '</p>
                                                <br>
                                            </td>
                                            <td>
                                                <p>Star Wars: A New Hope (Premiere)</p>
                                            </td>
                                            <td>
                                                <p> ' . $time . '</p>
                                            </td>
                                            <td>
                                                <p> $'. $sum .'</p> 
                                            </td>

                                        </tr>';
                                    }
                        
                            ?>
                            <tr>
                            </table>

                            <?php else: ?>
                                <h1>YOU HAVE NOT BOOKED ANY SEATS</h1>
						   <?php endif; ?>


                        <!-- --------------------------------------------------------------------------------------------------- -->

                        <div class="navbar-b">
							<p>2020 OT FILMS Canada LP | Privacy Policy | Terms of Use</p>
						</div>
                        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
   						<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

				</body>

	</html>