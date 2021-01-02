<?php
	require_once 'db_connect.php';

	include_once 'classes.php';

	include_once 'functions.php';

	include_once 'head.php';

	include_once 'choose_date.php';

	include_once 'sidebar_sport.php';

	sidebar_sport_top();
?>

		<div class="row">
			<div class="col-8">
				
				<div class="row text-end my-3">
					<a href= "create.php" class="link-secondary">Add event</a>
				</div>

				<table class="table">

					<?php

						$rows = index();
															
						include 'table.php';
							
					?>		

				</table>

			</div>

<?php 
	sidebar_sport_right();

	include 'footer.php'; 
?>
			
		</div>

</div>

</body>
</html>