	<form action="actions/a_update.php" method= "post">
			   		   
		<div class="p-3">
			<div class="form-group">
				<div class="row">
					<div class="col-12 mb-3">
						<label class="mb-1" for="sport">Sport</label>
						<select class="form-select border rounded bg-light p-1 text-secondary" onchange="location = this.value;">

								<?php 
										$rows = $fetchSport;

										foreach ($rows as $row)
										{
											if ($row["sport_name"] == $sport["sport_name"]) 
											{
												echo '<option selected>';
												echo $row["sport_name"];
												echo '</option>';
											} else 
											{
												echo '<option value="' . BASE_URL . 'view/sport_event/create.php?sport='.$row["sport_name"].'">';
												echo $row["sport_name"];
												echo '</option>';
											}
										}					
								?>

						</select>
					</div>
				</div>
				
				<div class="row">
					<div class="col-12 mb-3 mb-lg-0 col-lg-6">
						<label class="mb-1" for="date">Date</label>  
						<input class="form-control border rounded bg-light p-1 text-secondary" type="date" name="date" value="<?php echo date("Y-m-d", strtotime( $sport["start_date_time"] )); ?>">
					</div>
			           				
					<div class="col-12 mb-3 mb-lg-0 col-lg-6">
						<label class="mb-1" for="time">Time</label>
						<input class="form-control border rounded bg-light p-1 text-secondary" type="time" name="time" value="<?php echo date("H:i", strtotime( $sport["start_date_time"] )); ?>">
					</div>    
				</div>

				<div class="row">
					<div class="col-12 mb-3 my-lg-3 col-lg-6">
						<label class="mb-1" for="home_team">Home</label>
						<select class="form-select border rounded bg-light p-1 text-secondary" name="home_team">
							<option selected>Select team</option>
								<?php 

										$rows = fetchTeams($sport["sport_name"]);

										foreach ($rows as $row)
										{
											echo '<option value="' . $row["team_id"] . '">';
											echo $row["team_name"];
											echo '</option>';

											reset($row);
										}					
								?>
						</select>
					</div>

					<div class="col-12 mb-3 my-lg-3 col-lg-6">
						<label class="mb-1" for="guest_team">Guest</label>
						<select class="form-select border rounded bg-light p-1 text-secondary" name="guest_team">
							<option selected>Select team</option>
								<?php foreach ($rows as $row)
										{
											echo '<option value="' . $row["team_id"] . '">';
											echo $row["team_name"];
											echo '</option>';
																								
											reset($row);
										}
								?>    		
						</select>
					</div>					           			
				</div>
					<hr>
					<input type="hidden" name="id" value="<?php echo $sport['sport_event_id']; ?>">
					<button type ="submit" class="btn btn-dark">save</button>      			
			</div>
		</div>

	</form>