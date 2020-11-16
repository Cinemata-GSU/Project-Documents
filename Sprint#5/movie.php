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
	<!-- this is a class for the logout option to be styled later-->
	<div class="logout">
		<h3><?php include 'account.php';?></h3>
	</div> 

   <div class="main">

      <div class="container header ">
         
         <h1><img src="logo.png" alt="logo" class="logo" > Welcome to Cinemata </h1>
         
         
      </div>

      <div class="container movie">

         <div class="row">
            <div class="col1 left">
               <h1>Joker (Trending)*</h1>
               <p>Forever alone in a crowd, failed comedian Arthur Fleck seeks connection <br>  as he walks
                the streets of Gotham City. Arthur
               wears two masks -- the<br> one  he paints for his day job as a clown, and the guise he projects in a <br> attempt to feel
               like he's part of the world around him. Isolated,  bullied<br> and disregarded by society, Fleck begins a slow descent.....Read More.</p>
               <p>Cast: </p>
               <div class="casting">
                  <img src="actor1.jpg" title="Joaquin Phoenix">
                  <img src="actor2.jpg" title="Robert De Niro">
                  <img src="actor3.jpg" title="Zazie Beetz">
               </div>
               <br>
               <a href="https://www.youtube.com/watch?v=zAGVQLHvwOY" target=" ">Watch Trailer</a>
               <a href="seat.php">Book Tickets</a>
               <br><br>
            </div>
            <div class="col1 " >

               <img src="joker.jpg" alt="poster" class="poster">

            </div>
         </div>
      </div>
      <br>

      <div class="container series">
         <h4>In Theaters Now...</h4>
         <div class="row">

            <div class="col1"><a href="movie1.php"><img src="batman1.jpg" alt=""></a></div>
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