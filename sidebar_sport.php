				<div class="border rounded p-3">
					<h4>Sports</h4>
					<?php

					$sport_sql = "SELECT sport_name FROM sport GROUP BY sport_name;";
					$sport_result = mysqli_query($connect, $sport_sql);

					 while($sport_row = $sport_result->fetch_assoc()) 
					{
						echo "<a href='/sportradar_coding_session/sport.php?sport=" . $sport_row['sport_name'] . "' class='link-secondary'>" . $sport_row['sport_name'] . "</a><br>";	
					}
					?>
				</div>