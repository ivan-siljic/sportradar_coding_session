<?php 
	require_once '../../directory.php'; 

	include_once '../../src/Controller/TeamController.php';

	include_once '../../src/Controller/SportController.php';

	include_once '../../src/Controller/SportEventController.php';

	include_once '../../src/Controller/PlayerController.php';

	include_once '../../src/Controller/StatsController.php';

	include '../../view/templates/head.php';

	include '../../view/templates/choose_date.php';
?>


		<div class="row m-auto text-center">
			<div class="d-lg-none col-12 mt-5 border rounded">
				<div class="p-3 fs-5 lh-lg">
					<h2>Teams</h2>

						<?php 

							$rows = $filterEvent;
							
							$sport = $rows['sport_name'];	// for using $sport variable without GET from sport sidebar

							$sidebarTeams = fetchTeams($sport);

							include '../../view/templates/sidebar_teams.php'; 

						?>

				</div>
			</div>	
		</div>

		<div class="row">
			<div class="col-12 col-lg-8">
				
				<div class="row text-end my-3">
					<a href= "<?php echo BASE_URL; ?>view/sport_event/create.php?sport=<?php echo $sport; ?>" class="link-secondary">Add event</a>
				</div>

					<table class="table table-borderless">

						<?php include '../../view/templates/table_event.php'; ?>

					</table>

				<div class="row my-5">
					<a class="link-secondary" href= <?php goBack(); ?> >Back</a>
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