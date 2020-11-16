<!DOCTYPE html>
<html lang="en">
<head>

   <title>Cinemata</title>

   <link rel="stylesheet" href="login.css">

</head>
	<body>
		<?php 
			session_start(); // Starting Session
			if (isset($_POST['submit1'])) {
				if (empty($_POST['username']) || empty($_POST['password'])) {
					$error = "Username or Password is invalid";
				}else{
					// Define $username and $password
					$username = $_POST['username'];
					$password = $_POST['password'];
					//connect to database
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

					//search database
					$query = "SELECT username, password from CUSTOMER where username='" . mysqli_real_escape_string($conn,$username) . "' AND password='" . mysqli_real_escape_string($conn,$password) . "'";
					$verify1=mysqli_query($conn,$query);
					
					if(mysqli_fetch_assoc($verify1)){ //fetching the contents of the row {
					$_SESSION['login_user'] = $username; // Initializing Session
					header("location: account.php"); // Redirecting To Profile Page
					}
					$conn->close();//close else statement on database
				}
				$conn->close();//close if db
			}	elseif (isset($_POST['submit2'])) {
					//connect to database
					$host = "localhost"; 
					$user = "root"; 
					$pass = ""; 
					$db = "theater";
					$port = 3307;
					//connect to server
					$conn = new mysqli($host, $user, $pass, $db, $port); 
					$username = mysqli_real_escape_string($conn, $_POST['username']);
					$password = mysqli_real_escape_string($conn, $_POST['password']);
					$email = mysqli_real_escape_string($conn, $_POST['email']);
					//search database
					$user_info = "INSERT INTO CUSTOMER (username, password, email) VALUES ('$username', '$password', '$email')";
					
					if ($conn->query($user_info) === TRUE) {
						echo "New record created successfully. You can now log in";
					} else {
						echo "Error: " . $user_info . "<br>" . $conn->error;
					}

					$conn->close();//close elseif db
				}else{
					echo "LOG IN";
				}
			//close database
			//$conn->close();	
			//close the if }
		?>
	</body>
</html>