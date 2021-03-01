<?php 
	require_once '../../directory.php'; 

	include_once '../../src/Controller/SportController.php';

	include_once '../../src/Controller/SportEventController.php';

	include '../../view/templates/head.php';

	include '../../view/templates/choose_date.php';
?>


		<div class="row m-auto text-center">
			<div class="d-lg-none col-12 mt-5 border rounded">
				<div class="p-3 fs-5 lh-lg">
					<h2>Sports</h2>

					<?php include '../../view/templates/sidebar_sport.php'; ?>

				</div>
			</div>	
		</div>


		<div class="row">
			<div class="col-12 col-lg-8">
				
				<div class="row text-end my-3">
					<a href= "<?php echo BASE_URL; ?>view/sport_event/create.php?sport=Football" class="link-secondary">Add event</a>
				</div>

				<table class="table">

					<?php
						
						$rows = $searchDate;

						include '../../view/templates/table.php';
						
					?>

				</table>

				<div class="row my-5">
					<a class="link-secondary" href= <?php goBack(); ?> >Back</a>
				</div>
				
			</div>

			<div class="d-none d-lg-block col-lg-3 col-xl-2 m-3">
				<div class="border rounded p-3">
					<h4>Sports</h4>

					<?php include '../../view/templates/sidebar_sport.php'; ?>

					</div>
				</div>
			</div>

	
<?php include '../../view/templates/footer.php'; ?>