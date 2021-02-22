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

<!-- html, body and container opened here and closed in footer -->
<body>
<div class="container">
		<div class="row my-3">
			<nav class="navbar navbar-expand-lg navbar-light">
				
				<!-- relative path with BASE_URL defined in db_connect.php -->
				  <a class="navbar-brand" href="<?php echo BASE_URL; ?>index.php"><img src="<?php echo BASE_URL; ?>assets/sportradar-logo.svg" alt="Sportradar Logo" height="25"></a>
				  	<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			      	<span class="navbar-toggler-icon"></span>
			    	</button>
					  <div class="collapse navbar-collapse" id="navbarSupportedContent">
					    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
					        <li class="nav-item">
								<a class="nav-link active" href="<?php echo BASE_URL; ?>index.php" aria-current="page">Home <span class="sr-only"></span></a>
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