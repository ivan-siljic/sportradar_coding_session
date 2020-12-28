<?php

require_once 'db_connect.php';

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

	
	$player_sql = "SELECT player.first_name FROM player
					JOIN team ON team.team_id = player._fk_team_id
					JOIN sport_event ON team.team_id = sport_event._fk_team_home
					WHERE sport_event_id = $id;";

	$player_result =  mysqli_query($connect, $player_sql);


	$stats_sql = "SELECT stats.matches_played FROM stats
					JOIN team ON team.team_id = stats._fk_team_id
					JOIN sport_event ON team.team_id = sport_event._fk_team_home
					WHERE sport_event_id = $id;";

	$stats_result = mysqli_query($connect, $stats_sql);

?>

<!DOCTYPE html>
<html>
<head>
	<title>Selected Sport Event</title>
</head>

<body>

	<table>
		<thead>
			<tr>
				<th>Datetime</th>
				<th>Sport</th>
				<th>Home</th>
				<th>Guests</th>
				<th>Players</th>
				<th>Stats</th>
			</tr>
		</thead>
		<tbody>
							<tr>
								<td><?php echo date("D, d.m.Y, H:i", strtotime($row['start_date_time'])); ?></td>
								<td><?php echo $row['sport_name']; ?></td>
								<td><?php echo $row['home']; ?></td>
								<td><?php echo $row['guest']; ?></td>
								<td><?php 
											if ($player_result->num_rows > 0) {
										      while($player_row = $player_result->fetch_assoc()) 
														{
															echo $player_row['first_name'];
														}
											}
								 	?>
								</td>
								<td><?php 
											if ($stats_result->num_rows > 0) {
										      while($stats_row = $stats_result->fetch_assoc()) 
														{
															echo $stats_row['matches_played'];
														}
											}
								 	?>
								</td>
							</tr>
		</tbody>
	</table>

</body>
</html>

<?php } ?>


