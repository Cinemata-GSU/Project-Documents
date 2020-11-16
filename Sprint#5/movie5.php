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
               <h1>Iron Man 2</h1>
               <p>With the world now aware that he is Iron Man, billionaire inventor Tony Stark <br> (Robert Downey Jr.) faces pressure from
               all sides to share his technology with <br> the military. He is reluctant to divulge the secrets of his armored suit, fearing <br>
               the information will fall into the wrong hands.....Read More.</p>
               <p>Cast: </p>
               <div class="casting">
                  <img src="actor11.jpg" title="Robert Downey Jr.">
                  <img src="actor12.jpg" title="Jon Favreau">
                  <img src="actor13.jpg" title="Gwyneth Paltrow">
               </div>
               <br>
               <a href="https://www.youtube.com/watch?v=BoohRoVA9WQ" target=" ">Watch Trailer</a>
               <a href="seat.php">Book Tickets</a>
               <br><br>
            </div>
            <div class="col1 ">

               <img src="ironman2.jpg" alt="poster" class="poster">

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
            <div class="col1"><a href="movie.php"><img src="joker.jpg" alt=""></a></div>
            <div class="col1"><a href="movie4.php"><img src="ironman1.jpg" alt=""></a> </div>
            <div class="col1"><a href="movie6.php"><img src="ironman3.jpg" alt=""></a> </div>

         </div>
      </div>

   </div>

</body>

</html>