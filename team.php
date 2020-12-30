<?php
	require_once 'db_connect.php';

	include 'head.php';

	include 'choose_date.php';
?>

		<div class="row">
			<div class="d-lg-none col-5 col-md-4 mt-5">
				<?php include 'sidebar_sport.php'; ?>
			</div>	
		</div>

		<div class="row">
			<div class="col-8">
				
				<div class="row text-end my-3">
					<a href= "create.php" class="link-secondary">Add event</a>
				</div>

				<table class="table">

				<?php
					if ($_GET) 
					{
						$team = $_GET['team'];

						$sql = "SELECT sport_event.sport_event_id, sport_event.start_date_time, sport.sport_name, t.team_name home, f.team_name guest  
							FROM sport_event
							JOIN team t ON t.team_id = sport_event._fk_team_home
							JOIN team f ON f.team_id = sport_event._fk_team_guest
							JOIN league ON f._fk_league_id = league.league_id
							JOIN sport ON league._fk_sport_id = sport.sport_id
							WHERE t.team_name = '$team' OR f.team_name = '$team';";

						$result = mysqli_query($connect, $sql);	
					}

				    	include 'table.php';
						
				?>

				</table>

				<div class="row my-5">
					<a class="link-secondary" href=<?php $url = htmlspecialchars($_SERVER['HTTP_REFERER']);
			            									echo $url; 
			            									?> >Back</a>
				</div>
	
			</div>

			<div class="d-none d-lg-block col-lg-3 col-xl-2 m-3">
				<?php include 'sidebar_sport.php'; ?>
			</div>

<?php 	

	include 'footer.php'; 

?>
	
		</div>

</div>

</body>
</html>