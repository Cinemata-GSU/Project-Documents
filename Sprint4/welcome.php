<!DOCTYPE html>
<html lang="en">
	<head>

		<title>Welcome to Cinemata</title>

		<link rel="stylesheet" href="login.css">

	</head>
		<body>
			<div class="logout">
				<?php include 'account.php';?>
			</div>
			<br><br>
			<center><h2>Search for Locations</h2>
			
			<?php
			//set zipcode variable equal to an empty string
			$Postcode = "";
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
				$Postcode = mysqli_real_escape_string($conn, $_POST["Postcode"]);
				echo "<h4>Your theater is:</h4>";
				//sets query command to a variable
				$sql = "SELECT Theater_id, Name, Address, City, StateL, Zip_code
						FROM theater_location WHERE Zip_code = ('$Postcode')";
				//stores query results in a variable
				$result = $conn->query($sql);
					//states if result has more than 0 rows to do this
					if ($result->num_rows > 0) {
					// output data of each row
						//says while theres rows that match to continue fetching and printing 
						while($row = $result->fetch_assoc()) {
							echo "Theater ID: " . $row["Theater_id"]. " Theater: " . $row["Name"]. " " . $row["Address"]. " " . $row["City"]. " " . $row["StateL"]. " " . $row["Zip_code"]. "<br>";
						}
					} else {
						echo "0 results";//if no results are found it prints 0 results
					}
				//close connection to DB
				$conn->close();

				
			}
		
			?>
			<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
				<input type="number" name="Postcode" size="5" maxlength="5" placeholder="Zip Code" required>
				<br><br>
				<button type="submit" name="find">Find Theater</button>
				<button type="submit" name="submit" onclick="location.href='movie.php';">Continue</button>
				<input type="reset" value="Clear"></center>
			
			</form>	
		
		
		</body>
</html>