<?php
	require_once 'db_connect.php';

	include 'head.php';

	include 'choose_date.php';

					if ($_GET) 
					{
						$id = $_GET['id'];

						$sql = "SELECT *, t.team_name home, f.team_name guest, p.first_name homie, r.first_name guestie  
								FROM sport_event
								JOIN team t ON t.team_id = sport_event._fk_team_home
								JOIN team f ON f.team_id = sport_event._fk_team_guest
								JOIN player p ON t.team_id = p._fk_team_id
								JOIN player r ON f.team_id = r._fk_team_id
								JOIN league ON f._fk_league_id = league.league_id
								JOIN sport ON league._fk_sport_id = sport.sport_id
								WHERE sport_event_id = $id;";

						$result = mysqli_query($connect, $sql);
						$row = $result->fetch_assoc();

						
						$player_sql = "SELECT * FROM player
										JOIN team ON team.team_id = player._fk_team_id
										JOIN sport_event ON team.team_id = sport_event._fk_team_home
										WHERE sport_event_id = $id;";

						$player_result =  mysqli_query($connect, $player_sql);

						$player_guest_sql = "SELECT * FROM player
										JOIN team ON team.team_id = player._fk_team_id
										JOIN sport_event ON team.team_id = sport_event._fk_team_guest
										WHERE sport_event_id = $id;";

						$player_guest_result =  mysqli_query($connect, $player_guest_sql);


						$stats_sql = "SELECT * FROM stats
										JOIN team ON team.team_id = stats._fk_team_id
										JOIN league ON league.league_id = stats._fk_league_id
										JOIN sport_event ON team.team_id = sport_event._fk_team_home
										WHERE sport_event_id = $id;";

						$stats_result = mysqli_query($connect, $stats_sql);
						$stats_row = $stats_result->fetch_assoc();

						$stats_guest_sql = "SELECT * FROM stats
										JOIN team ON team.team_id = stats._fk_team_id
										JOIN league ON league.league_id = stats._fk_league_id
										JOIN sport_event ON team.team_id = sport_event._fk_team_guest
										WHERE sport_event_id = $id;";

						$stats_guest_result = mysqli_query($connect, $stats_guest_sql);
						$stats_guest_row = $stats_guest_result->fetch_assoc();

						// for displaying in teams in sidebar
						$sport = $row['sport_name'];

					}

?>

		<div class="row">
			<div class="d-lg-none col-5 col-md-4 mt-5">
				<?php include 'sidebar_teams.php'; ?>
			</div>	
		</div>

		<div class="row">
			<div class="col-8">
				
				<div class="row text-end my-3">
					<a href= "create.php" class="link-secondary">Add event</a>
				</div>

				<table class="table table-borderless">

							<tr>
								<td></td>
								<td></td>
								<td class='text-center text-muted' style='PADDING-TOP:3vh'>
									<?php echo date("D", strtotime($row['start_date_time'])) . "<br><mark>" . date("d.m.Y", strtotime($row['start_date_time'])) . "</mark>" ?>
								</td>
								<td></td>
								<td></td>
							</tr>
							
							<tr class='table-active'>
								<td><em><?php echo $row['sport_name']; ?></em></td>
								<td class='text-end fw-bold text-uppercase'><?php echo $row['home']; ?></td>
								<td class='text-center'><small><?php echo date("H:i", strtotime($row['start_date_time'])); ?></small></td>
								<td class='fw-bold text-uppercase'><?php echo $row['guest']; ?></td>
								<td class='text-end'><em><small><?php echo $row['league_name']; ?></em></small></td>
							</tr>

							<tr>
								<td></td>
								<td class="text-muted text-end"><?php 
											if ($player_result->num_rows > 0) {
										      while($player_row = $player_result->fetch_assoc()) 
														{
															$date_birth = new Datetime($player_row['date_birth']);
															$today = new Datetime();
															$diff = $today->diff($date_birth);

															echo $player_row['first_name'] . " " . $player_row['last_name'] . " (" . $diff->y . ") <br>";
														}
											}
								 	?>
								</td>
								<td></td>
								<td class="text-muted"><?php 
											if ($player_guest_result->num_rows > 0) {
										      while($player_guest_row = $player_guest_result->fetch_assoc()) 
														{
															$date_birth = new Datetime($player_guest_row['date_birth']);
															$today = new Datetime();
															$diff = $today->diff($date_birth);

															echo $player_guest_row['first_name'] . " " . $player_guest_row['last_name'] . " (" . $diff->y . ") <br>";
														}
											}
								 	?>
								 		
								 	</td>
								<td></td>
							</tr>

							<tr><td colspan="5"></td></tr>

							<tr class='rounded bg-light'>
								<td></td>
								<td></td>
								<td class='text-center rounded-top bg-light'><?php echo "<small>STATS:</small> <h6><strong>Season " . $stats_row['season_start'] . "/" . $stats_row['season_end'] . "</strong></h6>"; ?></td>
								<td></td>
								<td></td>
							</tr>

							<tr class='rounded bg-light'>
								<td></td>
								<td class="text-end">
									<?php echo "<small>Matches:</small> <strong>" . $stats_row['matches_played'] . "</strong><br>
												<small>Wins:</small> <strong>" . $stats_row['matches_won'] . "</strong><br>
												<small>Lost:</small> <strong>" . $stats_row['matches_lost'] . "</strong><br>
												<small>Rank:</small> <strong>" . $stats_row['rank'] . "</strong><br>
												<small><em>" . $stats_row['league_name'] . "</em></small>";
								 	?>
								</td>
								<td></td>
								<td>
									<?php echo "<small>Matches:</small> <strong>" . $stats_guest_row['matches_played'] . "</strong><br>
												<small>Wins:</small> <strong>" . $stats_guest_row['matches_won'] . "</strong><br>
												<small>Lost:</small> <strong>" . $stats_guest_row['matches_lost'] . "</strong><br>
												<small>Rank:</small> <strong>" . $stats_guest_row['rank'] . "</strong><br>
												<small><em>" . $stats_guest_row['league_name'] . "</em></small>";
								 	?>
								</td>
								<td></td>
							</tr>
					</table>

				<div class="row my-5">
					<a class="link-secondary" href=<?php $url = htmlspecialchars($_SERVER['HTTP_REFERER']);
			            									echo $url; 
			            									?> >Back</a>
				</div>
	
			</div>

			<div class="d-none d-lg-block col-lg-3 col-xl-2 m-3">
				<?php include 'sidebar_teams.php'; ?>
			</div>

<?php include 'footer.php'; ?>
	
		</div>

</div>

</body>
</html>