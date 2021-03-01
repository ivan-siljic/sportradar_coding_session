	<form action="actions/a_delete.php" method= "post">
			   		   
		<div class="p-3">
			<div class="form-group">
				<div class="row">
					<div class="col-8 m-auto text-center">
						<h4 class="my-4 text-muted text-uppercase">
							<mark>Do you really want to delete this event?</mark>
						</h4>
					</div>					           			
				</div>
					<hr>
					<input type="hidden" name="id" value="<?php echo $sport['sport_event_id']; ?>">
					<button type ="submit" class="btn btn-dark">delete</button>      			
			</div>
		</div>

	</form>