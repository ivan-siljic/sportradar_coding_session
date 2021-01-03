	<tr>
		<td></td>
		<td></td>
		<td class='text-center text-muted' style='PADDING-TOP:3vh'>
			<?php 
				echo date("D", strtotime($rows['start_date_time']));
				echo "<br>";
				echo "<mark>" . date("d.m.Y", strtotime($rows['start_date_time'])) . "</mark>";
			?>
		</td>
		<td></td>
		<td></td>
	</tr>
	
	<tr class='table-active'>
		<td>
			<em>
			<?php echo $rows['sport_name']; ?>
			</em>
		</td>
		<td class='text-end fw-bold text-uppercase'>
			<?php echo $rows['home']; ?>
		</td>
		<td class='text-center'>
			<small>
			<?php echo date("H:i", strtotime($rows['start_date_time'])); ?>
			</small>
		</td>
		<td class='fw-bold text-uppercase'>
			<?php echo $rows['guest']; ?>
		</td>
		<td class='text-end'>
			<em><small>
			<?php echo $rows['league_name']; ?>
			</em></small>
		</td>
	</tr>

	<tr>
		<td></td>
		<td class="text-muted text-end">
			<?php 
				$rows = event_players_home();

				foreach ($rows as $row)
					{
						$date_birth = new Datetime($row['date_birth']);
						$today = new Datetime();
						$diff = $today->diff($date_birth);

						echo $row['first_name'];
						echo " ";
						echo $row['last_name'];
						echo " (" . $diff->y . ") ";
						echo "<br>";
					}
		 	?>
		</td>
		<td></td>
		<td class="text-muted">
			<?php 
				$rows = event_players_guest();
				
				foreach ($rows as $row)
					{
						$date_birth = new Datetime($row['date_birth']);
						$today = new Datetime();
						$diff = $today->diff($date_birth);

						echo $row['first_name'];
						echo " ";
						echo $row['last_name'];
						echo " (" . $diff->y . ") ";
						echo "<br>";
					}
		 	?>
		</td>
		<td></td>
	</tr>

	<tr>
		<td colspan="5">
		</td>
	</tr>

			<?php $rows = event_stats_home(); ?>

	<tr class='rounded bg-light'>
		<td></td>
		<td></td>
		<td class='text-center rounded-top bg-light'>
			<small>STATS:</small>
			<h6><strong>
			Season 
			<?php echo $rows['season_start'] . "/" . $rows['season_end']; ?>
			</strong></h6> 
		</td>
		<td></td>
		<td></td>
	</tr>

	<tr class='rounded bg-light'>
		<td></td>
		<td class="text-end">
			<small>Matches:</small>
			<strong>
			<?php echo $rows['matches_played'] ; ?>
			</strong>
			<br>
			<small>Wins:</small>
			<strong>
			<?php echo $rows['matches_won'] ; ?>
			</strong>
			<br>
			<small>Lost:</small>
			<strong>
			<?php echo $rows['matches_lost'] ; ?>
			</strong>
			<br>
			<small>Rank:</small>
			<strong>
			<?php echo $rows['rank'] ; ?>
			</strong>
			<br>
			<small><em>
			<?php echo $rows['league_name'] ; ?>
			</em></small>
		</td>
		<td>
			<?php $rows = event_stats_guest(); ?>
		</td>
		<td>
			<small>Matches:</small>
			<strong>
			<?php echo $rows['matches_played'] ; ?>
			</strong>
			<br>
			<small>Wins:</small>
			<strong>
			<?php echo $rows['matches_won'] ; ?>
			</strong>
			<br>
			<small>Lost:</small>
			<strong>
			<?php echo $rows['matches_lost'] ; ?>
			</strong>
			<br>
			<small>Rank:</small>
			<strong>
			<?php echo $rows['rank'] ; ?>
			</strong>
			<br>
			<small><em>
			<?php echo $rows['league_name'] ; ?>
			</em></small>
		</td>
		<td></td>
	</tr>