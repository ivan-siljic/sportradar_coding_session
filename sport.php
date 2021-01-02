<?php
	require_once 'db_connect.php';

	include_once 'classes.php';

	include_once 'functions.php';

	include_once 'head.php';

	include_once 'choose_date.php';
	
	include_once 'sidebar_teams.php';

	sidebar_teams_top();
	
?>	


		<div class="row">
			<div class="col-8">
				
				<div class="row text-end my-3">
					<a href= "create.php" class="link-secondary">Add event</a>
				</div>

				<table class="table">

					<?php
							
						$rows = sport();

						include 'table.php';
						
					?>

				</table>

				<div class="row my-5">
					<a class="link-secondary" href= <?php back(); ?> >Back</a>
				</div>

	
			</div>


<?php 
	sidebar_teams_right();

	include 'footer.php'; 
?>
	
		</div>

</div>

</body>
</html>