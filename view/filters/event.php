<?php 
	require_once '../../directory.php'; 

	include '../../view/templates/choose_date.php';
?>


		<div class="row">
			<div class="d-lg-none col-5 col-md-4 mt-5">
				<div class="border rounded p-3">
					<h4>Teams</h4>

						<?php 

							$rows = (new SportEvent)->filterEvent();

							$sport = $rows['sport_name'];	// for using $sport variable without GET from sport sidebar

							include '../../view/templates/sidebar_teams.php'; 

						?>

				</div>
			</div>	
		</div>

		<div class="row">
			<div class="col-8">
				
				<div class="row text-end my-3">
					<a href= "<?php echo BASE_URL; ?>view/sport_event/create.php?sport=<?php echo $sport; ?>" class="link-secondary">Add event</a>
				</div>

					<table class="table table-borderless">

						<?php include '../../view/templates/table_event.php'; ?>

					</table>

				<div class="row my-5">
					<a class="link-secondary" href= <?php (new GeneralService)->goBack(); ?> >Back</a>
				</div>
	
			</div>

			<div class="d-none d-lg-block col-lg-3 col-xl-2 m-3">
				<div class="border rounded p-3">
					<h4>Teams</h4>

					<?php include '../../view/templates/sidebar_teams.php'; ?>

					</div>
				</div>
			</div>


<?php include '../../view/templates/footer.php'; ?>