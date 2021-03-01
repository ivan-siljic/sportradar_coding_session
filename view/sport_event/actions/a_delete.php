<?php 
	require_once '../../../directory.php'; 
	
	include_once '../../../src/Controller/SportController.php';

	include_once '../../../src/Controller/SportEventController.php';

	include '../../../view/templates/head.php';
?>


		<div class="row">
			<div class="d-lg-none col-5 col-md-4 mt-5">
				<div class="border rounded p-3">
					<h4>Sports</h4>

					<?php include '../../templates/sidebar_sport.php'; ?>

				</div>
			</div>	
		</div>


		<div class="row">
			<div class="col-8">

				<?php
					
					if($deleteSportEvent === TRUE) 
					{
						echo displaySuccess( 'Event deleted successfully!' );
					} 
					else 
					{
						echo displayFail( 'Failed to delete event.' );
					}
				
				?>

				<div class="row my-5">
					<a class="link-secondary" href= <?php echo BASE_URL; ?> >Home</a>
				</div>

			</div>

			<div class="d-none d-lg-block col-lg-3 col-xl-2 m-3">
				<div class="border rounded p-3">
					<h4>Sports</h4>

					<?php include '../../templates/sidebar_sport.php'; ?>

					</div>
				</div>
			</div>


<?php include '../../templates/footer.php'; ?>