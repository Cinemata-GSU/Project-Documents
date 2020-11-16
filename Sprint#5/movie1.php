<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="movie.css">
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

   <title>Cinemata</title>
</head>

<body>
	<!-- add logout to top of page -->
	<div class="logout">
		<h3><?php include 'account.php';?></h3>
	</div>
	
   <div class="main">

      <div class="container header ">

         <h1><img src="logo.png" alt="logo" class="logo"> Welcome to Cinemata </h1>


      </div>

      <div class="container movie">

         <div class="row">
            <div class="col1 left">
               <h1>Batman Begins</h1>
               <p>A young Bruce Wayne (Christian Bale) travels to the Far East, where he's trained <br> in the martial arts by Henri Ducard
               (Liam Neeson), a member of the mysterious <br> League of Shadows. When Ducard reveals the League's true purpose -- the <br>
               complete destruction of Gotham City -- Wayne returns to Gotham...Read More.</p>
               <p>Cast: </p>
               <div class="casting">
                  <img src="actor4.jpg" title="Christian Bale">
                  <img src="actor5.jpg" title="Katie Holmes">
                  <img src="actor6.jpg" title="Cillian Murphy">
               </div>
               <br>
               <a href="https://www.youtube.com/watch?v=neY2xVmOfUM" target=" ">Watch Trailer</a>
               <a href="seat.php">Book Tickets</a>
               <br><br>
            </div>
            <div class="col1 ">

               <img src="batman1.jpg" alt="poster" class="poster">

            </div>
         </div>
      </div>
      <br>

      <div class="container series">
         <h4>In Theaters Now...</h4>
         <div class="row">

            <div class="col1"> <a href="movie.php"> <img src="joker.jpg" alt=""></a></div>
            <div class="col1"><a href="movie2.php"><img src="batman2.jpg" alt=""></a> </div>
            <div class="col1"><a href="movie3.php"><img src="batman3.jpg" alt=""></a> </div>
            <div class="col1"><a href="movie4.php"><img src="ironman1.jpg" alt=""></a></div>
            <div class="col1"><a href="movie5.php"><img src="ironman2.jpg" alt=""></a> </div>
            <div class="col1"><a href="movie6.php"><img src="ironman3.jpg" alt=""></a> </div>

         </div>
      </div>

   </div>

</body>

</html>