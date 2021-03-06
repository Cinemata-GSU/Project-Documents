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
               <h1>The Dark Knight Rises</h1>
               <p>It has been eight years since Batman (Christian Bale), in collusion with <br>
               Commissioner Gordon (Gary Oldman), vanished into
               the night. Assuming <br>responsibility for the death of Harvey Dent, Batman sacrificed everything for <br> what he and Gordon
               hoped would be the greater good..Read More.</p>
               <p>Cast: </p>
               <div class="casting">
                  <img src="actor4.jpg" title="Christian Bale">
                  <img src="actor7.jpg" title="Anne Hathaway">
                  <img src="actor8.jpg" title="Tom Hardy">
               </div>
               <br>
               <a href="https://www.youtube.com/watch?v=g8evyE9TuYk" target=" ">Watch Trailer</a>
               <a href="seat.php">Book Tickets</a>
               <br><br>
            </div>
            <div class="col1 ">

               <img src="batman3.jpg" alt="poster" class="poster">

            </div>
         </div>
      </div>
      <br>

      <div class="container series">
         <h4>In Theaters Now...</h4>
         <div class="row">

            <div class="col1"> <a href="movie.php"> <img src="joker.jpg" alt=""></a></div>
            <div class="col1"><a href="movie1.php"><img src="batman1.jpg" alt=""></a></div>     
            <div class="col1"><a href="movie2.php"><img src="batman2.jpg" alt=""></a> </div>
            <div class="col1"><a href="movie4.php"><img src="ironman1.jpg" alt=""></a> </div>     
            <div class="col1"><a href="movie5.php"><img src="ironman2.jpg" alt=""></a> </div>
            <div class="col1"><a href="movie6.php"><img src="ironman3.jpg" alt=""></a> </div>

         </div>
      </div>

   </div>

</body>

</html>