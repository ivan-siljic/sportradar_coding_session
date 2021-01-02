	<form action="./actions/a_create.php" method= "post">
			   		   
		<div class="p-3">
			<div class="form-group">
				<div class="row">
					<div class="col-6">
						<label class="mb-1" for="date">Date</label>  
						<input class="form-control border rounded bg-light p-1 text-secondary" type="date" name="date">
					</div>
			           				
					<div class="col-6">
						<label class="mb-1" for="time">Time</label>
						<input class="form-control border rounded bg-light p-1 text-secondary" type="time" name="time">
					</div>
				    
				</div>

				<div class="row">
					<div class="col-6 my-3">
						<label class="mb-1" for="home_team">Home</label>
						<select class="form-select border rounded bg-light p-1 text-secondary" name="home_team">
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

					<div class="col-6 my-3">
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
					<button type ="submit" class="btn btn-dark">create</button>      			
			</div>
		</div>

	</form>