<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="payment.css">
   <title>Cinemata</title>
</head>
	<body>
		<!-- add logout to top of page -->
		<div class="logout">
			<h3><?php include 'account.php';?></h3>
		</div>
		<div class="mainpay">
		<h1>This Is Cinemata Payment Page</h1>
   
		<?php
			//set card number and cvv variable equal to an empty string
			$Card_number = $Cvv = "";
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
				$Card_number = mysqli_real_escape_string($conn, $_POST["Card_number"]);
				$Cvv = mysqli_real_escape_string($conn, $_POST["Cvv"]);
				echo "<h2>Your theater is:</h2>";
				//sets query command to a variable
				$payment = "INSERT INTO PAYMENT (Card_number, Cvv) VALUES ('$Card_number', '$Cvv')";
				//stores query results in a variable
				if ($conn->query($payment) == TRUE){
					echo "Payment Processed Successfully";
				} else {
					echo "Error Processing Payment: " . $conn->error;
				}

				$conn->close();
				
			}
			
		
		?>
			<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" class="payment">
				<input type="number" name="Card_number" maxlength="16" placeholder="Card Number" required class="number">>
				<input type="number" name="Cvv" maxlength="4" placeholder="CVV" required class="number">>
				<br><br>
				<button type="submit" name="find" class="pay">Pay</button>
				<input type="reset" value="Clear" class="pay"></center>
			
			</form>
	</div>
	</body>
</html>