<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="seat.css">
   <title>Cinemata</title>
</head>
<body>
	<br><br><br><br><br>
	<!-- add logout to top of page -->
	<div class="logout">
		<h3><?php include 'account.php';?></h3>
	</div>
	
		<?php
			//set card number and cvv variable equal to an empty string
			$movies = $time = $date = "";
			//says if the submit button is pressed do this
			if ($_SERVER["REQUEST_METHOD"] == "POST") {
				//sign in to database
				$host = "localhost"; 
				$user = "root"; 
				$pass = ""; 
				$db = "theater";
				$port = 3307;
				//connect to server
				$conn = new mysqli($host, $user, $pass, $db, $port);
					//displays an error if connection fails
					if ($conn->connect_error) {
						die("Connection failed: " . $conn->connect_error);
					}
				//places input into a variable and strips special chars if any
				$movies = mysqli_real_escape_string($conn, $_POST["movies"]);
				$time = mysqli_real_escape_string($conn, $_POST["time"]);
				$date = mysqli_real_escape_string($conn, $_POST["date"]);
				//echo "<h4>Your theater is:</h4>";
				//sets query command to a variable
				$movie_info = "INSERT INTO tickets (Movie_name, Movie_rating, Dates, Showtime, Theater_id)
					SELECT Movie_name, Movie_rating, Dates, Showtime, Theater_id FROM showtimes	 
					WHERE Cost=('$movies') 
								AND Dates=('$date')
								AND Showtime=('$time') ";
				//$date_time = "UPDATE tickets set Datet = ('$date'), Showtime = ('$time') WHERE Movie_id"
				//stores query results in a variable
				if ($conn->query($movie_info) == TRUE){
					echo "Changes Saved";
				} else {
					echo "Error Saving: " . $conn->error;
				}

				$conn->close();
				
			}
			
		
		?>
	
	<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
		<div class="movie-container">
			<label for=" ">Movie:</label>
			<select id="movie" name="movies">
				
				<option>Select a movie.</option>
				<option value="14">Joker</option>
				<option value="8">Batman Begins</option>
				<option value="10">The Dark Knight</option>
				<option value="12">The Dark Knight Rises</option>
				<option value="9">Ironman</option>
				<option value="11">Ironman 2</option>
				<option value="13">Ironman 3</option>
			</select>
		</div>
		<div class="movie-container">
			<label for=" ">Time:</label>
			<select name="time">
				<option>Select a time.</option>
				<option value="14:00:00">2:00</option>
				<option value="15:30:00">3:30</option>
				<option value="17:00:00">5:00</option>
				<option value="18:30:00">6:30</option>
				<option value="20:00:00">8:00</option>
			</select>
		</div>
		<div class="movie-container">
			<label for=" ">Date:</label>
			<select name="date">
				<option>Select a time.</option>
				<option value="2020-12-01">12/01/2020</option>
				<option value="2020-12-02">12/02/2020</option>
				<option value="2020-12-03">12/03/2020</option>
				<option value="2020-12-04">12/04/2020</option>
				
			</select>
		</div>
		<!-- <button type="submit" class= "button" name="save">Save Changes</button>
	</form> !-->
	
		<div>
			<ul class="option">
			<li>
				<div class="seat"></div>
				<small>Available</small>
			</li>
			</ul>
      
			<ul class="option">
				<li>
					<div class="seat closed"></div>
					<small>Closed</small>
				</li>
			</ul>

			<ul class="option">
				<li>
					<div class="seat selected"></div>
					<small>Selected</small>
				</li>
			</ul>
		</div>
		<div class="container">
      
			<div class="screen">Movie Screen</div>

				<div class="row">
				<div class="seat"></div>
				<div class="seat"></div>
				<div class="seat"></div>
				<div class="seat"></div>
				<div class="seat"></div>
				<div class="seat closed"></div>
				<div class="seat closed"></div>
				<div class="seat closed"></div>
				<div class="seat"></div>
				<div class="seat"></div>
				<div class="seat"></div>
			</div>

			<div class="row">
				<div class="seat closed"></div>
				<div class="seat closed"></div>
				<div class="seat closed"></div>
				<div class="seat"></div>
				<div class="seat"></div>
				<div class="seat"></div>
				<div class="seat"></div>
				<div class="seat"></div>
				<div class="seat"></div>
				<div class="seat"></div>
				<div class="seat"></div>
			</div>

			<div class="row">
				<div class="seat"></div>
				<div class="seat"></div>
				<div class="seat"></div>
				<div class="seat closed"></div>
				<div class="seat closed"></div>
				<div class="seat closed"></div>
				<div class="seat"></div>
				<div class="seat"></div>
				<div class="seat"></div>
				<div class="seat"></div>
				<div class="seat"></div>
			</div>

			<div class="row">
				<div class="seat"></div>
				<div class="seat"></div>
				<div class="seat"></div>
				<div class="seat"></div>
				<div class="seat"></div>
				<div class="seat"></div>
				<div class="seat"></div>
				<div class="seat"></div>
				<div class="seat"></div>
				<div class="seat"></div>
				<div class="seat"></div>
			</div>

			<div class="row">

				<div class="seat"></div>
				<div class="seat"></div>
				<div class="seat"></div>
				<div class="seat"></div>
				<div class="seat"></div>
				<div class="seat"></div>
				<div class="seat"></div>
				<div class="seat"></div>
				<div class="seat closed"></div>
				<div class="seat closed"></div>
				<div class="seat closed"></div>

			</div>

		</div>

		<p class="text">

			Number of seats: <span id="count">0</span>
			<br>

			Total price: $ <span id="total">0</span>

		</p>

   
		<a href="payment.php"><input type="button" class="button" value="Pay Now"> </a>

		<script src="seat.js"></script>
		<button type="submit" class= "button" name="save">Save Changes</button>
	</form>
</body>
</html>