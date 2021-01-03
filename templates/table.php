<?php

	if (!is_array($rows)) {			// checks if result is an array at all

						echo '<div class="row">';
						echo '<svg xmlns=http://www.w3.org/2000/svg" width="100" height="100" fill="currentColor" class="bi bi-dash-circle my-5 text-muted" viewBox="0 0 16 16">';
						echo '<path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>';
						echo '<path d="M4 8a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7A.5.5 0 0 1 4 8z/>';
						echo '</svg>';
						echo '</div>';
						echo '<div class="row">';
						echo '<h1 class="text-center text-muted mt-3 mb-5">No data available.</h1></div>';

					} elseif( ! multi( $rows ) )		// checks if the array is singel dimensional
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
											<a href='/sportradar_coding_session/filters/event.php?id=<?php echo $rows['sport_event_id']; ?>' class='link-dark'>select</a>
										</td>
									</tr>
					<?php

					} else { 

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
											<a href='/sportradar_coding_session/filters/event.php?id=<?php echo $row['sport_event_id']; ?>' class='link-dark'>select</a>
										</td>
									</tr>

						<?php 		
							} 
					}
?>