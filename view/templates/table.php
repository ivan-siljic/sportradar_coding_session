<?php

	if (!is_array($rows)) // checks if result is an array at all
	{			
		echo displayFail( 'No data available' );
	} 

	elseif( ! checkMultiArr( $rows ) )		// checks if the array is single dimensional
	{

?>	
		
		<tr>
			<td></td>
			<td></td>
			<td class='text-center text-muted' style='PADDING-TOP:3vh'>
				<?php echo date("D", strtotime($rows['start_date_time'])); ?>
				<br>
				<mark>
				<?php echo date("d.m.Y", strtotime($rows['start_date_time'])); ?>
				</mark>
			</td>
		</tr>
															
		<tr class='table-active'>
			<td><em>
				<?php echo $rows['sport_name']; ?>
				</em>
			</td>
			<td class='text-end fw-bold text-uppercase'>
				<?php echo $rows['home']; ?></td>
			<td class='text-center'>
				<small>
				<?php echo date("H:i", strtotime($rows['start_date_time'])); ?>
				</small>
			</td>
			<td class='fw-bold text-uppercase'>
				<?php echo $rows['guest']; ?>
			</td>
			<td>
				<a href='<?php echo BASE_URL; ?>view/filters/event.php?id=<?php echo $rows['sport_event_id']; ?>' class='link-dark'>select</a>
			</td>
		</tr>

<?php

	} 
	else 
	{ 
		foreach ($rows as $row)		// foreach loop through multidimensional array
		{
		?>							
			<tr>
				<td></td>
				<td></td>
				<td class='text-center text-muted' style='PADDING-TOP:3vh'>
					<?php echo date("D", strtotime($row['start_date_time'])); ?>
					<br>
					<mark>
					<?php echo date("d.m.Y", strtotime($row['start_date_time'])); ?>
					</mark>
				</td>
			</tr>
															
			<tr class='table-active'>
				<td><em>
					<?php echo $row['sport_name']; ?>
					</em>
				</td>
				<td class='text-end fw-bold text-uppercase'>
					<?php echo $row['home']; ?></td>
				<td class='text-center'>
					<small>
					<?php echo date("H:i", strtotime($row['start_date_time'])); ?>
					</small>
				</td>
				<td class='fw-bold text-uppercase'>
					<?php echo $row['guest']; ?>
				</td>
				<td>
					<a href='<?php echo BASE_URL; ?>view/filters/event.php?id=<?php echo $row['sport_event_id']; ?>' class='link-dark'>select</a>
				</td>
			</tr>

<?php 		

		} 
	}
	
?>