<?php
							if ($result->num_rows > 0) {
					      		while($row = $result->fetch_assoc()) 
									{
										echo "<tr>
													<td></td>
													<td></td>
													<td class='text-center text-muted' style='PADDING-TOP:3vh'>" . date("D", strtotime($row['start_date_time'])) . "<br><mark>" . date("d.m.Y", strtotime($row['start_date_time'])) . "</mark></td>
													<td></td>
												</tr>
												<tr class='table-active'	>
													<td><em>" . $row['sport_name'] . "</em></td>
													<td class='text-end fw-bold text-uppercase'>" . $row['home'] . "</td>
													<td class='text-center'><small>" . date("H:i", strtotime($row['start_date_time'])) . "</small></td>
													<td class='fw-bold text-uppercase'>" . $row['guest'] . "</td>
													<td><a href='/sportradar_coding_session/event.php?id=" . $row['sport_event_id'] . "' class='link-dark'>select</a></td>
												</tr>";
									}
							}
							else { 
								echo '<div class="row">
											<svg xmlns=http://www.w3.org/2000/svg" width="100" height="100" fill="currentColor" class="bi bi-dash-circle my-5 text-muted" viewBox="0 0 16 16">
											  <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
											  <path d="M4 8a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7A.5.5 0 0 1 4 8z/>
											</svg>
										</div>
										
										<div class="row">
										<h1 class="text-center text-muted mt-3 mb-5">No data available.</h1></div>';
									}


?>