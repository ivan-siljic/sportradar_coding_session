<?php

	require_once '../db/db_connect.php';

	include_once '../controlls/functions.php';

	include_once '../templates/head.php';

	include_once '../templates/choose_date.php';

	include '../templates/sidebar_sport.php';

	sidebar_sport_top();

?>

		<div class="row">
			<div class="col-8">

				<?php
					
					$result = a_create();

					 if($result === TRUE) {
				        succes( 'event' );
				    } else {
				        fail( 'event' );
				    }
				
				?>

				<div class="row my-5">
					<a class="link-secondary" href= <?php back(); ?> >Back</a>
				</div>

			</div>

<?php 
	sidebar_sport_right();
	
	include '../templates/footer.php'
?>

		</div>
</div>

</body>
</html>