<?php
//this page stores the signed in information and provides the logout button.
session_start();
if(isset($_SESSION['login_user'])){
	echo 'Welcome ' . $_SESSION['login_user'].'<br>';
	echo '<a href="logout.php">Log Out</a>';
}else{
	header("location: login.php"); // Redirecting To Home Page
}
?>

		