				<div class="border rounded p-3">
					<h4>Teams</h4>
					
					<?php

					$team_sql = "SELECT team_name FROM team 
									JOIN league ON team._fk_league_id = league.league_id
									JOIN sport ON league._fk_sport_id = sport.sport_id
									WHERE sport.sport_name = '$sport' 
									GROUP BY team_name;";

					$team_result = mysqli_query($connect, $team_sql);

					 while($team_row = $team_result->fetch_assoc()) 
					{
						echo "<a href='/sportradar_coding_session/team.php?team=" . $team_row['team_name'] . "' class='link-secondary'>" . $team_row['team_name'] . "</a><br>";	
					}

					?>

				</div>