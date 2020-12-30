<?php

require_once '../db_connect.php';

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
				  <a class="navbar-brand" href="index.php"><img src="assets/sportradar-logo.svg" alt="Sportradar Logo" height="25"></a>
				  	<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			      	<span class="navbar-toggler-icon"></span>
			    	</button>
					  <div class="collapse navbar-collapse" id="navbarSupportedContent">
					    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
					        <li class="nav-item">
								<a class="nav-link active" href="index.php" aria-current="page">Home <span class="sr-only"></span></a>
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

		<div class="row">
			<div class="d-lg-none col-5 col-md-4 mt-5">
				<?php include '../sidebar_sport.php'; ?>
			</div>	
		</div>

		<div class="row">
			<div class="col-8">

	<?php
	if ($_POST) 
	{
		$date = $_POST['date'];
		$time = $_POST['time'];
		$home_team = $_POST['home_team'];
		$guest_team =$_POST['guest_team'];

		$create_sql = "INSERT INTO sport_event(start_date_time, _fk_team_home, _fk_team_guest)
						VALUES ('$date $time', '$home_team', '$guest_team');";

		 if($connect->query($create_sql)===TRUE) {
	        echo '<div class="row">
	        			<svg xmlns="http://www.w3.org/2000/svg" width="100" height="100" fill="currentColor" class="bi bi-check-circle my-5 text-muted" viewBox="0 0 16 16">
  							<path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
  							<path d="M10.97 4.97a.235.235 0 0 0-.02.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-1.071-1.05z"/>
						</svg>
					</div>
											
					<div class="row">
					<h1 class="text-center text-muted mt-3 mb-5">Succesfull event input!</h1></div>';
	    } else {
	        echo '<div class="row">
						<svg xmlns="http://www.w3.org/2000/svg" width="100" height="100" fill="currentColor" class="bi bi-x-circle my-5 text-muted" viewBox="0 0 16 16">
  							<path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
  							<path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z"/>
						</svg>
					</div>
											
					<div class="row">
					<h1 class="text-center text-muted mt-3 mb-5">Unsuccesfull event input!</h1></div>';
	    }

	}
	?>
				<div class="row my-5">
					<a class="link-secondary" href=<?php $url = htmlspecialchars($_SERVER['HTTP_REFERER']);
			            									echo $url; 
			            									?> >Back</a>
				</div>

			</div>

		<div class="d-none d-lg-block col-lg-3 col-xl-2 m-3">
			<?php include '../sidebar_sport.php'; ?>
		</div>		
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