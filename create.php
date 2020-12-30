<?php
	require_once 'db_connect.php';

	include 'head.php';

?>

<?php
$team_sql = "SELECT * FROM team";
$team_result = mysqli_query($connect, $team_sql);
$guest_result = mysqli_query($connect, $team_sql);
?>

<!DOCTYPE html>
<html>
<head>
   <title>Create Sport Event</title>
</head>
<body>
		<div class="row my-5">
      		<div class="col-12 col-md-8 col-xl-5 m-auto">
        		<div class="card m-5">

			   	<form action="./actions/a_create.php" method= "post">
			   		<div class="card-header">
                    	<h2>Create Event</h2>
                  	</div>
			            
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
							           		<?php if ($team_result->num_rows > 0) 
							           					{
							           						while ($team_row = $team_result->fetch_assoc())
															{
																echo '<option value="' . $team_row["team_id"] . '">' . $team_row["team_name"] . '</option>';
															}
														}
											?>
										</select>
				           			</div>

				           			<div class="col-6 my-3">
						           		<label class="mb-1" for="guest_team">Guest</label>
						           		<select class="form-select border rounded bg-light p-1 text-secondary" name="guest_team">
						           			<option selected>Select team</option>
							           		<?php if ($team_result->num_rows > 0) 
							           					{           		
							           						while ($guest_row = $guest_result->fetch_assoc()) 
							           						{ 
							           		          			echo '<option value="' . $guest_row["team_id"] . '">' . $guest_row["team_name"] . '</option>';
								       						}
								       					}
							           		?>         		
						           		</select>
				           			</div>
				           			
								</div>
									<hr>
			           				<button type ="submit" class="btn btn-dark">create</button>
			           			
			           		</div>
           				</div>
  
			            <div class="card-footer ">   
			            	<a class="link-secondary" href=<?php $url = htmlspecialchars($_SERVER['HTTP_REFERER']);
			            									echo $url; ?>
			            									>Back</a>
			            </div>
			           
				</form>

				</div>
  </div>
</div>

				
<?php 	

	include 'footer.php'; 

?>
</div>

</div>

</body>
</html>