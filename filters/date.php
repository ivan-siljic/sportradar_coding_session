<?php
	require_once '../db/db_connect.php';

	include_once '../controlls/functions.php';

	include_once '../templates/head.php';

	include_once '../templates/choose_date.php';

	include_once '../templates/sidebar_sport.php';

	sidebar_sport_top();
?>

		<div class="row">
			<div class="col-8">
				
				<div class="row text-end my-3">
					<a href= "../create.php" class="link-secondary">Add event</a>
				</div>

				<table class="table">

					<?php
							
						$rows = date_search();

						include '../templates/table.php';
						
					?>

				</table>

				<div class="row my-5">
					<a class="link-secondary" href= <?php back(); ?> >Back</a>
				</div>
				
			</div>
	
<?php 
	sidebar_sport_right();

	include '../templates/footer.php'; 
?>
	
		</div>

</div>

</body>
</html>