<?php 
	require_once '../../directory.php'; 

	include '../../view/templates/choose_date.php';
?>


		<div class="row">
			<div class="d-lg-none col-5 col-md-4 mt-5">
				<div class="border rounded p-3">
					<h4>Sports</h4>

					<?php include '../../view/templates/sidebar_sport.php'; ?>

				</div>
			</div>	
		</div>


		<div class="row">
			<div class="col-8">
				
				<div class="row text-end my-3">
					<a href= "<?php echo BASE_URL; ?>view/sport_event/create.php?sport=<?php echo (new Sport)->fetchSportOfTeam()['sport_name']; ?>" class="link-secondary">Add event</a>
				</div>

				<table class="table">

					<?php
							
							$rows = (new SportEvent)->filterTeam();

					    	include '../../view/templates/table.php';
							
					?>

				</table>

				<div class="row my-5">
					<a class="link-secondary" href= <?php (new GeneralService)->goBack(); ?> >Back</a>
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