<?php
	require_once 'db_connect.php';
?>

<!DOCTYPE html>
<html>
<head>
	<title>Sport Events Calendar</title>
</head>

<body>

	<table>
		<thead>
			<tr>
				<th>Datetime</th>
				<th>Sport</th>
				<th>Home</th>
				<th>Guests</th>
			</tr>
		</thead>
		<tbody>
<?php
	if ($_GET) 
	{
		$team = $_GET['team'];

	$team_name_sql = "SELECT sport_event.sport_event_id, sport_event.start_date_time, sport.sport_name, t.team_name home, f.team_name guest  
			FROM sport_event
			JOIN team t ON t.team_id = sport_event._fk_team_home
			JOIN team f ON f.team_id = sport_event._fk_team_guest
			JOIN league ON f._fk_league_id = league.league_id
			JOIN sport ON league._fk_sport_id = sport.sport_id
			WHERE t.team_name = '$team' OR f.team_name = '$team';";

		$team_name_result = mysqli_query($connect, $team_name_sql);	

      if ($team_name_result->num_rows > 0) {
      while($row = $team_name_result->fetch_assoc()) 
				{
					echo "<tr>
							<td>" . date("D, d.m.Y, H:i", strtotime($row['start_date_time'])) . "</td>
							<td>" . $row['sport_name'] . "</td>
							<td>" . $row['home'] . "</td>
							<td>" . $row['guest'] . "</td>
							<td><a href='/sportradar_coding_session/event.php?id=" . $row['sport_event_id'] . "'>choose</a></td>
							</tr>";
				}
		}
		else { echo "No data available.";}
		
?>
		</tbody>
	</table>

	<a href= "create.php"><button type="button" class="btn btn-info">Add event</button></a>


</body>
</html>

<?php } ?>