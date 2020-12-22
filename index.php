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
	
	$sql = "SELECT sport_event.start_date_time, sport.sport_name, t.team_name home, f.team_name guest  FROM sport_event
			JOIN team t ON t.team_id = sport_event._fk_team_home
			JOIN team f ON f.team_id = sport_event._fk_team_guest
			JOIN league ON f._fk_league_id = league.league_id
			JOIN sport ON league._fk_sport_id = sport.sport_id;";

	$result = mysqli_query($connect, $sql);

      if ($result->num_rows > 0) {
      while($row = $result->fetch_assoc()) 
				{
					echo "<tr>
							<td>" . date("D, d.m.Y, H:i", strtotime($row['start_date_time'])) . "</td>
							<td>" . $row['sport_name'] . "</td>
							<td>" . $row['home'] . "</td>
							<td>" . $row['guest'] . "</td>
							</tr>";
				}
		}
		else { echo "No data available.";}
		
?>
		</tbody>
	</table>
</body>
</html>