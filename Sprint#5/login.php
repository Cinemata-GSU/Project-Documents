<?php 
	include('verify.php'); // Includes Login Script
	if(isset($_SESSION['login_user'])){
	header("location: welcome.php"); // Redirecting To Profile Page
	}	
			
?>
<!DOCTYPE html>
<html lang="en">
<head>

   <title>Cinemata</title>

   <link rel="stylesheet" href="login.css">

</head>
<body>
   
   <div class="main">

      <div class="main-form">

         <h1>Cinemata</h1>

         <!-- Buttons -->

         <div class="button-box">

            <div id="button"></div>

            <button type="button" class="toggle-btn" onclick="login()">Login</button>

            <button type="button" class="toggle-btn" onclick="register()">Register</button>
         
         </div>

         <!-- Social Media Links -->

         <div class="social-media">

            <a href="https://www.facebook.com/"><img src="icon1.png"></a>
            <a href="https://twitter.com/login/"><img src="icon2.png"></a>
            <a href="https://www.instagram.com/accounts/login/"><img src="icon3.png"></a>
            <a href="https://www.pinterest.com/login/"><img src="icon4.png"></a>
            <a href="https://www.youtube.com/"><img src="icon5.png"></a>

         </div>
       
         <!-- Login -->

         <form class="input" id="login" method="post" >
            
            <input type="text" name="username" class="inputinfo" placeholder="Username" required>
            

            <input type="password" name="password" class="inputinfo" placeholder="Password" required>

            <input type="checkbox" class="checkbox"> <span>Remember Me</span>
            
            <a href="reset.html" target="" class="reset">Forgot Password?</a>
            <br><br><br>

            <!--Login Button-->

            <button type="submit" name="submit1" class="submit">Log in</button>

         </form>

         <!-- Registration -->

         <form class="input" id="register" method="post" >

            <input type="text" name ="username" class="inputinfo" placeholder="Username" required >
            
			
			
            <input type="email" name="email" class="inputinfo" placeholder="Email" required>

            <input type="password" name="password" class="inputinfo" placeholder="Password" required>
         
			
		 
            <input type="checkbox" class="checkbox" required> <span>I agree to the terms & conditions</span>

            <!--Register Button-->
            
            <button type="submit" name="submit2" class="submit">Register</button>
         
         </form>

      </div>

      <script>
            
         var x = document.getElementById("login");
         var y = document.getElementById("register");
         var z = document.getElementById("button");

         function register() {
            x.style.left = "-550px";
            y.style.left = "50px";
            z.style.left = "175px";
            }

         function login() {
            x.style.left = "50px";
            y.style.left = "-550px";
            z.style.left = "0px";
            }
   
      </script>
      
   </div>


</body>
</html>