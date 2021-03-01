	<tr>
		<td></td>
		<td></td>
		<td class='text-center text-muted'>
			<div class="row">
				<div class="col-12">
					<?php echo date("D", strtotime($rows['start_date_time'])); ?>
				</div>
			</div>
			<div class="row">
				<div class="col-12">
					<?php echo "<mark>" . date("d.m.Y", strtotime($rows['start_date_time'])) . "</mark>"; ?>
				</div>
			</div>
		</td>
		<td></td>
		<td class='text-end'>
			<a href="<?php echo BASE_URL; ?>view/sport_event/update.php?id=<?php echo $rows['sport_event_id']; ?>" class="btn btn-secondary">edit</a>
		</td>
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
		<td class="text-muted text-end text-nowrap">
			<?php 

				$rows = $fetchPlayersHome;

				foreach ($rows as $row)
					{
						
						echo $row['first_name'];
						echo " ";
						echo $row['last_name'];
						echo " (" . calcAge( $row['date_birth'] ) .")";
						echo "<br>";
					}
		 	?>
		</td>
		<td></td>
		<td class="text-muted text-nowrap">
			<?php 

				$rows = $fetchPlayersGuest;
				
				foreach ($rows as $row)
					{
						echo $row['first_name'];
						echo " ";
						echo $row['last_name'];
						echo " (" . calcAge( $row['date_birth'] ) . ")";
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

			<?php $rows = $fetchStatsHome; ?>

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
			<?php $rows = $fetchStatsGuest; ?>
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
	<tr>
		<td colspan="5" class="text-end pt-3">
			<a href="<?php echo BASE_URL; ?>view/sport_event/delete.php?id=<?php echo $rows['sport_event_id']; ?>" class="btn btn-outline-secondary">delete</a>
		</td>
	</tr>