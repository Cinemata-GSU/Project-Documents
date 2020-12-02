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
			$movies = $time = $date = $A = "";
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
				//$num = count($_POST["A"]);
				if(empty($_POST["A"])){
					echo "Select seats before saving";
					$conn->close();
				}else{
				//places input into a variable and strips special chars if any
				$num = count($_POST["A"]);
				$movies = mysqli_real_escape_string($conn, $_POST["movies"]);
				$time = mysqli_real_escape_string($conn, $_POST["time"]);
				$date = mysqli_real_escape_string($conn, $_POST["date"]);
				$A = $_POST["A"];
				for($i=0;$i<$num;$i++){
					$var1=$A[$i];
					$mId="SELECT Showtime_id, Theater_id, Movie_name, Movie_rating, Cost, Showtime, Dates
							FROM showtimes
							WHERE Cost=('$movies')
									AND Dates=('$date')
										AND Showtime=('$time')";
					$result = $conn->query($mId);
					if ($result->num_rows > 0) {
						// output data of each row
						//says while theres rows that match to continue fetching and printing 
						while ($row = $result->fetch_assoc()) {
							//echo "Theater ID: " . $row["Theater_id"] . " showtimeid: " . $row["Showtime_id"] . "<br>";
							$tId= $row["Theater_id"];
							$sId = $row["Showtime_id"];
								
						}
								
					} else {
						echo "0 results";
					}
					
					/*$seatA="INSERT INTO seats_taken (Seat_num, Theater_id, Showtime_id)
							SELECT '$var1','$tId','$sId'
							FROM seats_taken
							WHERE NOT EXIST(
								SELECT Seat_num, Theater_id, Showtime_id FROM seats_taken
								WHERE Seat_num = '$var1' AND Theater_id = '$tId' AND Showtime_id = '$sId'
							)LIMIT 1";
						*/
					$seatA="INSERT INTO seats_taken (Seat_num, Theater_id, Showtime_id) 
							VALUES ('$var1', '$tId', '$sId')";
								
					if ($conn->query($seatA) == TRUE){
							echo " Changes Saved ";
					}else {
							echo "Error Saving: " . $conn->error;
					}		
					
				}
				
				//sets query command to a variable
				$movie_info = "INSERT INTO tickets (Movie_name, Movie_rating, Dates, Showtime, Theater_id)
					SELECT Movie_name, Movie_rating, Dates, Showtime, Theater_id FROM showtimes	 
					WHERE Cost=('$movies') 
								AND Dates=('$date')
								AND Showtime=('$time') ";
				
				
				
				//stores query results in a variable
				if ($conn->query($movie_info) == TRUE){
					echo " Changes Saved ";
				} else {
					echo "Error Saving: " . $conn->error;
				}

				
				$conn->close();
				}
			}
			
		
		?>
	
	<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
		<center>
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
			
			<div>
				<ul class="row" style="list-style-type:none;" >
					<li class="seat"><input type="checkbox" value="100" name="A[]"></li>
					<li class="seat"><input type="checkbox" value="101" name="A[]"></li>
					<li class="seat"><input type="checkbox" value="102" name="A[]"></li>
					<li class="seat"><input type="checkbox" value="103" name="A[]"></li>
					<li class="seat"><input type="checkbox" value="104" name="A[]"></li>
					<li class="seat closed"><input type="checkbox" value="105" name="A[]"></li>
					<li class="seat closed"><input type="checkbox" value="106" name="A[]"></li>
					<li class="seat closed"><input type="checkbox" value="107" name="A[]"></li>
					<li class="seat"><input type="checkbox" value="108" name="A[]"></li>
					<li class="seat"><input type="checkbox" value="109" name="A[]"></li>
					<li class="seat"><input type="checkbox" value="110" name="A[]"></li>
				</ul>
			</div>
			
			<div 
				<ul class="row" style="list-style-type:none;">
					<li class="seat closed"><input type="checkbox" value="111" name="A[]"></li>
					<li class="seat closed"><input type="checkbox" value="112" name="A[]"></li>
					<li class="seat closed"><input type="checkbox" value="113" name="A[]"></li>
					<li class="seat"><input type="checkbox" value="114" name="A[]"></li>
					<li class="seat"><input type="checkbox" value="115" name="A[]"></li>
					<li class="seat"><input type="checkbox" value="116" name="A[]"></li>
					<li class="seat"><input type="checkbox" value="117" name="A[]"></li>
					<li class="seat"><input type="checkbox" value="118" name="A[]"></li>
					<li class="seat"><input type="checkbox" value="119" name="A[]"></li>
					<li class="seat"><input type="checkbox" value="120" name="A[]"></li>
					<li class="seat"><input type="checkbox" value="121" name="A[]"></li>
				</ul>
			</div>

			<div 
				<ul class="row" style="list-style-type:none;">
					<li class="seat"><input type="checkbox" value="122" name="A[]"></li>
					<li class="seat"><input type="checkbox" value="123" name="A[]"></li>
					<li class="seat"><input type="checkbox" value="124" name="A[]"></li>
					<li class="seat closed"><input type="checkbox" value="125" name="A[]"></li>
					<li class="seat closed"><input type="checkbox" value="126" name="A[]"></li>
					<li class="seat closed"><input type="checkbox" value="127" name="A[]"></li>
					<li class="seat"><input type="checkbox" value="128" name="A[]"></li>
					<li class="seat"><input type="checkbox" value="129" name="A[]"></li>
					<li class="seat"><input type="checkbox" value="130" name="A[]"></li>
					<li class="seat"><input type="checkbox" value="131" name="A[]"></li>
					<li class="seat"><input type="checkbox" value="132" name="A[]"></li>
				</ul>
			</div>

			<div
				<ul class="row" style="list-style-type:none;">
					<li class="seat"><input type="checkbox" value="133" name="A[]"></li>
					<li class="seat"><input type="checkbox" value="134" name="A[]"></li>
					<li class="seat"><input type="checkbox" value="135" name="A[]"></li>
					<li class="seat"><input type="checkbox" value="136" name="A[]"></li>
					<li class="seat"><input type="checkbox" value="137" name="A[]"></li>
					<li class="seat"><input type="checkbox" value="138" name="A[]"></li>
					<li class="seat"><input type="checkbox" value="139" name="A[]"></li>
					<li class="seat"><input type="checkbox" value="140" name="A[]"></li>
					<li class="seat"><input type="checkbox" value="141" name="A[]"></li>
					<li class="seat"><input type="checkbox" value="142" name="A[]"></li>
					<li class="seat"><input type="checkbox" value="143" name="A[]"></li>
				</ul>
			</div>

			<div 
				<ul class="row" style="list-style-type:none;">
					<li class="seat"><input type="checkbox" value="144" name="A[]"></li>
					<li class="seat"><input type="checkbox" value="145" name="A[]"></li>
					<li class="seat"><input type="checkbox" value="146" name="A[]"></li>
					<li class="seat"><input type="checkbox" value="147" name="A[]"></li>
					<li class="seat"><input type="checkbox" value="148" name="A[]"></li>
					<li class="seat"><input type="checkbox" value="149" name="A[]"></li>
					<li class="seat"><input type="checkbox" value="150" name="A[]"></li>
					<li class="seat"><input type="checkbox" value="151" name="A[]"></li>
					<li class="seat closed"><input type="checkbox" value="152" name="A[]"></li>
					<li class="seat closed"><input type="checkbox" value="153" name="A[]"></li>
					<li class="seat closed"><input type="checkbox" value="154" name="A[]"></li>
				</ul>
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
		</center>
	</form>
</body>
</html>