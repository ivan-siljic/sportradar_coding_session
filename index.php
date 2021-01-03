<?php
	require_once 'db/db_connect.php'; 			// require stops executing after error

	include_once 'controlls/functions.php';		// include executes rest of file despite error

	include_once 'templates/head.php';			// header with bootstrap and navbar

	include_once 'templates/choose_date.php';	// date-picker template

	include_once 'templates/sidebar_sport.php';	// import sidebar filter with sports from db

	sidebar_sport_top();						// split display of sidebar due to breakpoints
?>

<!-- html, body and bootstrap container start in head.php -->

		<div class="row">
			<div class="col-8">
				
				<div class="row text-end my-3">
					<a href= "create.php" class="link-secondary">Add event</a>
				</div>

				<table class="table">

					<?php

						$rows = index();		// included through functions.php
															
						include 'templates/table.php';	// reuseable template
							
					?>		

				</table>

			</div>

<?php 
	sidebar_sport_right();						// split display of sidebar due to breakpoints

	include 'templates/footer.php'; 			// html, body and bootstrap container end in footer.php
?>