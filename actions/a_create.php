<?php

	require_once '../db_connect.php';

	include_once '../classes.php';

	include_once '../functions.php';

	include '../sidebar_sport.php';

?>

<!DOCTYPE html>
<html>
<head>
	<title>Sport Events Calendar</title>

	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:ital,wght@0,400;0,700;1,400&display=swap" rel="stylesheet"> 


  	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

	<style>
		
		body {
				font-family: 'Source Sans Pro', sans-serif;
				font-size: 1.1em;
			}

	</style>

</head>

<body>
<div class="container">
		<div class="row my-3">
			<nav class="navbar navbar-expand-lg navbar-light">
				  <a class="navbar-brand" href="../index.php"><img src="assets/sportradar-logo.svg" alt="Sportradar Logo" height="25"></a>
				  	<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			      	<span class="navbar-toggler-icon"></span>
			    	</button>
					  <div class="collapse navbar-collapse" id="navbarSupportedContent">
					    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
					        <li class="nav-item">
								<a class="nav-link active" href="../index.php" aria-current="page">Home <span class="sr-only"></span></a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="https://www.sportradar.com/about-us/group-set-up/" target="_blank">About us</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="https://www.sportradar.com/about-us/make-the-team/" target="_blank">Careers</a>
							</li>
						</ul>
					  </div>
			</nav>
		</div>

		<div class="row">
			<div class="col-10 mt-3">
				<form action="date.php" method="post">
					
						<h5>Choose Event Date</h5>
						<input class="my-3 border rounded bg-light p-1 text-secondary" type="date" name="date">
						<br>
						<button type ="submit" class="btn btn-link link-secondary px-0 mx-0">check date</button>
				</form>
			</div>
		</div>


				<?php sidebar_sport_top(); ?>


		<div class="row">
			<div class="col-8">

	<?php
		
		$result = a_create();

		 if($result === TRUE) {
	        succes( 'event' );
	    } else {
	        fail( 'event' );
	    }
	
	?>
				<div class="row my-5">
					<a class="link-secondary" href= <?php back(); ?> >Back</a>
				</div>

			</div>

			<?php sidebar_sport_right(); ?>

		</div>
		<footer class="my-5">	
		
				<h4>Our Partners</h4>

			<div class="row my-5">
		
				<div class="col-2">
					<a href="https://www.sportradar.com/about-us/our-clients/" target="_blank"><img src="../assets/Footer-Fifa.png"></a>
				</div>

				<div class="col-2">
					<a href="https://www.sportradar.com/about-us/our-partners/" target="_blank"><img src="../assets/NFL_on24.png"></a>
				</div>

				<div class="col-2">
					<a href="https://www.sportradar.com/about-us/our-partners/" target="_blank"><img src="../assets/rfpl.png"></a>
				</div>

				<div class="col-2">
					<a href="https://www.sportradar.com/about-us/group-set-up/" target="_blank"><img src="../assets/nhl_usa_ice_hockey.png"></a>
				</div>

				<div class="col-2">
					<a href="https://www.sportradar.com/about-us/our-partners/" target="_blank"><img src="../assets/ws.png"></a>
				</div>

				<div class="col-2">
					<a href="https://www.sportradar.com/about-us/our-partners/" target="_blank"><img src="../assets/ffa.png"></a>
				</div>

			</div>

		</footer>	
			
	

</div>

</body>
</html>